<?php
include "../Model/index.php";
include "../View/components/Header.php";
if (isset($_GET['act'])) {
    # code...
    $act = $_GET["act"];
    switch ($act) {
        case 'login':
            # code...
            include "../View/components/Login.php"; 
            break;
        
        default:
            # code...
            include "../View/components/Home.php";
            break;
    }
} else {
    # code...
    include "../View/components/Home.php";
}
include "../View/components/Footer.php";
?>