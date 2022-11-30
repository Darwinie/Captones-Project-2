<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $fserial = $_POST['familyserial'];   
  $fcode = $_POST['familycode'];
  $brgy = $_POST['barangay'];
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
  $attprovider = $_POST['attendingprovider']; 
  $natvisit = $_POST['naturevisit'];          
  $typeclient = $_POST['typeclient'];       
  $fmethod = $_POST['fpmethod'];              
  $dropreason = $_POST['dropoutreason'];     
  $schednextvisit = $_POST['schednextvisit'];               
 
  $sql = "UPDATE `patient_information` SET `family_number`='$fserial',`family_code`='$fcode',
  `barangay`='$brgy',`last_name`='$lname',`first_name`='$fname',`middle_name`='$mname',`suffix`='$suffix',`sex`='$sex',
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
         $sql = "INSERT INTO `tbl_familyplanning_itr` (`family_number`,`mode_of_transaction`,`consulation_date`,
          `attending_provider`, `nature_visit`, `type_of_client`, `method`,
          `dropout_reason`, `sched_nextvisit`) VALUES ('$fserial','$transacmode','$consuldate','$attprovider',
          '$natvisit','$typeclient','$fmethod','$dropreason','$schednextvisit')";
          $query = $con->query($sql) or die ($con->error);
                if($query==1){
                  echo "Saved";
                }
   }
   else{
    echo "Message: Error Occured";
   }
   
   
     echo header("location: view_familyplanning.php?id=".$id);
}
?>


