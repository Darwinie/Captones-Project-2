<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $fserial = $_POST['familyserial']; 
  $fcode = $_POST['familycode'];
  $lname = $_POST['lastname'];
  $fname = $_POST['firstname'];
  $mname = $_POST['middlename'];
  $suffix = $_POST['suffix'];
  $sex = $_POST['sex'];
  $addrs = $_POST['address'];
  $zip = $_POST['zip'];
  $contact = $_POST['contactno'];
  $cstatus = $_POST['civilstatus'];
  $sname = $_POST['spousename'];
  $bdate = $_POST['birthdate'];
  $bplace = $_POST['birthplace'];
  $btype = $_POST['bloodtype'];
  $sbirthdate = $_POST['spousebirthdate'];
  $eattainment = $_POST['educationalattainment'];
  $fmember = $_POST['familymember'];
  $specify = $_POST['specify'];
  $mothname = $_POST['mothersname'];
  $mbirthdate = $_POST['motherbirthdate'];
  $fathname = $_POST['fathersname'];
  $fbirthdate = $_POST['fatherbirthdate'];
  $dnhts = $_POST['dswdnhts'];
  $fhousehold = $_POST['facilityhousehold'];
  $fourps = $_POST['4ps'];
  $hholdno = $_POST['householdno'];
  $philmem = $_POST['philhealth'];
  $philstatype = $_POST['statustype'];
  $phealthno = $_POST['philhealthno'];
  $category = $_POST['category'];
  $pcb = $_POST['pcb'];
  $age = $_POST['age'];
  $transacmode = $_POST['transactionmode'];   
  $reffrom = $_POST['referredfrom'];          
  $refto = $_POST['referredto'];              
  $refreason = $_POST['referralreason'];      
  $refby = $_POST['referredby'];              
  $consuldate = $_POST['consultationdate'];   
  $consultime = $_POST['consultationtime'];   
  $attprovider = $_POST['attendingprovider']; 
  $natvisit = $_POST['naturevisit'];          
  $bpressure = $_POST['bloodpressure'];       
  $temp = $_POST['temperature'];              
  $respirate = $_POST['respiratoryrate'];     
  $prate = $_POST['pulserate'];               
  $height = $_POST['height'];                 
  $weight = $_POST['weight'];                 
  $ccomplaints = $_POST['chiefcomplaints'];   
  $diag = $_POST['diagnosis'];                
  $medtreatment = $_POST['medicationtreatment'];  
  $hcareprovider = $_POST['healthcareprovider'];  
  $labfindings = $_POST['laboratoryfindings'];    
  $perflaboratory = $_POST['performedlaboratory']; 
  

$sql = "UPDATE `patient_information` SET `family_number`='$fserial',`family_code`='$fcode',
`last_name`='$lname',`first_name`='$fname',`middle_name`='$mname',`suffix`='$suffix',`sex`='$sex',
`address`='$addrs',`zip`='$zip',`contact_no`='$contact',`civil_status`='$cstatus',
`spouse_name`='$sname',`birth_date`='$bdate',`birth_place`='$bplace',`blood_type`='$btype',
`bd_spouse`='$sbirthdate',`educational_attainment`='$eattainment',`family_member`='$fmember',`other_specify`='$specify',
`mother_name`='$mothname',`mother_bd`='$mbirthdate',`father_name`='$fathname',`father_bd`='$fbirthdate',
`dswd_nhts`='$dnhts',`family_house_no`='$fhousehold',`4ps_member`='$fourps',`household_no`='$hholdno',
`philhealth_member`='$philmem',`status_type`='$philstatype',`philhealth_no`='$phealthno',
`indicate_category`='$category',`pcb_member`='$pcb',`mode_transaction`='$transacmode',`referred_from`='$reffrom',
`referred_to`=' $refto',`referral_reason`='$refreason ',`referred_by`='$refby',`consultation_date`='$consuldate ',
`consultation_time`='$consultime',`attending_provider`='$attprovider',`nature_visit`='$natvisit',
`bloodpressure`='$bpressure',`temperature`='$temp',`respiratory_rate`=' $respirate',`pulse_rate`=' $prate',
`height`=' $height',`weight`=' $weight',`chief_complaints`='$ccomplaints',`diagnosis`='$diag',
`medication_treatment`='$medtreatment',`healthcare_provider`='$hcareprovider',`laboratory_findings`=' $labfindings',
`performedlaboratory_tes`=' $perflaboratory' WHERE id = '$id'";



$query = $con->query($sql) or die ($con->error);
if($query==1)
{
      $sql = "INSERT INTO `medical_itr`(`family_number`,`mode_transaction`, `referred_from`, `referred_to`, `referral_reason`,
      `referred_by`, `consultation_date`, `consultation_time`, `attending_provider`, `nature_visit`, `bloodpressure`, `temperature`,
       `respiratory_rate`, `pulse_rate`, `height`, `weight`, `chief_complaints`, `diagnosis`, `medication_treatment`, 
       `healthcare_provider`, `laboratory_findings`, `performedlaboratory_tes` ) VALUES ('$fserial','$transacmode','$reffrom','$refto','$refreason','$refby','$consuldate','$consultime','$attprovider','$natvisit',
       '$bpressure','$temp','$respirate','$prate','$height','$weight','$ccomplaints','$diag','$medtreatment',
       '$hcareprovider','$labfindings ','$perflaboratory')";
       $query = $con->query($sql) or die ($con->error);

             if($query==1){
               echo "Saved";
             }
}
else{
  echo "Message: Error Occured";
}


   echo header("location: view_medicalrecord.php?id=".$id);
}


?>
