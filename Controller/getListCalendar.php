<?php
$id = $_REQUEST['id'];
$servername = "localhost";
$username = "root";
$password = "";
$mysqli = new mysqli("localhost", "root", "", "cmn");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$sql = "SELECT * FROM thongtinbacsi JOIN lich ON thongtinbacsi.ID_BacSi = lich.ID_BacSi WHERE thongtinbacsi.ID_BacSi = $id";
$result = $mysqli->query($sql);

// Associative array
// get id bac si
$data = array();
while ($row = mysqli_fetch_array($result)) {
    // echo "<option value='" . $row["ID_BacSi"] . "'>" . $row["ID_BacSi"] . "</option>";
    $data[] = array("id" => $row['id'],"calendar" => $row['DateTime']);
}
// Free result set
$result->free_result();

$mysqli->close();
die(json_encode($data));
// echo "<option value='" . $data["id"] . "'>" . $data["id"] . "</option>";
