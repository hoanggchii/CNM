<?php
ob_start();
session_start();
if (isset($_SESSION['doctor'])) {
    # code...
    echo "trang bác sĩ";
} else {
    header('location: ../../Controller/index.php?act=login');
}