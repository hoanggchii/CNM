<?php
function add_medical_record($chandoan, $ketluan, $luuy, $id_examination_schedule, $id_user){
    $sql = "INSERT INTO `hosobenhnhan`(`ChanDoan`, `KetLuan`, `LuuY`, `ID_LichKham`, `MaTaiKhoan`) VALUES ('$chandoan','$ketluan','$luuy', $id_examination_schedule, $id_user);";
    return addsql($sql);
}

function update_medical_record($update_medical, $mahoso){
    $chandoan = $update_medical['result'];
    $ketluan =  $update_medical['conclusions'];
    $luuy = $update_medical['note'];
    $sql = "UPDATE `hosobenhnhan` SET `ChanDoan` = '$chandoan', `KetLuan` = '$ketluan', `LuuY` = '$luuy' WHERE `hosobenhnhan`.`MaHoSo` = $mahoso;";
    execsql($sql, 1);
    return true;
}

function get_medical_record($mahoso) {
    $sql = "SELECT * FROM `hosobenhnhan` WHERE `MaHoSo` = $mahoso";
    return getone($sql);
}

function get_users_by_medical_record($mahoso){
    $sql = "SELECT * FROM `taikhoan` JOIN `hosobenhnhan` ON taikhoan.MaTaiKhoan = hosobenhnhan.MaTaiKhoan WHERE hosobenhnhan.MaHoSo = $mahoso;";
    return getone($sql);
}

function get_medical_record_by_calendar($id_lich) {
    $sql = "SELECT * FROM `hosobenhnhan` WHERE `ID_LichKham` = $id_lich";
    return getone($sql);
}