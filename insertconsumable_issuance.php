<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $itemno = $_POST['itemno'];   
  $issuedquan = $_POST['issuedquantity'];
  $itmdsc = $_POST['itemdesc'];

 
  $sql = "INSERT INTO `tbl_issuance_consumables`(`Item_no`,`quantity`,`item_description`)
   VALUES ('$itemno','$issuedquan','$itmdsc')";
   $query = $con->query($sql) or die ($con->error); 

   if($query==1)
   {
    

      $sql1 = "UPDATE tbl_consumable_inventory SET quantity = quantity - $issuedquan WHERE Item_no =  '$itemno'";
       
       $query = $con->query($sql1) or die ($con->error);
             if($query==1){
               echo "Saved";
             }
   }
   else{
   echo "Message: Error Occured";
 }

   echo header("location: issuance_consumables.php");
}
?>

