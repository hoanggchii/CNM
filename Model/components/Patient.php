<?php
function get_patient($id_user){
    $sql = "SELECT * FROM hosobenhnhan WHERE MaTaiKhoan = $id_user";
    return getone($sql);
}