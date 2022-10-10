<?php

function checkuser($user,$pass){
    $sql="SELECT * from taikhoan where TenDangNhap='".$user."' and MatKhau='".$pass."'";
    return getone($sql);
}

function adduser($user, $pass, $role, $phone, $name, $email){
    $sql="INSERT INTO taikhoan (TenDangNhap, MatKhau, Role, SDT, HoTen, Email) VALUES ('$user', '$pass', '$role', '$phone','$name', '$email')";
    return addsql($sql);
}

function updatepass($user,$pass){
    $sql="UPDATE taikhoan set MatKhau='".$pass."' where TenDangNhap='".$user."'";
    return execsql($sql,0);
}

function finduser($user){
    $sql="SELECT * from taikhoan where TenDangNhap='".$user."'";
    return getone($sql);
}

function getPassHash($user){
    $sql="SELECT MatKhau from taikhoan where TenDangNhap='".$user."'";
    return getone($sql);
}

function get_user_by_id($user_id) {
    $sql = "SELECT * FROM taikhoan WHERE MaTaiKhoan = $user_id";
    return getone($sql);
}

function update_user_by_id($update_info, $user_id) {
    // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
    $address = $update_info['address'];
    $phone = $update_info['phone'];
    $email = $update_info['email'];
    $name = $update_info['name'];
    $dob = $update_info['dob'];
    $cmnd = $update_info['cmnd'];
    $sql = "UPDATE taikhoan SET DiaChi = '$address', SDT = '$phone', HoTen = '$name', NgaySinh = '$dob', Email = '$email', CMND = '$cmnd' WHERE MaTaiKhoan = $user_id";
    execsql($sql, 1);
    return true;
}

function add_medical_examination($specialty, $doctor, $date, $time, $user_id){
    // thêm lịch khám
    $sql = "INSERT INTO lichkham (ChuyenKhoa, BacSi, Ngay, Gio, MaTaiKhoan) VALUES ('$specialty', '$doctor', '$date','$time', '$user_id')";
    return addsql($sql);
}

