<?php
function get_patient($id_user){
    $sql = "SELECT * FROM hosobenhnhan WHERE MaTaiKhoan = $id_user";
    return getone($sql);
}
function get_list_patient(){
    $sql = "SELECT * FROM `taikhoan` WHERE role = 0;";
    return getlist($sql);
}

function update_patient_records($update_info, $id_patient){
    // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
    $user_name = $update_info['username'];
    $birthday = $update_info['birthday'];
    $phone = $update_info['phone'];
    $email = $update_info['email'];
    $cmnd = $update_info['cmnd'];   
    $address = $update_info['address'];
    $sql = "UPDATE `taikhoan` SET `HoTen` = '$user_name', `NgaySinh` = '$birthday', `SDT` = '$phone', `Email` = '$email', `CMND` = '$cmnd', `DiaChi` = '$address' WHERE `taikhoan`.`MaTaiKhoan` = $id_patient;";
    execsql($sql, 1);
    return true;
}

function add_patient($user_name, $birthday, $phone, $email, $cmnd, $address, $role){
    $sql = "INSERT INTO `taikhoan`(`HoTen`, `NgaySinh`, `SDT`, `Email`, `CMND`, `DiaChi`, `Role`) VALUES ('$user_name','$birthday','$phone','$email','$cmnd','$address','$role')";
    return addsql($sql);
}

