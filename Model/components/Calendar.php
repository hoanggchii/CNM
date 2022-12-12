<?php

function add_calendar($datetime, $note, $user_id){
    $sql = "INSERT INTO `lich`( `DateTime`, `GhiChu`, `ID_BacSi`) 
    VALUES ('$datetime','$note','$user_id')";
    return addsql($sql);
}

function add_calendar_medical($chuyenkhoa, $doctor, $datetime, $id_user, $note){
    // $sql = "INSERT INTO `lichkham`( `ChuyenKhoa`, `BacSi`, `ThoiGian`, `MaTaiKhoan`, `VanDeSK`) 
    // VALUES ('$chuyenkhoa','$doctor','$datetime','$id_user', '$note')";
    $sql = "INSERT INTO `lichkham`(`ChuyenKhoa`, `BacSi`, `ThoiGian`, `MaTaiKhoan`, `VanDeSK`) VALUES ('$chuyenkhoa','$doctor','$datetime','$id_user','$note')";
    return addsql($sql);
}

function get_calendar($id_doctor){
    $sql = "SELECT * FROM thongtinbacsi JOIN lich ON thongtinbacsi.ID_BacSi = lich.ID_BacSi WHERE thongtinbacsi.ID_BacSi = $id_doctor";
    return getlist($sql);
}

function get_one_calendar($id_calendar){
    $sql = "SELECT * FROM thongtinbacsi JOIN lich ON thongtinbacsi.ID_BacSi = lich.ID_BacSi WHERE lich.id = $id_calendar";
    return getone($sql);
}

function get_calendar_doctor($id_doctor){
    $query = "SELECT * FROM lich WHERE ID_BacSi =  $id_doctor ORDER BY ID_Lich";
    return getlist($query);
}

function get_calendar_patient($id_patient){
    $sql = "SELECT * FROM `lichkham` WHERE MaTaiKhoan = $id_patient";
    return getlist($sql);
}

function get_medical_exam($user_id){
    $sql = "SELECT * FROM `lichkham` JOIN `hosobenhnhan` ON lichkham.ID_LichKham = hosobenhnhan.ID_LichKham WHERE lichkham.MaTaiKhoan = $user_id";
    return getlist($sql);
}

function get_by_calendar($id_calendar){
    $sql = "SELECT * FROM `lichkham` WHERE ID_LichKham = $id_calendar";
    return getone($sql);
}

function update_calendal($id_calendar){
    $sql = "UPDATE `lichkham` SET `GhiChu`='Xác nhận' WHERE ID_LichKham = $id_calendar";
    return execsql($sql, 0);
}