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
  <div class="modal fade" id="DewormingDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="DewormingDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DewormingDetailsLabel">PATIENT RECORD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    
                    <form class="row g-3 mt-4" action="updateDeworming.php" method="post">
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
                            <input type="text" class="form-control" value="<?php echo $row['family_number']; ?>" name="familyserial" id="inputFamilySerial">    
                        </div>  
                        <!-- <div class="col-5">
                            <label for="inputAddress" class="form-label">Residential Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div> -->
                        <div class="col-md-2">
                                <label for="inputTransaction" class="form-label">Mode of Transaction</label>
                                <select id="inputTransaction" name="transactionmode" class="form-select">
                                  <option>Walk-in</option>
                                  <option>Visited</option>
                                  <option>Referral</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="inputDateConsul" class="form-label">Date of Deworming</label>
                                <input type="date" name="datedeworming" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
                            </div>
                            <div class="col-3">
                                <label for="inputConsulTime" class="form-label">Time</label>
                                <input type="time" name="timedeworming" class="form-control" id="inputConsulTime" placeholder="AM/PM">
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
                                <label for="inputWeight" class="form-label">Weight (kg)</label>
                                <input type="text" name="weight" class="form-control" id="inputWeight">
                            </div>
                            <div class="col-3">
                                <label for="inputHeight" class="form-label">Height (cm)</label>
                                <input type="text" name="height" class="form-control" id="inputHeight">
                            </div>
                            <div class="col-3">
                                <label for="inputTemperature" class="form-label">Temperature</label>
                                <input type="text" name="temperature" class="form-control" id="inputTemperature">
                            </div>
                            <div class="col-3">
                              <label for="inputTemperature" class="form-label">Date of Last Deworming</label>
                              <input type="date" name="datelastdeworming" class="form-control" id="inputTemperature">
                            </div>
                            <div class="col-3">
                              <label for="inputAttendingprovider" class="form-label">Name of Attending Provider</label>
                              <input type="text" name="attending_provider" class="form-control" id="inputAttendingprovider">
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


  