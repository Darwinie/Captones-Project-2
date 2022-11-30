<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
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

  
  $sql = "INSERT INTO `tbl_dental_patients` (`family_number`,`last_name`, `first_name`, `middle_name`, 
  `suffix`, `sex`, `adress`, `zip`, `contact_no`, `civil_status`, `birth_date`, `blood_type`,
   `mothers_name`, `fathers_name`, `age`, `mode_of_transactions`, `bloodpressure`, `temperature`, `pulse_rate`, `chief_of_complaints`,
   `diagnosis`, `medication_treatment`, `healthcare_provider` ) VALUES ('$fserial','$lname','$fname',
   '$mname','$suffix','$sex','$addrs','$zip','$contact','$cstatus', '$bdate', '$btype','$mothname', '$fathname',
   '$age','$transacmode','$bpressure','$temp','$prate','$ccomplaints','$diag','$medtreatment'
   ,'$hcareprovider')";
   $query = $con->query($sql) or die ($con->error);



$query = $con->query($sql) or die ($con->error);


   echo header("location: Adminhealthoffice.php");
}


?>
