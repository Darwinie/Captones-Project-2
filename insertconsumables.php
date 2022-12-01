<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $itemno = $_POST['itemno'];   
  $tquan = $_POST['tquantity'];
  $aquan = $_POST['aquantity'];
  $itmdsc = $_POST['itemdesc'];

 
  $sql = "INSERT INTO `tbl_consumable_inventory`(`Item_no`,`total_quantity`,`quantity`,`item_description`) VALUES 
  ('$itemno','$tquan','$aquan','$itmdsc')";
   $query = $con->query($sql) or die ($con->error); 

   echo header("location: consumables_Inventory.php");
}
?>

