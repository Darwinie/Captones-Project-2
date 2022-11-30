<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $lname = $_POST['lastname'];
  $fname = $_POST['firstname'];
  $mname = $_POST['middlename'];
  $contact = $_POST['contactno'];
  $addrs = $_POST['address'];
  $uname = $_POST['username'];
  $pass = $_POST['password'];
  $access = $_POST['acess'];
 
  $sql = "UPDATE `user_accounts` SET `last_name` = '$lname', `first_name` = '$fname', `middle_name` = '$mname', 
  `contact_no` = '$contact', `adress` = '$addrs', `username` = '$uname', `password` = '$pass', 
  `access` = '$access' WHERE id = '$id'";
   $query = $con->query($sql) or die ($con->error);

  

   echo header("location: usermaintenanceTable.php");
}
?>



