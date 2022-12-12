<?php

function get_doctor($id_user){
    $query = "SELECT * FROM taikhoan JOIN thongtinbacsi on taikhoan.MaTaiKhoan = thongtinbacsi.MaTaiKhoan where taikhoan.MaTaiKhoan = $id_user";
    return getone($query);
}
function get_specialty()
{
    $query = "SELECT * FROM chuyenkhoa";
    return getlist($query);
}
function thongtin($chuyenkhoa)
{
    $query = "SELECT * FROM taikhoan JOIN thongtinbacsi on taikhoan.MaTaiKhoan = thongtinbacsi.MaTaiKhoan WHERE thongtinbacsi.ID_ChuyenKhoa = $chuyenkhoa";
    return getlist($query);
}

function get_one_specialty($specialty)
{
    $query = "SELECT * FROM chuyenkhoa WHERE ID_ChuyenKhoa = $specialty";
    return getone($query);
}

function get_one_doctor($id_doctor){
    $query = "SELECT * FROM taikhoan JOIN thongtinbacsi on taikhoan.MaTaiKhoan = thongtinbacsi.MaTaiKhoan where thongtinbacsi.ID_BacSi = $id_doctor";
    return getone($query);
}


