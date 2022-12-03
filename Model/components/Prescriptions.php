<?php
function addPrescriptions($tenThuoc, $soLuong, $donVi, $sang, $trua, $toi, $mahoso){
    $sql = "INSERT INTO `kedonthuoc`(`TenThuoc`, `SoLuong`, `DonVi`, `Sang`, `Trua`, `Toi`, `MaHoSo`) VALUES ('$tenThuoc','$soLuong','$donVi','$sang','$trua','$toi',$mahoso)";
    return addsql($sql);
}

function get_prescript_patient($mahoso){
    $sql = "SELECT * FROM `kedonthuoc` WHERE MaHoSo = $mahoso;";
    return getlist($sql);
}

function check_prescript($tenThuoc, $mahoso){
    $sql = "SELECT * FROM `kedonthuoc` WHERE TenThuoc = '$tenThuoc' and MaHoSo = $mahoso;";
    return getone($sql);
}

function print_prescript($mahoso){
    $sql = "SELECT * FROM `taikhoan` JOIN `hosobenhnhan` ON taikhoan.MaTaiKhoan = hosobenhnhan.MaTaiKhoan JOIN `kedonthuoc` ON hosobenhnhan.MaHoSo = kedonthuoc.MaHoSo WHERE hosobenhnhan.MaHoSo = $mahoso;";
    return getlist($sql);
}
?>