<?php
function get_specialty(){
    $query = "SELECT * FROM ChuyenKhoa";
    return getlist($query);
}
function thongtin($chuyenkhoa){
    $query= "SELECT * FROM taikhoan JOIN thongtinbacsi on taikhoan.MaTaiKhoan = thongtinbacsi.MaTaiKhoan WHERE thongtinbacsi.ChuyenKhoa = $chuyenkhoa";
    return getlist($query);
}