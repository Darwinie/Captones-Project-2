<?php
include_once("connections/connections.php");
$con = connection();
// $id = $_GET['ID'];



$patient_information = $con->query($sql) or die ($con->error);
$row = $patient_information->fetch_assoc();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <!-- Bootstrap CDN MODAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>
<body>
  
  <!-- Button trigger modal -->
  
                
  <!-- FOR PATIENTS RECORD GENERAL -->
  <div class="modal fade" id="prenatalDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="prenatalDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="prenatalDetailsLabel">PATIENT RECORD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    
                    <form class="row g-3 mt-4" action="updateTBDOTS.php" method="post">
                    <div class="row">
                      <div class="col-md-3">  
                                     
                        </div> 
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" class="form-control" name="familyserial" value="<?php echo $row['family_number']; ?>" id="inputFamilySerial">    
                        </div>                                            
                        <div class="col-md-2">
                            <label for="inputFamilyCode" class="form-label fw-bold">Family Code</label>
                            <input type="text" class="form-control" value="<?php echo $row['family_code']; ?>" name="familycode" id="familycode">
                        </div>
                    </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">PATIENT ENROLLMENT RECORD</h5>
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" value="<?php echo $row['last_name']; ?>" name="lastname" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" value="<?php echo $row['first_name']; ?>"  name="firstname" id="inputFirstName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['middle_name']; ?>" name="middlename" id="inputMiddleName">
                          </div>
                        <div class="col-md-3">
                          <label for="inputSuffix" class="form-label">Suffix</label>
                          <input type="text" class="form-control" value="<?php echo $row['suffix']; ?>" name="suffix" id="inputSuffix">
                        </div>
                        
                        <div class="col-md-2">
                            <label for="inputSex" class="form-label">Sex</label>
                            <select id="inputSex" name="sex" class="form-select">
                            <option value="Male" <?php echo ($row['sex'] == "Male")? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?php echo ($row['sex'] == "Female")? 'selected' : '' ?>>Female</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" value="<?php echo $row['zip']; ?>" name="zip" id="inputZip">
                        </div>
                        <div class="col-3">
                            <label for="inputContactNo" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" value="<?php echo $row['contact_no']; ?>" name="contactno" id="inputContactNo">
                        </div>
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Age(yrs)</label>
                            <input type="text" class="form-control" name="age" value="<?php echo $row['age']; ?>"   id="inputAge">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputCivilStatus" class="form-label">Civil Status</label>
                            <select id="inputCivilStatus" name="civilstatus" value="<?php echo $row['civil_status']; ?>" class="form-select">
                              <option <?php echo ($row['civil_status'] == "Single")? 'selected' : '' ?>>Single</option>
                              <option <?php echo ($row['civil_status'] == "Married")? 'selected' : '' ?>>Married</option>
                              <option <?php echo ($row['civil_status'] == "Annulled")? 'selected' : '' ?>>Annulled</option>
                              <option <?php echo ($row['civil_status'] == "Widowed")? 'selected' : '' ?>>Widowed</option>
                              <option <?php echo ($row['civil_status'] == "Separated")? 'selected' : '' ?>>Separated</option>
                              <option <?php echo ($row['civil_status'] == "Co-Habitation")? 'selected' : '' ?>>Co-Habitation</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputSpouseName" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['spouse_name']; ?>" name="spousename" id="inputSpouseName">
                        </div>
                        <div class="col-2">
                          <label for="inputBirthdate" class="form-label">Birth Date</label>
                          <input type="text" class="form-control" value="<?php echo $row['birth_date']; ?>" name="birthdate" id="inputBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                          <label for="inputBirthPlace" class="form-label">Birthplace</label>
                          <input type="text" class="form-control" value="<?php echo $row['birth_place']; ?>" name="birthplace" id="inputBirthPlace">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" value="<?php echo $row['blood_type']; ?>" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-2">
                            <label for="inputBirthdateSpouse" class="form-label">Birth Date of Spouse</label>
                            <input type="text" class="form-control" value="<?php echo $row['bd_spouse']; ?>" name="spousebirthdate" id="inputBirthdateSpouse" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEducationAttainment" class="form-label">Educational Attainment</label>
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select">
                              <option <?php echo ($row['educational_attainment'] == "No Formal Education")? 'selected' : '' ?>>No Formal Education</option>
                              <option <?php echo ($row['educational_attainment'] == "Elementary")? 'selected' : '' ?>>Elementary</option>
                              <option <?php echo ($row['educational_attainment'] == "HighSchool")? 'selected' : '' ?>>HighSchool</option>
                              <option <?php echo ($row['educational_attainment'] == "Vocational")? 'selected' : '' ?>>Vocational</option>
                              <option <?php echo ($row['educational_attainment'] == "College")? 'selected' : '' ?>>College</option>
                              <option <?php echo ($row['educational_attainment'] == "Post Graduate")? 'selected' : '' ?>>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputFamilyMember" class="form-label">Family Member</label>
                            <select id="inputFamilyMember" name="familymember" class="form-select">
                              <option <?php echo ($row['family_member'] == "Father")? 'selected' : '' ?>>Father</option>
                              <option <?php echo ($row['family_member'] == "Mother")? 'selected' : '' ?>>Mother</option>
                              <option <?php echo ($row['family_member'] == "Son")? 'selected' : '' ?>>Son</option>
                              <option <?php echo ($row['family_member'] == "Daughter")? 'selected' : '' ?>>Daughter</option>
                              <option <?php echo ($row['family_member'] == "Others")? 'selected' : '' ?>>Others</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="inputSpecify" class="form-label">If others please specify</label>
                            <input type="text" class="form-control" value="<?php echo $row['other_specify']; ?>" name="specify" id="inputSpecify">
                        </div>
                        <div class="col-md-4">
                            <label for="inputMothersName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['mother_name']; ?>" name="mothersname" id="inputMothersName">
                        </div>
                        <div class="col-2">
                            <label for="inputMotherBirthdate" class="form-label">Mother's Birth Date</label>
                            <input type="text" class="form-control" value="<?php echo $row['mother_bd']; ?>" name="motherbirthdate" id="inputMotherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="inputFathersName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['father_name']; ?>" name="fathersname" id="inputFathersName">
                        </div>
                        <div class="col-2">
                            <label for="inputFatherBirthdate" class="form-label">Father's Birth Date</label>
                            <input type="text" class="form-control" value="<?php echo $row['father_bd']; ?>" name="fatherbirthdate" id="inputFatherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputNHTS" class="form-label">DSWD NHTS</label>
                            <select id="inputNHTS" name="dswdnhts" class="form-select">
                              <option <?php echo ($row['dswd_nhts'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['dswd_nhts'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputFacHousehold" class="form-label">Facility Household No.</label>
                            <input type="text" class="form-control" value="<?php echo $row['family_house_no']; ?>" name="facilityhousehold" id="inputFacHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="input4ps" class="form-label">4ps Member</label>
                            <select id="input4ps" name="4ps" class="form-select">
                              <option <?php echo ($row['4ps_member'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['4ps_member'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputHousehold" class="form-label">Household No.</label>
                            <input type="text" class="form-control" value="<?php echo $row['household_no']; ?>" name="householdno" id="inputHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="inputPhilhealth" class="form-label">PhilHealth Member</label>
                            <select id="inputPhilhealth" name="philhealth" class="form-select">
                              <option <?php echo ($row['philhealth_member'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['philhealth_member'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputStatusType" class="form-label">Status Type</label>
                            <select id="inputStatusType" name="statustype" value="<?php echo $row['status_type']; ?>" class="form-select">
                              <option <?php echo ($row['status_type'] == "Member")? 'selected' : '' ?>>Member</option>
                              <option <?php echo ($row['status_type'] == "Dependent")? 'selected' : '' ?>>Dependent</option>
                              <option <?php echo ($row['status_type'] == "N/A")? 'selected' : '' ?>>N/A</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputPhilhealthNo" class="form-label">Philhealth No.</label>
                            <input type="text" class="form-control" value="<?php echo $row['philhealth_no']; ?>" name="philhealthno" id="inputPhilhealthNo">
                        </div>
                        <div class="col-md-3">
                            <label for="inputCategory" class="form-label">If member, indicate category</label>
                            <select id="inputCategory" name="category" class="form-select">
                              <option <?php echo ($row['indicate_category'] == "N/A")? 'selected' : '' ?>>N/A</option>
                              <option <?php echo ($row['indicate_category'] == "FE - Private")? 'selected' : '' ?>>FE - Private</option>
                              <option <?php echo ($row['indicate_category'] == "FE - Goverment")? 'selected' : '' ?>>FE - Goverment</option>
                              <option <?php echo ($row['indicate_category'] == "IE:")? 'selected' : '' ?>>IE:</option>
                              <option <?php echo ($row['indicate_category'] == "Others:")? 'selected' : '' ?>>Others:</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputPCB" class="form-label">Primary Care Benefit (PCB) Member?</label>
                            <select id="inputPCB" name="pcb" value="<?php echo $row['pcb_member']; ?>" class="form-select">
                              <option <?php echo ($row['pcb_member'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['pcb_member'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">INDIVIDUAL TREATMENT RECORD</h5>
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="text" class="form-control" name="familyserial" value="<?php echo $row['family_number']; ?>" id="inputFamilySerial">    
                        </div>
                        <!-- <div class="col-5">
                            <label for="inputAddress" class="form-label">Residential Address</label>
                            <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div> -->
                        <div class="col-md-2">
                            <label for="inputTransaction" class="form-label">Mode of Transaction</label>
                            <select id="inputTransaction" name="transactionmode" class="form-select">
                              <option>Walk-in</option>
                              <option>Visited</option>
                              <option>Referral</option>
                            </select>
                        </div>
                        <div class="col-3 text-end">
                            <label for="inputReferredFrom" class="form-label">For REFERRAL</label>
                            <br>
                            <label for="inputReferredFrom" class="form-label">transaction only:</label>
                        </div>
                        <div class="col-3">
                            <label for="inputReferredFrom" class="form-label">REFERRED FROM</label>
                            <input type="text" name="referredfrom" class="form-control" id="inputReferredFrom">
                        </div>
                        <div class="col-3">
                            <label for="inputReferredTo" class="form-label">REFERRED TO</label>
                            <input type="text" name="referredto" class="form-control" id="inputReferredTo">
                        </div>
                        <div class="col-3" style="margin-left:28rem;">
                            <label for="ReasonRefer" class="form-label">Reason(s) for Referral</label>
                            <textarea class="form-control" name="referralreason" id="ReasonRefer" rows="1"></textarea>
                        </div>
                        <div class="col-3">
                            <label for="inputReferredBy" class="form-label">Referred by</label>
                            <input type="text" name="referredby" class="form-control" id="inputReferredBy">
                        </div>
                        <div class="col-3">
                            <label for="inputDateConsul" class="form-label">Date of Consultation</label>
                            <input type="date" name="consultationdate" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-3">
                            <label for="inputConsulTime" class="form-label">Consultation Time</label>
                            <input type="time" name="consultationtime" class="form-control" id="inputConsulTime" placeholder="AM/PM">
                        </div>
                        <div class="col-3">
                            <label for="inputAttendingprovider" class="form-label">Name of Attending Provider</label>
                            <input type="text" name="attendingprovider" class="form-control" id="inputAttendingprovider">
                        </div>
                        <div class="col-3">
                            <label for="inputNatureVisit" class="form-label">Nature of Visit</label>
                            <select id="inputNatureVisit" name="naturevisit" class="form-select">
                              <option>New Consultation/Case</option>
                              <option>New Admission</option>
                              <option>Follow-up visit</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputBloodPressure" class="form-label">Blood Pressure</label>
                            <input type="text" name="bloodpressure" class="form-control" id="inputBloodPressure">
                        </div>
                        <div class="col-3">
                            <label for="inputTemperature" class="form-label">Temperature</label>
                            <input type="text" name="temperature" class="form-control" id="inputTemperature">
                        </div>
                        <div class="col-3">
                            <label for="inputRespiratoryR" class="form-label">Respiratory Rate</label>
                            <input type="text" name="respiratoryrate" class="form-control" id="inputRespiratoryR">
                        </div>
                        <div class="col-3">
                            <label for="inputPulseR" class="form-label">Pulse Rate</label>
                            <input type="text" name="pulserate" class="form-control" id="inputPulseR">
                        </div>
                        <div class="col-3">
                            <label for="inputGravidity" class="form-label">Gravidity</label>
                            <input type="text" name="gravidity" class="form-control" id="inputGravidity">
                        </div>
                        <div class="col-3">
                            <label for="inputParity" class="form-label">Parity</label>
                            <input type="text" name="parity" class="form-control" id="inputParity">
                        </div>
                        <div class="col-3">
                          <label for="inputTerm" class="form-label">Term</label>
                          <input type="text" name="term" class="form-control" id="inputTerm">
                        </div>
                        <div class="col-3">
                          <label for="inputPreterm" class="form-label">Preterm</label>
                          <input type="text" name="preterm" class="form-control" id="inputPreterm">
                        </div>
                        <div class="col-3">
                          <label for="inputLivebirth" class="form-label">Livebirth</label>
                          <input type="text" name="livebirth" class="form-control" id="inputLivebirth">
                        </div>
                        <div class="col-3">
                          <label for="inputAbortion" class="form-label">Abortion</label>
                          <input type="text" name="abortion" class="form-control" id="inputAbortion">
                        </div>
                        <div class="col-3">
                          <label for="inputLMP" class="form-label">Last Menstrual Period</label>
                          <input type="text" name="lastmensperiod" class="form-control" id="inputLMP">
                        </div>
                        <div class="col-3">
                          <label for="inputEDC" class="form-label">Estimated Due Date</label>
                          <input type="date" name="estimatedduedate" class="form-control" id="inputEDC">
                        </div>
                        <div class="col-3">
                          <label for="inputAOG" class="form-label">Gestational Age</label>
                          <input type="text" name="gestationalage" class="form-control" id="inputAOG">
                        </div>
                        <div class="col-3">
                          <label for="inputTT" class="form-label">Vital Pregnancy Vaccination (TT)</label>
                          <input type="text" name="vitalpregnancyvaccination" class="form-control" id="inputTT">
                        </div>
                        <div class="col-3">
                          <label for="inputIron" class="form-label">Iron</label>
                          <input type="text" name="iron" class="form-control" id="inputIron">
                        </div>
                        <div class="col-3">
                          <label for="inputOthers" class="form-label">Others</label>
                          <input type="text" name="others" class="form-control" id="inputOthers" placeholder="please specify">
                        </div>
                        <div class="col-md-3">
                          <label for="inputSyphilis" class="form-label">Syphilis Result</label>
                          <select id="inputSyphilis" name="syphilisresult" class="form-select">
                            <option>Negative</option>
                            <option>Positive</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <label for="inputPenicillin" class="form-label">Penicillin Result</label>
                          <select id="inputPenicillin" name="penicillinresult" class="form-select">
                            <option>YES</option>
                            <option>NO</option>
                          </select>
                        </div>
                        <div class="col-3">
                          <label for="inputSchedNextVisit" class="form-label">Schedule of Next Visit</label>
                          <input type="date" name="schednextvisit" class="form-control" id="inputSchedNextVisit" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-3">
                          <label for="inputFundicHeight" class="form-label">Fundic Height (cm)</label>
                          <input type="text" name="fundicheight" class="form-control" id="inputFundicHeight">
                        </div>
                        <div class="col-3">
                          <label for="inputFetalHeartTone" class="form-label">Fetal Heart Tone</label>
                          <input type="text" name="fetalhearttone" class="form-control" id="inputFetalHeartTone">
                        </div>
                        <div class="col-3">
                          <label for="PreNatalVisits" class="form-label">PreNatal Visits</label>
                          <textarea class="form-control" name="prenatalvisits" id="PreNatalVisits" rows="1"></textarea>
                        </div>
                        <h6>Menstrual History</h6>
                        <div class="col-3">
                          <label for="inputMenarche" class="form-label">Menarche</label>
                          <input type="text" name="menarche" class="form-control" id="inputMenarche">
                        </div>
                        <div class="col-3">
                          <label for="inputPeriodDuration" class="form-label">Period/Duration</label>
                          <input type="text" name="periodduration" class="form-control" id="inputPeriodDuration">
                        </div>
                        <div class="col-3">
                          <label for="inputIntervalCycle" class="form-label">Interval/Cycle</label>
                          <input type="text" name="intervalcyle" class="form-control" id="inputIntervalCycle">
                        </div>
                        <div class="col-3">
                          <label for="inputOnsetSinteraction" class="form-label">Onset of Sexual Intercourse</label>
                          <input type="text" name="onsetsexintercourse" class="form-control" id="inputOnsetSinteraction">
                        </div>
                        <div class="col-3">
                          <label for="inputBirthControlMethod" class="form-label">Birth Control Method</label>
                          <input type="text" name="birthcontrol" class="form-control" id="inputBirthControlMethod">
                        </div>
                        <div class="col-md-3">
                          <label for="inputMenopause" class="form-label">Menopause?</label>
                          <select id="inputMenopause" name="menopause" class="form-select">
                            <option>YES</option>
                            <option>NO</option>
                        </select>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" name="healthcareprovider" class="form-control" id="inputHealthProvider">
                        </div>
                        <div class="col-4">
                            <label for="LabFindings" class="form-label">Laboratory Findings/Impression</label>
                            <textarea class="form-control" name="laboratoryfindings" id="LabFindings" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="PerformedLabTest" class="form-label">Performed Laboratory Test</label>
                            <textarea class="form-control" name="performedlaboratory" id="PerformedLabTest" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            
                        </div>
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        
                        
                    </form>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  


</body>
</html>


  