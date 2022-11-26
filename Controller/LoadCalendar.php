<?php
session_start();
//LoadCalendar.php
$connect = new PDO('mysql:host=localhost;dbname=cmn', 'root', '');

$data = array();


// $query = "SELECT * FROM `lich` WHERE ID_BacSi = (SELECT ID_BacSi FROM thongtinbacsi WHERE MaTaiKhoan = $id ORDER BY id )";
$query = " SELECT * FROM lich where ID_BacSi = 1";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


foreach($result as $row)
{
 $data[] = array(
    'id'   => $row["id"],
    'title'   => $row["GhiChu"],
    'date'   => $row["DateTime"]
//     'ID_lich'   => $row["ID_Lich"],
//   'DateTime'   => $row["DateTime"],
//   'GhiChu'   => $row["GhiChu"],
//   'ID_BacSi'   => $row["ID_BacSi"]
 );
}

echo json_encode($data);
?>