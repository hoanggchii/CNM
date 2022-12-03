<?php
session_start();
//LoadCalendar.php
$connect = new PDO('mysql:host=localhost;dbname=cmn', 'root', '');

$data = array();


// $query = "SELECT * FROM `lich` WHERE ID_BacSi = (SELECT ID_BacSi FROM thongtinbacsi WHERE MaTaiKhoan = $id ORDER BY id )";
$query = " SELECT * FROM lichkham where BacSi = 'Trần Phương Thanh'";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


foreach($result as $row)
{
 $data[] = array(
    'id'   => $row["ID_LichKham"],
    'title'   => $row["VanDeSK"],
    'date'   => $row["ThoiGian"]
//     'ID_lich'   => $row["ID_Lich"],
//   'DateTime'   => $row["DateTime"],
//   'GhiChu'   => $row["GhiChu"],
//   'ID_BacSi'   => $row["ID_BacSi"]
 );
}

echo json_encode($data);
?>