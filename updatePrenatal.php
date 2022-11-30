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
  $gravidity = $_POST['gravidity'];                 
  $parity = $_POST['parity'];                 
  $term = $_POST['term'];   
  $preterm = $_POST['preterm'];                
  $livebirth = $_POST['livebirth'];  
  $abort = $_POST['abortion'];  
  $lastmensperiod = $_POST['lastmensperiod'];    
  $estimatedduedate = $_POST['estimatedduedate'];
  $gesage = $_POST['gestationalage'];
  $vipregvaccin = $_POST['vitalpregnancyvaccination'];
  $iron = $_POST['iron'];
  $others = $_POST['others'];          
  $syphires = $_POST['syphilisresult'];
  $penresul = $_POST['penicillinresult'];
  $schedvis = $_POST['schednextvisit'];    
  $funheight = $_POST['fundicheight'];    
  $fetalheartt = $_POST['fetalhearttone'];    
  $prenavisits = $_POST['prenatalvisits'];    
  $menarch = $_POST['menarche'];   
  $perdura = $_POST['periodduration']; 
  $intercyle = $_POST['intervalcyle'];    
  $onsetintercourse = $_POST['onsetsexintercourse'];    
  $bcontrol = $_POST['birthcontrol'];    
  $menop = $_POST['menopause'];    
  $healthprovi = $_POST['healthcareprovider'];    
  $labfindings = $_POST['laboratoryfindings'];    
  $perflab = $_POST['performedlaboratory'];    

 
  $sql = "UPDATE `patient_information` SET `family_number`='$fserial',`family_code`='$fcode',
  `last_name`='$lname',`first_name`='$fname',`middle_name`='$mname',`suffix`='$suffix',`sex`='$sex',
  `address`='$addrs',`zip`='$zip',`contact_no`='$contact',`civil_status`='$cstatus',
  `spouse_name`='$sname',`birth_date`='$bdate',`birth_place`='$bplace',`blood_type`='$btype',
  `bd_spouse`='$sbirthdate',`educational_attainment`='$eattainment',`family_member`='$fmember',`other_specify`='$specify',
  `mother_name`='$mothname',`mother_bd`='$mbirthdate',`father_name`='$fathname',`father_bd`='$fbirthdate',
  `dswd_nhts`='$dnhts',`family_house_no`='$fhousehold',`4ps_member`='$fourps',`household_no`='$hholdno',
  `philhealth_member`='$philmem',`status_type`='$philstatype',`philhealth_no`='$phealthno',
  `indicate_category`='$category',`pcb_member`='$pcb' WHERE id = '$id'";
  $query = $con->query($sql) or die ($con->error);

  
   if($query==1)
   {
         $sql = "INSERT INTO `tbl_prenatal_itr`(`family_number`,`mode_of_transaction`, `referred_from`, `referred_to`, `referral_reason`,
         `referred_by`, `consultation_date`, `consultation_time`, `attending_provider`, `nature_of_visit`, 
         `bloodpressure`, `temperature`,`respiratory_rate`, `pulse_rate`, `gravidity`, 
         `parity`, `preterm`, `livebirth`, `abortion`,`last_menstrual_period`,
         `estimate_due_date`,`gestational_age`,`vital_pregnancy_vaccination`,`iron`,`others`,
         `syphilis_result`,`penicillin_result`,`sched_of_next_visit`,`fundic_height`,`fetal_heart_tone`,
          `prenatal_visits`,`menarche`,`period_duration`,`interval_cycle`,`onset_sexual_intercourse`,
          `birth_control_method`,`menopause`,`healthcare_provider`, `laboratory_findings`,`performedlaboratory_tes`)
           VALUES ('$fserial','$transacmode','$reffrom','$refto','$refreason',
           '$refby','$consuldate','$consultime','$attprovider','$natvisit',
          '$bpressure','$temp','$respirate','$prate','$gravidity',
          ' $parity','$preterm ','$livebirth','$abort','$lastmensperiod',
          '$estimatedduedate',' $gesage','$vipregvaccin','$iron',' $others',
          ' $syphires','$penresul',' $schedvis',' $funheight','$fetalheartt',
          '$prenavisits','$menarch','$perdura','$intercyle','$onsetintercourse',' $bcontrol',
          '$menop','$healthprovi','$labfindings','$perflab')";
          $query = $con->query($sql) or die ($con->error);$menarch
                if($query==1){
                  echo "Saved";
                }
   }
   else{
    echo "Message: Error Occured";
  }
   
    echo header("location: view_prenatal.php?id=".$id);


   
}
?>


