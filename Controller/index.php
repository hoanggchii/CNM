<?php
ob_start();
session_start();

include "../Model/index.php";
include "../View/components/Header.php";
if (isset($_GET['act'])) {
    # code...
    $act = $_GET["act"];
    switch ($act) {

        // login
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $user = $_POST["user"];
                $pass = $_POST['pass'];
                if (finduser($user) != NULL) {
                    $pass_hash = getPassHash($user)['MatKhau'];
                    if (md5($pass) == $pass_hash) {
                        $user1 = finduser($user);
                        $_SESSION['id'] = $user1['MaTaiKhoan'];
                        $_SESSION['user'] = $user1['TenDangNhap'];
                        //Role 1 quản lí bệnh viện
                        if ($user1['Role'] == 1) {
                            $_SESSION['admin'] = $user;
                            header('location: ../Screen/Admin/index.php');
                            //Role 2 quản lí hệ thống
                        } else if ($user1['Role'] == 2) {
                            $_SESSION['cashier'] = $user;
                            header('location: ../Screen/Cashier/index.php');
                            //Role 3 nhân viên bệnh viện
                        } else if ($user1['Role'] == 3) {
                            $_SESSION['doctor'] = $user;
                            header('location: ../Screen/Doctor/index.php');
                            //Role 4 
                        } else if ($user1['Role'] == 4) {
                            $_SESSION['receptionCounterStaff'] = $user;
                            header('location: ../Screen/ReceptionCounterStaff/index.php');
                        } else {
                            setcookie('user', $_SESSION['user'], time() + (86400 * 10), '/');
                            setcookie('id', $_SESSION['id'], time() + (86400 * 10), '/');
                            header('location: index.php');
                        }
                    } else echo '<script>alert("Nhập sai mật khẩu")</script>';
                } else echo '<script>alert("Không có tài khoản trong database")</script>';
            }
            include "../View/components/Login.php";
            break;

        // Register
        case "register":
            if (isset($_POST['register']) && ($_POST['register'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $rpass = $_POST['rpass'];
                $name = $_POST['name'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                if ($pass != $rpass || finduser($user) != NULL) {
                    # code...
                    if (finduser($user) != NULL) {
                        # code...
                        echo header("refresh:0; url='../Controller/index.php?act=register'");
                        echo '<script>alert("Tên đăng nhập đã tồn tại vui lòng nhập lại!");</script>';
                    } else {
                        # code...
                        echo header("refresh:0; url='../Controller/index.php?act=register'");
                        echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
                    }
                } elseif (!preg_match("/^([a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđA-ZỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ0-9]+)((\s{1}[a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđA-ZỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ0-9]+){1,})$/", $name)) {
                    # code...
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                    echo '<script>alert("Họ tên không hợp lệ");</script>';
                } elseif (!preg_match("/^(?=.*[a-z])(?=.*\d)[a-zA-Z\d]{8,}$/", $pass)) {
                    # code...
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                    echo '<script>alert("Mật khẩu tối thiểu 8 ký tự và ít nhất 1 số");</script>';
                } elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $sdt)) {
                    # code...
                    echo '<script>alert("Số điện thoại không chính xác!!");</script>';
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                } elseif (!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)) {
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                    echo '<script>alert("Email không hợp lệ");</script>';
                } else {
                    # code...
                    $pass_hash = md5($pass);
                    $role = 0;
                    $id = adduser($user, $pass_hash, $role, $sdt, $name, $email);
                    echo header("refresh:0; url='../Controller/index.php?act=login'");
                    echo '<script>alert("Đăng ký tài khoản thành công");</script>';
                }
                // if (finduser($user) == NULL) {
                //     $pass_hash = md5($pass);
                //     $role = 0;
                //     $sdt = $_POST['sdt'];
                //     $email = $_POST['email'];
                //     $id = adduser($user, $pass_hash, $role, $sdt, $email);
                //     header('location: index.php?act=login');
                // }
                // elseif ($pass != $rpass) {
                //     # code...
                //     echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
                //     echo header("refresh:0; url='../Controller/index.php?act=register'");
                // }
                // else {
                //     echo '<script>alert("Tên đăng nhập đã tồn tại vui lòng nhập lại!");</script>';
                //     echo header("refresh:0; url='../Controller/index.php?act=register'");
                // }
            }
            include "../view/components/Register.php";
            break;

        // Personal Information <thong tin ca nhan>
        case 'personal-information':
            $user = get_user_by_id($_SESSION['id']);
            include "../View/components/PersonalInformation.php";
            break;

        //cap nhat thong tin ca nhan
        case 'updatePerIf':
            // lấy thông tin user
            $user = get_user_by_id($_SESSION['id']);
            $TenDN = $user["TenDangNhap"];
            $HoTen = $user["HoTen"];
            $DiaChi = $user['DiaChi'];
            $NgaySinh = $user["NgaySinh"];
            $SDT = $user["SDT"];
            $Mail = $user["Email"];
            $CMND = $user["CMND"];
            if (isset($_POST['btnUpdate'])) {
                // Đọc thông tin mới từ Form để update
                $user_id = $_SESSION['id'];
                echo $user_id;
                $new_address = $_POST['address'];
                $new_email = $_POST['email'];
                $new_phone = $_POST['tel'];
                $new_date = $_POST['date'];
                $new_name = $_POST['name'];
                $new_cmnd = $_POST['cmnd'];
                // update thông tin user
                if(!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{1,}$/",$new_name)){
                    echo "<script>alert('Nhập sai tên')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[0][3|7|9][0-9]{8}$/",$new_phone)){
                    echo "<script>alert('Nhập sai số điện thoại')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[0-9]{9}$/",$new_cmnd)){
                    echo "<script>alert('Nhập sai cmnd')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[a-zA-Z0-9]{0,50}[@][a-z]{3,7}[.][a-z]{3}$/",$new_email)){
                    echo "<script>alert('Nhập sai email')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[0-9\/]{1,}+,+[0-9A-Za-z.ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}$/",$new_address)){
                    echo "<script>alert('Nhập sai địa chỉ')</script>";
                    echo header('refresh:0');
                    break;
                }
                $date=getdate();
                $day = $date['mday'];
                $month = $date['mon'];
                $year = $date['year'];
                $time="$year-$month-$day";
                if(strtotime($new_date)>strtotime($time)){
                    echo "<script>alert('Nhập sai ngày')</script>";
                    echo header('refresh:0');
                    break;
                }
                $update_info = ['name' => $new_name, 'address' => $new_address, 'phone' => $new_phone, 'dob' => $new_date, 'email' => $new_email, 'cmnd' => $new_cmnd];
                $result = update_user_by_id($update_info, $user_id);
                if ($result) {
                    echo "<script>alert('Cập nhật thông tin thành công')</script>";
                    header('refresh:0; url ="index.php?act=edit_user"');
                } else {
                    
                    include "../View/components/UpdatePersonalInformation.php";
                }
            }
            include "../View/components/UpdatePersonalInformation.php";
            break;

        // For Customers:
        case 'registe-medical':
            $RegisteMedicalExamination = get_specialty();
            if (isset($_POST['txtchuyenkhoa'])) {
                $print = thongtin($_POST['txtchuyenkhoa']);
            }
            include "../View/components/RegisteMedicalExamination.php";
            break;

        // result medical
        case 'result-medical':
            $user = get_user_by_id($_SESSION['id']);
            include "../View/components/ResultMedicalExamination.php";
            break;

        // Logout
        case 'logout':
            if (isset($_SESSION['id'])) unset($_SESSION['id']);
            if (isset($_SESSION['user'])) unset($_SESSION['user']);
            // setcookie('user', '', time() - 1, '/');
            // setcookie('id', '', time() - 1, '/');
            // include "../view/components/Home.php";
            header('location: index.php');
            // include "../index.php";
            break;

        default:
            # code...
            include "../View/components/Home.php";
            break;
    }
} else {
    # code...
    include "../View/components/Home.php";
}
include "../View/components/Footer.php";
?>