<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $fserial = $_POST['familyserial'];   
  $fcode = $_POST['familycode'];
  $ftype = $_POST['formtype'];
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

 
  $sql = "INSERT INTO `patient_information`(`family_number`, `family_code`,`record_type`, `last_name`, `first_name`, `middle_name`, 
  `suffix`, `sex`, `address`, `zip`, `contact_no`, `civil_status`, `spouse_name`, `birth_date`, `birth_place`, `blood_type`,
   `bd_spouse`, `educational_attainment`, `family_member`, `other_specify`, `mother_name`, `mother_bd`, `father_name`, 
   `father_bd`, `dswd_nhts`, `family_house_no`, `4ps_member`, `household_no`, `philhealth_member`, `status_type`, 
   `philhealth_no`, `indicate_category`, `pcb_member`) VALUES ('$fserial','$fcode','$ftype','$lname','$fname',
   '$mname','$suffix','$sex','$addrs','$zip','$contact','$cstatus','$sname','$bdate',
   '$bplace','$btype','$sbirthdate','$eattainment','$fmember','$specify','$mothname','$mbirthdate','$fathname',
   '$fbirthdate','$dnhts','$fhousehold','$fourps','$hholdno','$philmem','$philstatype','$phealthno','$category'
   ,'$pcb')";
   $query = $con->query($sql) or die ($con->error);

  
   if($query==1)
   {
         $sql = "INSERT INTO `tbl_tbdots_itr`(`family_number`,`mode_of_transaction`, `referred_from`, `referred_to`, `referral_reason`,
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









<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $fserial = $_POST['familyserial']
  $dinterview = $_POST['date_of_interview'];   
  $interviewer = $_POST['interviewer'];
  $interviewee = $_POST['interviewee'];
  $barangay = $_POST['barangay'];
  $residence = $_POST['residence'];
  $adress = $_POST['address'];
  $primarycareprovider = $_POST['primarycareprovider'];
  $pcareproviderno = $_POST['primarycareproviderno'];
  $ttime = $_POST['traveltime'];
  $mtransportation = $_POST['mode_of_transportation'];

  $fmember = $_POST['familymember'];
  $fposition = $_POST['familyposition'];
  $sex = $_POST['sex'];
  $bday = $_POST['birthday'];
  $maritalstatus = $_POST['marital_status'];
  $bloodtype = $_POST['bloodtype'];
  $disability = $_POST['disability'];
  $educationalattainment = $_POST['educationalattainment'];
  $occupation = $_POST['occupation'];
  $contactno = $_POST['contactno'];
  $religion = $_POST['religion'];
  $nhip = $_POST['nhip'];
 
 
  $sql = "INSERT INTO `tbl_family_profiling`(`family_number`, `date_of_interview`,`barangay`, `residence`, `length_of_residency`, `address`, 
  `primarycare_provider`, `primarycare_provider_no`, `travel_time`, `mode_of_transportation`) VALUES ('$fserial','$dinterview','$interviewer','$interviewee','$barangay',
   '$residence','$adress','$primarycareprovider','$pcareproviderno','$ttime','$mtransportation')";
   $query = $con->query($sql) or die ($con->error);

  
   if($query==1)
   {
         $sql = "INSERT INTO `tbl_familymembers_itr`(`familymember`,`family_position`, `sex`, `age`, `birthday`,
         `marital_status`, `blood_type`, `disability`, `highest_educational_attainment`, `occupation`, `contact_no`,
          `religion`, `nhip`) VALUES ('$fmember','$fposition','$sex','$bday','$maritalstatus','$bloodtype',
          '$disability','$educationalattainment','$occupation','$contacno','$religion', '$nhip')";
          $query = $con->query($sql) or die ($con->error);
                if($query==1){
                  echo "Saved";
                }
   }

   echo header("location: Adminhealthoffice.php");
}
?>



?>


