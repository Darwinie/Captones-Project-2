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
  $consuldate = $_POST['consultationdate'];   
  $consultime = $_POST['consultationtime'];   
  $attprovider = $_POST['attendingprovider']; 
  $natvisit = $_POST['naturevisit'];          
  $bpressure = $_POST['bloodpressure'];       
  $temp = $_POST['temperature'];              
  $respirate = $_POST['respiratoryrate'];     
  $prate = $_POST['pulserate'];               
  $lname = $_POST['lastname'];                 
  $fname = $_POST['firstname'];                 
  $mname = $_POST['middlename'];   
  $sex = $_POST['sex'];                
  $blenght = $_POST['birthlength'];  
  $bweight = $_POST['birthweight'];
  $prenadelivered = $_POST['prenataldelivered'];
  $pdelivered = $_POST['placedelivered'];
  $gesage = $_POST['gestationalage'];
  $mdelivery = $_POST['modedelivery'];
  $iron = $_POST['iron'];
  $attendantatbirth = $_POST['attendantatbirth'];
  $delidate = $_POST['deliverydate'];
  $delitime = $_POST['deliverytime'];
  $dinitiatebf = $_POST['dateInitiateBreastfeeding'];
  $tinitiatebf = $_POST['timeInitiateBreastfeeding'];
  $dtpapar24 = $_POST['datepostpartumwithin24'];
  $dtpapar1w = $_POST['datepostpartumwithin1w'];
  $dsmother = $_POST['dangersignmother'];
  $dssignbaby = $_POST['dangersignbaby'];
  $dvitagiven = $_POST['datevitagiven'];
  $dirongiven = $_POST['dateirongiven'];
  $nirongiven = $_POST['norirongiven'];

 
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
         $sql = "INSERT INTO `tbl_postnatal_itr`(`family_number`,`mode_of_transaction`,`consultation_date`, `consultation_time`,
          `attending_provider`, `nature_of_visit`, `bloodpressure`, `temperature`,
          `respiratory_rate`, `pulse_rate`, `last_name`, `first_name`,
          `middle_name`, `sex`, `birth_length`, `birth_weight`,
          `prenatal_delivered`, `place_delivered`, `gestational_age`, `mode_of_delivery`,
          `iron`, `attendant_at_birth`, `delivery_date`, `delivery_time`,
          `date_initiate_breastfeeding`, `time_initiate_breastfeeding`, `date_pospartum_visit24hrs`, `date_pospartum_visit1w`,
          `danger_sign_mother`, `danger_sign_baby`, `date_vitamina_given`, `date_iron_given`,
          `no_iron_given` ) VALUES ('$fserial','$transacmode','$consuldate','$consultime','$attprovider',
          '$natvisit','$bpressure','$temp','$respirate','$prate','$lname','$fname','$mname','$sex','$blenght',
          '$bweight','$prenadelivered','$pdelivered','$gesage','$mdelivery','$iron','$attendantatbirth',
          '$delidate',' $delitime','$dinitiatebf','$tinitiatebf','$dtpapar24','$dtpapar1w',
          '$dsmother','$dssignbaby','$dvitagiven','$dirongiven','$nirongiven')";
          $query = $con->query($sql) or die ($con->error);
                if($query==1){
                  echo "Saved";
                }
   }

   echo header("location: Adminhealthoffice.php");
}
?>


