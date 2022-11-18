<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
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

 
  $sql = "INSERT INTO `patient_information`(`family_number`, `family_code`, `last_name`, `first_name`, `middle_name`, 
  `suffix`, `sex`, `address`, `zip`, `contact_no`, `civil_status`, `spouse_name`, `birth_date`, `birth_place`, `blood_type`,
   `bd_spouse`, `educational_attainment`, `family_member`, `other_specify`, `mother_name`, `mother_bd`, `father_name`, 
   `father_bd`, `dswd_nhts`, `family_house_no`, `4ps_member`, `household_no`, `philhealth_member`, `status_type`, 
   `philhealth_no`, `indicate_category`, `pcb_member`) VALUES ('$fserial','$fcode','$lname','$fname',
   '$mname','$suffix','$sex','$addrs','$zip','$contact','$cstatus','$sname','$bdate',
   '$bplace','$btype','$sbirthdate','$eattainment','$fmember','$specify','$mothname','$mbirthdate','$fathname',
   '$fbirthdate','$dnhts','$fhousehold','$fourps','$hholdno','$philmem','$philstatype','$phealthno','$category'
   ,'$pcb')";
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

   echo header("location: Adminhealthoffice.php");
}
?>





<!-- $sql = "INSERT INTO `patient_information`(`family_number`, `family_code`, `last_name`, `first_name`, `middle_name`, 
  `suffix`, `sex`, `address`, `zip`, `contact_no`, `civil_status`, `spouse_name`, `birth_date`, `birth_place`, `blood_type`,
   `bd_spouse`, `educational_attainment`, `family_member`, `other_specify`, `mother_name`, `mother_bd`, `father_name`, 
   `father_bd`, `dswd_nhts`, `family_house_no`, `4ps_member`, `household_no`, `philhealth_member`, `status_type`, 
   `philhealth_no`, `indicate_category`, `pcb_member`, `mode_transaction`, `referred_from`, `referred_to`, `referral_reason`,
  `referred_by`, `consultation_date`, `consultation_time`, `attending_provider`, `nature_visit`, `bloodpressure`, `temperature`,
   `respiratory_rate`, `pulse_rate`, `height`, `weight`, `chief_complaints`, `diagnosis`, `medication_treatment`, 
   `healthcare_provider`, `laboratory_findings`, `performedlaboratory_tes` ) VALUES ('$fserial','$fcode','$lname','$fname',
   '$mname','$suffix','$sex','$addrs','$zip','$contact','$cstatus','$sname','$bdate',
   '$bplace','$btype','$sbirthdate','$eattainment','$fmember','$specify','$mothname','$mbirthdate','$fathname',
   '$fbirthdate','$dnhts','$fhousehold','$fourps','$hholdno','$philmem','$philstatype','$phealthno','$category'
   ,'$pcb','$transacmode','$reffrom','$refto','$refreason','$refby','$consuldate','$consultime','$attprovider','$natvisit',
   '$bpressure','$temp','$respirate','$prate','$height','$weight','$ccomplaints','$diag','$medtreatment',
   '$hcareprovider','$labfindings ','$perflaboratory')"; -->