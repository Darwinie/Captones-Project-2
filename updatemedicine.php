<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $itemno = $_POST['itemno'];   
  $aquan = $_POST['aquantity'];
  $itmdsc = $_POST['itemdesc'];
  $expdate = $_POST['expdate'];
  
 
  $sql = "UPDATE `tbl_medicine_inventory` SET `Item_no` = '$itemno',
  `quantity` = '$aquan',`item_description_` = '$itmdsc',`expiration_date` = '$expdate' WHERE id = '$id'";

   $query = $con->query($sql) or die ($con->error); 

   $quantity = $_GET[''];
   if($query==1)
   {
      $sql1 = "UPDATE `tbl_medicine_inventory` SET total_quantity = quantity + total_quantity WHERE id = '$id'";
       
       $query = $con->query($sql1) or die ($con->error);
             if($query==1){
               echo "Saved";
             }
   }
   else{
   echo "Message: Error Occured";
 }

   echo header("location: medicine_Inventory.php");
}
?>
