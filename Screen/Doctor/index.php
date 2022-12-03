<?php
ob_start();
session_start();

if (isset($_SESSION['doctor'])) {
    include "../../Model/index.php";
    include "../Doctor/View/Header.php";

    if (isset($_GET['act'])) {
        $act = $_GET["act"];
        switch ($act) {
            case 'list-medical-record':
                $medicalRecord = get_list_medical_record();
                // print_r($medicalRecord);
                include './View/ListMedicalRecord.php';
                break;
                // 
            case 'update-medical-record':
                $idRequest = $_GET['id'];
                $re = get_medical_record($idRequest);
                if (isset($_POST['btnUpdate'])) {
                    # code...
                    $mahoso = $_GET['id'];
                    $result = $_POST['result'];
                    $conclusions = $_POST['conclusions'];
                    $note = $_POST['note'];
                    if ($result == $re['ChanDoan'] && $conclusions == $re['KetLuan'] && $note = $re['LuuY']) {
                        echo '<script>alert("Bạn chưa thay đổi thông tin nào");</script>';
                    } else {
                        $update_medical_record = ['result' => $result, 'conclusions' => $conclusions, 'note' => $note];
                        $update = update_medical_record($update_medical_record, $idRequest);
                        if ($update) {
                            # code...
                            echo '<script>alert("Cập nhật thành công");</script>';
                            echo header("refresh:0; url='../Doctor/index.php?act=list-medical-record'");
                        } else {
                            include './View/UpdateMedicalRecord.php';
                        }
                    }
                }
                include './View/UpdateMedicalRecord.php';
                break;
                // xem lich kham benh
            case 'check-calendar':
                $id_user = get_doctor($_SESSION['id'])['ID_BacSi'];
                include './View/CheckCalendar.php';
                break;

                // đăng ký lịch khám bệnh
            case 'registe-calendar':
                if (isset($_POST['btnAdd'])) {
                    $date = $_POST['day'];
                    $starttime = $_POST['startTime'];
                    $endTime = $_POST['endTime'];
                    $note = $_POST['message'];
                    $s_starttime = substr($starttime, 0, -3) * 60 + substr($starttime, 3);
                    // echo $s_starttime.'<br>';
                    $s_endtime = substr($endTime, 0, -3) * 60 + substr($endTime, 3);
                    if ((int)($s_starttime) > (int)($s_endtime)) {
                        echo '<script>alert("Giờ bắt đầu phải trước giờ kết thúc");</script>';
                    } else {

                        for ($i = $s_starttime; $i <= $s_endtime - 30; $i += 30) {
                            //echo $i.'<br>';
                            $j = (int)($i) % 60;
                            $k = floor($i / 60);
                            //echo 'giờ'.$k.'<br>';
                            //echo 'phút'.$j.'<br>';
                            $time = $date . ' ' . $k . ':' . $j;
                            // echo $time;
                            $user = get_doctor($_SESSION['id'])['ID_BacSi'];
                            $result = add_calendar($time, $note, $user);
                        }
                        echo '<script>alert("Thêm thành công");</script>';
                        echo header("refresh:0; url='../Doctor/index.php?act=registe-calendar'");
                    }

                    // echo date('H:i', strtotime($TimeEnd) - strtotime($datetime));

                    // echo date('H:i', strtotime($TimeEnd-$datetime));
                    // $cenvertedTime =     
                    // echo '<br>';
                    // echo $cenvertedTime;

                    // db
                }
                include "./View/RegisteCalendar.php";
                break;
                // list patient: dnah sách bệnh nhân
            case 'list-patient':
                $patient = get_list_patient();
                // print_r($patient);
                // $medical_record = get_medical_record($id);
                include "./View/ListPatient.php";
                break;
                // update patient: cập nhật thông tin bệnh nhân
            case 'update-patient':
                $idRequest = $_GET['id'];
                // echo $idRequest;
                $result = get_user_by_id($idRequest);
                if (isset($_POST['btnUpdate'])) {
                    $id = $_GET['id'];
                    $user_name = $_POST['username'];
                    $birth_day = $_POST['birthday'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $identity_card = $_POST['identitycard'];
                    $address = $_POST['address'];
                    // echo $result["HoTen"];
                    if ($user_name == $result["HoTen"] && $birth_day == $result["NgaySinh"] && $phone == $result["SDT"] && $email == $result["Email"] && $identity_card == $result['CMND'] && $address == $result['DiaChi']) {
                        # code...
                        echo '<script>alert("Bạn chưa thay đổi thông tin nào");</script>';
                        // echo header("refresh:0; url='../Doctor/index.php?act=update-patient'");
                    } else {
                        $update_patient = ['username' => $user_name, 'birthday' => $birth_day, 'phone' => $phone, 'email' => $email, 'cmnd' => $identity_card, 'address' => $address];
                        // print_r($update_patient);
                        $update = update_patient_records($update_patient, $idRequest);
                        if ($update) {
                            # code...
                            echo '<script>alert("Cập nhật thành công");</script>';
                            echo header("refresh:0; url='../Doctor/index.php?act=list-patient'");
                        } else {
                            include './View/UpdatePatient.php';
                        }
                    }
                }

                include './View/UpdatePatient.php';
                break;
                // add patient: thêm bệnh nhân
            case 'add-patient':
                if (isset($_POST['btnAdd']) && $_POST['btnAdd']) {
                    # code...
                    $user_name = $_POST['username'];
                    $birth_day = $_POST['birthday'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $identity_card = $_POST['identitycard'];
                    $address = $_POST['address'];
                    $role = 0;
                    $check_user = check_username($user_name);

                    if ($user_name == $check_user['HoTen'] && $birth_day == $check_user['NgaySinh'] && $phone == $check_user["SDT"] && $email == $check_user["Email"] && $identity_card == $check_user['CMND'] && $address == $check_user['DiaChi']) {
                        # code...
                        echo '<script>alert("Thông tin bạn nhập đã tồn tại");</script>';
                    } else {
                        add_patient($user_name, $birth_day, $phone, $email, $identity_card, $address, $role);
                        echo header("refresh:0; url='../Doctor/index.php?act=list-patient'");
                        echo '<script>alert("Thêm bệnh nhân thành công");</script>';
                    }
                }
                include './View/AddPatient.php';
                break;

                // add-medical-record
            case 'add-medical-record':
                if (isset($_POST["btnAdd"]) && $_POST["btnAdd"]) {
                    $idRequest = $_GET['id'];
                    $result = $_POST["result"];
                    $conclusions = $_POST["conclusions"];
                    $note = $_POST["note"];

                    $add_medical_record = add_medical_record($result, $conclusions, $note, $idRequest);
                    echo header("refresh:0; url='../Doctor/index.php?act=list-patient'");
                    echo '<script>alert("Thêm bệnh án thành công");</script>';
                }
                // echo $idRequest;

                include './View/AddMedicalRecord.php';
                break;
            case 'add-prescriptions':
                $idRequest = $_GET['id'];
                $get_prescript_patient = get_prescript_patient($_GET['id']);
                if (isset($_POST['btnAdd']) && $_POST['btnAdd']) {
                    # code...
                    $maHoSo = $_GET['id'];
                    $drugname = $_POST['drugname'];
                    $amount = $_POST['amount'];
                    $DVT = $_POST['DVT'];
                    $soluongs = $_POST['soluongs'];
                    $donvi = $_POST['donvi'];
                    $shining = $soluongs . ' ' . $donvi;
                    $soluongtr = $_POST['soluongtr'];
                    $loai = $_POST['loai'];
                    $lunch = $soluongtr . ' ' . $loai;
                    $soluongt = $_POST['soluongt'];
                    $dang = $_POST['dang'];
                    $dinner = $soluongt . ' ' . $dang;
                    $check = check_prescript($drugname, $maHoSo);
                    if ($drugname == $check['TenThuoc']) {

                        echo '<script>alert("Thuốc này bạn đã thêm trước đó");</script>';
                    } else {
                        $add_prescriptions = addPrescriptions($drugname, $amount, $DVT, $shining, $lunch, $dinner, $maHoSo);
                        // echo header("refresh:0; url='../Doctor/index.php?act=list-patient'");
                        echo '<script>alert("Thêm thuốc thành công");</script>';
                    }
                }
                include './View/AddPrescriptions.php';
                break;
            case 'print-medical-records':
                $idRequest = $_GET['id'];
                $print_prescript = print_prescript($idRequest);
                $user = get_users_by_medical_record($idRequest);
                include './View/PrintMedicalRecords.php';
                break;
                // profile
            case 'profile':
                include './View/Profile.php';
                break;
                // Logout
            case 'logout':
                if (isset($_SESSION['doctor'])) unset($_SESSION['doctor']);
                header('location: ../../Controller/index.php?act=logout');
                break;

            default:
                # code...
                include "../Doctor/View/Dashboard.php";
                break;
        }
    } else {
        # code...
        include "../Doctor/View/Dashboard.php";
    }
    # code...
    // echo "trang bác sĩ";
    include "../Doctor/View/Footer.php";
} else {
    header('location: ../../Controller/index.php?act=login');
}
