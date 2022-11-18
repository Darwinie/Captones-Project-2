<?php
include_once("connections/connections.php");
$con = connection();

if(isset($_POST['delete'])){

    $id = $_POST['ID'];
    $sql = "DELETE FROM patient_information WHERE id = '$id'";
    $con->query($sql) or die ($con->error);
    echo header("Location: Adminhealthoffice.php");
}

?>