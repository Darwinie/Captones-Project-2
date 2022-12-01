<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $itemno = $_POST['itemno'];   
  $aquan = $_POST['aquantity'];
  $itmdsc = $_POST['itemdesc'];

  
 
  $sql = "UPDATE `tbl_consumable_inventory` SET `Item_no` = '$itemno',
  `quantity` = '$aquan',`item_description` = '$itmdsc' WHERE id = '$id'";

   $query = $con->query($sql) or die ($con->error); 

   $quantity = $_GET[''];
   if($query==1)
   {
      $sql1 = "UPDATE `tbl_consumable_inventory` SET total_quantity = quantity + total_quantity WHERE id = '$id'";
       
       $query = $con->query($sql1) or die ($con->error);
             if($query==1){
               echo "Saved";
             }
   }
   else{
   echo "Message: Error Occured";
 }

   echo header("location: consumables_Inventory.php");
}
?>
