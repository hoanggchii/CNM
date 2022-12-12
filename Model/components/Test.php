<?php

function add_test($name, $img, $maHoSo){
    $query = "INSERT INTO `xetnghiem`(`Name`, `Img`, `MaHoSo`) VALUES ('$name', '$img', $maHoSo)";
    return addsql($query);
}

function print_img($maHoSo){
    $query = "SELECT * FROM `hosobenhnhan`JOIN `xetnghiem` ON hosobenhnhan.MaHoSo = xetnghiem.MaHoSo WHERE hosobenhnhan.MaHoSo = $maHoSo";
    return getlist($query);
}