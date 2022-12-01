<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $itemno = $_POST['itemno'];   
  $tquan = $_POST['tquantity'];
  $aquan = $_POST['aquantity'];
  $itmdsc = $_POST['itemdesc'];
  $expdate = $_POST['expdate'];
 
  $sql = "INSERT INTO `tb_brgymedicine_inventory`(`Item_no`,`total_quantity`,`quantity`,`item_description_`,`expiration_date`) VALUES 
  ('$itemno','$tquan','$aquan','$itmdsc','$expdate')";
   $query = $con->query($sql) or die ($con->error); 

   echo header("location: brgy_medicine_inventory.php");
}
?>

