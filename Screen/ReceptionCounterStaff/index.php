<?php
ob_start();
session_start();
if (isset($_SESSION['receptionCounterStaff'])) {
    # code...
    echo "trang nhân viên tiếp đón";
} else {
    header('location: ../../Controller/index.php?act=login');
}