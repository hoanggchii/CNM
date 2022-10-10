<?php
ob_start();
session_start();
if (isset($_SESSION['admin'])) {
    # code...
    echo "trang admin";
} else {
    header('location: ../../Controller/index.php?act=login');
}