<?php
include_once("connections/connections.php");
$con = connection();


if(isset($_POST['submit'])){
  
  // $name = real_escape_string($_POST['name']);

 
  $fcode = $_POST['familycode'];  
  $doi = $_POST['date_of_interview'];
  $intvwer = $_POST['interviewer'];
  $intvwee = $_POST['interviewee'];
  $barangay = $_POST['barangay'];
  $residence = $_POST['residence'];
  $lghtresidence = $_POST['residencylenght'];
  $address = $_POST['address'];
  $pcareprovider = $_POST['primarycareprovider'];
  $pcareno = $_POST['primarycareno'];
  $ttime = $_POST['traveltime'];
  $mode_transportation = $_POST['mode_of_transportation'];
  $owneship = $_POST['ownership'];
  $oowners = $_POST['ownershipother'];
  $tconmat = $_POST['typeconmat'];
  $tsconamt = $_POST['typeconsmat'];
  $lightfaci = $_POST['lightfaci'];
  $lightfaciothers = $_POST['lightingfaciothers'];
  $source = $_POST['source'];
  $storage = $_POST['storage'];
  $usedfordrinking = $_POST['usedfordrinking'];
  $useddrinkingothrs = $_POST['useddrinkingothers'];
  $containers = $_POST['container'];
  $segraga = $_POST['segregated'];
  $methodis = $_POST['methodisposal'];
  $toilet = $_POST['toilet'];

  $sql = "INSERT INTO `tbl_family_profiling`(`family_code`, `date_of_interview`,`interviewer`, `interviewee`,
                      `barangay`, `residence`, `length_of_residency`, `address`, `primarycare_provider`, 
                      `primarycare_provider_no`, `travel_time`,
                      `mode_of_transportation`,`ownership`,`others1`,`type_construction_material`,`others2`,
                      `lighting_facilities`,`others3`,`source`,`storage`,`used_for_drinking`,`others4`,`container`,
                      `segregated`,`method_of_disposal`,`toilet_type` ) VALUES ('$fcode','$doi','$intvwer','$intvwee',
                      ' $barangay','$residence','$lghtresidence','$address',' $pcareprovider',' $pcareno','$ttime',
                      ' $mode_transportation',' $owneship',' $oowners',' $tconmat','$tsconamt','$lightfaci','$lightfaciothers',
                      '$source','$storage','$usedfordrinking','$useddrinkingothrs',' $containers','$segraga',
                      ' $methodis','$toilet')";
  
  $query = $con->query($sql) or die ($con->error);
  
 
    $student_id = $con->insert_id;

    foreach ($_POST['familymember'] as $key => $value) {

       $query1 = "INSERT INTO familyprofiling_family_members(user_id,family_member,family_position,
        sex,birthday,marital_status,blood_type,disability,highest_education_attainment,occupation,
        contact_no, religion, nhip)VALUES 
        ('" . $student_id . "','" . $_POST['familymember'][$key] . "',
        '" . $_POST['familyposition'][$key] . "','" . $_POST['sex'][$key] . "','" . $_POST['birthday'][$key] . "',
        '" . $_POST['maritalstatus'][$key] . "','" . $_POST['bloodtype'][$key] . "','" . $_POST['disability'][$key] . "',
        '" . $_POST['educationalattainment'][$key] . "','" . $_POST['occupation'][$key] . "','" . $_POST['contactno'][$key] . "',
        '" . $_POST['religion'][$key] . "','" . $_POST['nhip'][$key] . "')";

        $query = $con->query($query1) or die ($con->error);
  }

    foreach ($_POST['kindtype1'] as $key => $value) {

      $query2 = "INSERT INTO familyprofiling_domestic_animals(user_id,	kind_type,number,
      no_of_unvaccinated,no_of_vaccinated,	no_inside,	no_outside, no_caged,	no_uncaged)VALUES  
       ('" . $student_id . "','" . $_POST['kindtype1'][$key] . "',
       '" . $_POST['number1'][$key] . "','" . $_POST['nounvaccinated1'][$key] . "','" . $_POST['novaccinated1'][$key] . "',
       '" . $_POST['noinside1'][$key] . "','" . $_POST['nooutside1'][$key] . "','" . $_POST['nocaged1'][$key] . "',
       '" . $_POST['nouncaged1'][$key] . "')";

       $query = $con->query($query2) or die ($con->error);
  }

    foreach ($_POST['familymembercondition1'] as $key => $value) {

    $query3 = "INSERT INTO familyprofiling_healthcondition_problems_sheet(user_id,familymember_withhealth_condition,
     	family_history,health_condition_problem,diagnostics_treatment_regimen,Inventions_Needed_Actions_taken,
       non_emergency,emergency)VALUES 
     ('" . $student_id . "','" . $_POST['familymembercondition1'][$key] . "',
     '" . $_POST['familyhistory1'][$key] . "','" . $_POST['healthcondition1'][$key] . "',
     '" . $_POST['diagnostictreatment'][$key] . "','" . $_POST['interventionactiontaken1'][$key] . "',
     '" . $_POST['nonemergency1'][$key] . "','" . $_POST['emergency1'][$key] . "')";

     $query = $con->query($query3) or die ($con->error);
  }

    foreach ($_POST['namefamilymember1'] as $key => $value) {
   
     $query4 = "INSERT INTO  familyprofiling_vaccines(user_id,name_of_family_member	,immunization_child,
      remarks_1,immunization_adult,	remarks_2)VALUES 
      ('" . $student_id . "','" . $_POST['namefamilymember1'][$key] . "',
      '" . $_POST['immunizationcoverage1'][$key] . "','" . $_POST['lastvaccine1'][$key] . "',
      '" . $_POST['immunization1'][$key] . "','" . $_POST['allvaccine1'][$key] . "')";
   
      $query = $con->query($query4) or die ($con->error);
   }

  //   foreach ($_POST['familymember'] as $key => $value) {
   
  //   $query5 = "INSERT INTO  familyprofiling_services_prgress(user_id,family_member,family_position,
  //    sex,birthday,marital_status,blood_type,disability,highest_education_attainment,occupation,
  //    contact_no, religion, nhip)VALUES 
  //    ('" . $student_id . "','" . $_POST['familymember'][$key] . "',
  //    '" . $_POST['familyposition'][$key] . "','" . $_POST['sex'][$key] . "','" . $_POST['birthday'][$key] . "',
  //    '" . $_POST['maritalstatus'][$key] . "','" . $_POST['bloodtype'][$key] . "','" . $_POST['disability'][$key] . "',
  //    '" . $_POST['educationalattainment'][$key] . "','" . $_POST['occupation'][$key] . "','" . $_POST['contactno'][$key] . "',
  //    '" . $_POST['religion'][$key] . "','" . $_POST['nhip'][$key] . "')";
  
  //    $query = $con->query($query5) or die ($con->error);
  // }
    
}
echo header("location: barangay_medical_table.php");
  













//   $cstatus = $_POST['familymember[]'];
//   $cstatus = $_POST['familyposition[]'];
//   $cstatus = $_POST['sex[]'];
//   $cstatus = $_POST['birthday[]'];
//   $cstatus = $_POST['maritalstatus[]'];
//   $cstatus = $_POST['bloodtype[]'];
//   $cstatus = $_POST['disability[]'];
//   $cstatus = $_POST['educationalattainment[]'];
//   $cstatus = $_POST['occupation[]'];
//   $cstatus = $_POST['contactno[]'];
//   $cstatus = $_POST['religion[]'];
//   $cstatus = $_POST['nhip[]'];
 



//    if($query==1)
//    {
//          $sql = "INSERT INTO `tbl_tbdots_itr`(`family_number`,`mode_of_transaction`, `referred_from`, `referred_to`, `referral_reason`,
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

//    echo header("location: Adminhealthoffice.php");
// }
