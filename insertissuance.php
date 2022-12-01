<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $itemno = $_POST['itemno'];   
  $issuedquan = $_POST['issuedquantity'];
  $unitissue = $_POST['unitissue'];
  $itmdsc = $_POST['itemdesc'];
  $placeissued = $_POST['placeissued'];
  $expdate = $_POST['expdate'];
 
  $sql = "INSERT INTO `tbl_issuance_inventory`(`Item_no`,`quantity`,`item_description`,`unit_of_ssue`,
   `place_issued`,`expiration_date`)
   VALUES ('$itemno','$issuedquan','$unitissue','$itmdsc','$placeissued','$placeissued')";
   $query = $con->query($sql) or die ($con->error); 

   if($query==1)
   {
    

      $sql1 = "UPDATE tbl_medicine_inventory SET quantity = quantity - $issuedquan WHERE Item_no =  '$itemno'";
       
       $query = $con->query($sql1) or die ($con->error);
             if($query==1){
               echo "Saved";
             }
   }
   else{
   echo "Message: Error Occured";
 }

   echo header("location: issuance_Inventory.php");
}
?>

