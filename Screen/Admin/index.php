<?php
ob_start();
session_start();

if (isset($_SESSION['admin'])) {
    include "../../Model/index.php";
    include "../Admin/View/Header.php";
    if (isset($_GET['act'])) {
        $act = $_GET["act"];
        switch ($act) {

            // Danh sách người dùng
            case 'user-administration':
                $user = get_user();
                include './View/ViewUserInformation.php';
                break;

            case 'add-user':
                if (isset($_POST['btnAddUser']) && ($_POST['btnAddUser'])) {
                    // echo "ddax add";
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $rpass = $_POST['rpass'];
                    $name = $_POST['name'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    if ($pass != $rpass || finduser($user) != NULL) {
                        # code...
                        if (finduser($user) != NULL) {
                            # code...
                            echo header("refresh:0");
                            echo '<script>alert("Tên đăng nhập đã tồn tại vui lòng nhập lại!");</script>';
                        } else {
                            # code...
                            echo header("refresh:0");
                            echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
                        }
                    } elseif (!preg_match("/^([a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđA-ZỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ0-9]+)((\s{1}[a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđA-ZỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ0-9]+){1,})$/", $name)) {
                        # code...
                        echo header("refresh:0");
                        echo '<script>alert("Họ tên không hợp lệ");</script>';
                    } elseif (!preg_match("/^(?=.*[a-z])(?=.*\d)[a-zA-Z\d]{8,}$/", $pass)) {
                        # code...
                        echo header("refresh:0");
                        echo '<script>alert("Mật khẩu tối thiểu 8 ký tự và ít nhất 1 số");</script>';
                    } elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $sdt)) {
                        # code...
                        echo '<script>alert("Số điện thoại không chính xác!!");</script>';
                        echo header("refresh:0");
                    } elseif (!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)) {
                        echo header("refresh:0");
                        echo '<script>alert("Email không hợp lệ");</script>';
                    } else {
                        # code...
                        $pass_hash = md5($pass);
                        $id = adduser($user, $pass_hash, $role, $sdt, $name, $email);
                        echo header("refresh:0; url='index.php?act=user-administration'");
                        echo '<script>alert("Đăng ký tài khoản thành công");</script>';
                    }
                }
                include './View/AddUser.php';
                break;
            // Logout
            case 'logout':
                if (isset($_SESSION['admin'])) unset($_SESSION['admin']);
                header('location: ../../Controller/index.php?act=logout');
                break;

            default:
                # code...
                include "../Admin/View/Dashboard.php";
                break;
        }
    }else {
        # code...
        include "../Admin/View/Dashboard.php";
    }
    # code...
    // echo "trang bác sĩ";
    include "../Admin/View/Footer.php";
} else {
    header('location: ../../Controller/index.php?act=login');
}