<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $fserial = $_POST['familyserial']; 
  $lname = $_POST['lastname'];
  $fname = $_POST['firstname'];
  $mname = $_POST['middlename'];
  $suffix = $_POST['suffix'];
  $sex = $_POST['sex'];
  $addrs = $_POST['address'];
  $zip = $_POST['zip'];
  $contact = $_POST['contactno'];
  $cstatus = $_POST['civilstatus'];
  $bdate = $_POST['birthdate'];
  $btype = $_POST['bloodtype'];
  $mothname = $_POST['mothersname'];
  $fathname = $_POST['fathersname'];
  $age = $_POST['age'];
  $transacmode = $_POST['transactionmode'];   
  $bpressure = $_POST['bloodpressure'];       
  $temp = $_POST['temperature'];              
  $prate = $_POST['pulserate'];               
  $ccomplaints = $_POST['chiefcomplaints'];   
  $diag = $_POST['diagnosis'];                
  $medtreatment = $_POST['medicationtreatment'];  
  $hcareprovider = $_POST['healthcareprovider'];  

  

$sql = "UPDATE `tbl_dental_patients` SET `family_number`='$fserial',
`last_name`='$lname',`first_name`='$fname',`middle_name`='$mname',`suffix`='$suffix',`sex`='$sex',
`address`='$addrs',`zip`='$zip',`contact_no`='$contact',`age`=' $age', `birth_date`='$bdate',
`blood_type`='$btype', `civil_status`='$cstatus', `father_name`='$fathname',`mother_name`='$mothname', 
`mode_of_transactions`= '$transacmode', `bloodpressure`='$bpressure',`temperature`='$temp',`pulse_rate`=' $prate', `chief_complaints`='$ccomplaints',
`diagnosis`='$diag', `medication_treatment`='$medtreatment' `healthcare_provider`='$hcareprovider' WHERE id = '$id'";



$query = $con->query($sql) or die ($con->error);


   echo header("location: viewDental.php?id=".$id);
}


?>
