<?php
ob_start();
session_start();
if (isset($_SESSION['cashier'])) {
    # code...
    echo "trang nhân viên thu ngân";
} else {
    header('location: ../../Controller/index.php?act=login');
}