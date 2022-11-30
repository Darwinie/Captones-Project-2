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
  $transacmode = $_POST['transactionmode'];                
  $datedeworming = $_POST['consultationdate'];   
  $time = $_POST['consultationtime'];   
  $natvisit = $_POST['naturevisit']; 
  $height = $_POST['height'];                 
  $weight = $_POST['weight'];          
  $temperature = $_POST['bloodpressure'];       
  $lastdeworming= $_POST['datelastdeworming'];              
  $attprovider = $_POST['attending_provider'];     
                
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
         $sql = "INSERT INTO `tbl_pediadeworming_itr`(`family_number`,`mode_of_transaction`, 
        `date_deworming`, `time`, `nature_visit`, `weight`, `height`,
          `temperature`, `date_lastdeworming`, `attending_provider`) VALUES ('$fserial','$transacmode','$datedeworming',
          '$time','$natvisit', '$height','$weight', '$temperature','$lastdeworming','$attprovider')";
          $query = $con->query($sql) or die ($con->error);
                if($query==1){
                  echo "Saved";
                }
   }

   echo header("location: Adminhealthoffice.php");
}
?>

