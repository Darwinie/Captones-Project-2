<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
 
  $lname = $_POST['lastname'];
  $fname = $_POST['firstname'];
  $mname = $_POST['middlename'];
  $contact = $_POST['contactno'];
  $addrs = $_POST['address'];
  $uname = $_POST['username'];
  $pass = $_POST['password'];
  $access = $_POST['access'];
 
  $sql = "INSERT INTO `user_accounts`(`last_name`, `first_name`, `middle_name`, 
  `contact_no`, `adress`, `username`, `password`, `access`) VALUES ('$lname','$fname',
   '$mname','$contact','$addrs','$uname','$pass','$access')";
   $query = $con->query($sql) or die ($con->error);

  
//    if($query==1)
//    {
//          $sql = "INSERT INTO `medical_itr`(`family_number`,`mode_transaction`, `referred_from`, `referred_to`, `referral_reason`,
//          `referred_by`, `consultation_date`, `consultation_time`, `attending_provider`, `nature_visit`, `bloodpressure`, `temperature`,
//           `respiratory_rate`, `pulse_rate`, `height`, `weight`, `chief_complaints`, `diagnosis`, `medication_treatment`, 
//           `healthcare_provider`, `laboratory_findings`, `performedlaboratory_tes` ) VALUES ('$fserial','$transacmode','$reffrom','$refto','$refreason','$refby','$consuldate','$consultime','$attprovider','$natvisit',
//           '$bpressure','$temp','$respirate','$prate','$height','$weight','$ccomplaints','$diag','$medtreatment',
//           '$hcareprovider','$labfindings ','$perflaboratory')";
//           $query = $con->query($sql) or die ($con->error);
//                 if($query==1){
//                   echo "Saved";
//                 }
//    }

   echo header("location: usermaintenanceTable.php");
}
?>



