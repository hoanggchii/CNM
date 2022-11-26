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
                include './View/ListMedicalRecord.php';
                break;

                // xem lich kham benh
            case 'check-calendar':
                $id_user = get_doctor($_SESSION['id'])['ID_BacSi'];
                include './View/CheckCalendar.php';
                break;

            // đăng ký lịch khám bệnh
            case 'registe-calendar':
                if (isset($_POST['btnAdd'])) {
                    $datetime = $_POST['DateTime'];
                    $note = $_POST['message'];
                    $user = get_doctor($_SESSION['id'])['ID_BacSi'];
                    $result = add_calendar($datetime, $note, $user);
                    echo '<script>alert("Thêm thành công");</script>';
                    echo header("refresh:0; url='../Doctor/index.php?act=registe-calendar'");
                }
                include "./View/RegisteCalendar.php";
                break;
            // list patient: dnah sách bệnh nhân
            case 'list-patient':
                $patient = get_list_patient();
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
                    }else{
                        $update_patient = ['username' => $user_name, 'birthday' => $birth_day, 'phone' => $phone, 'email' => $email, 'cmnd' => $identity_card, 'address' => $address];
                        // print_r($update_patient);
                        $update = update_patient_records($update_patient, $idRequest);
                        if ($update) {
                            # code...
                            echo '<script>alert("Cập nhật thành công");</script>';
                            echo header("refresh:0; url='../Doctor/index.php?act=list-patient'");
                        } else{
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
                    } else{
                        add_patient($user_name, $birth_day, $phone, $email, $identity_card, $address, $role);
                        echo header("refresh:0; url='../Doctor/index.php?act=list-patient'");
                        echo '<script>alert("Thêm bệnh nhân thành công");</script>';
                    }
                }
                include './View/AddPatient.php';
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
