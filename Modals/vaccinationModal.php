<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <!-- Bootstrap CDN MODAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>
<body>
  

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pediaImmunization">
  Vaccination
</button>


   <!-- FOR CHILD IMMUNIZATION / VACCINATION-->
   <div class="modal fade" id="pediaImmunization" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pediaImmunizationLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pediaImmunizationLabel">Pediatric Immunization</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="card">
                  <div class="card-body">
                  <form class="row g-3 mt-4" action="insertpatientinformation.php" method="post">

                    <div class="row">
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="text" class="form-control" name="familyserial" id="inputFamilySerial">
                        </div>                                            
                        <div class="col-md-2">
                            <label for="inputFamilyCode" class="form-label fw-bold">Family Code</label>
                            <input type="text" class="form-control" name="familycode" id="familycode">
                        </div>
                    </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">PATIENT ENROLLMENT RECORD</h5>
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" name="lastname" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" name="firstname" id="inputFirstName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" id="inputMiddleName">
                          </div>
                        <div class="col-md-3">
                          <label for="inputSuffix" class="form-label">Suffix</label>
                          <input type="text" class="form-control" name="suffix" id="inputSuffix">
                        </div>
                        
                        <div class="col-md-2">
                            <label for="inputSex" class="form-label">Sex</label>
                            <select id="inputSex" name="sex" class="form-select">
                            <option>Male</option>
                            <option>Female</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" name="zip" id="inputZip">
                        </div>
                        <div class="col-3">
                            <label for="inputContactNo" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" name="contactno" id="inputContactNo">
                        </div>
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Age(yrs)</label>
                            <input type="text" class="form-control" name="age" id="inputAge">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputCivilStatus" class="form-label">Civil Status</label>
                            <select id="inputCivilStatus" name="civilstatus" class="form-select">
                              <option selected>Single</option>
                              <option>Married</option>
                              <option>Annulled</option>
                              <option>Widowed</option>
                              <option>Separated</option>
                              <option>Co-Habitation</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputSpouseName" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" name="spousename" id="inputSpouseName">
                        </div>
                        <div class="col-2">
                          <label for="inputBirthdate" class="form-label">Birth Date</label>
                          <input type="text" class="form-control" name="birthdate" id="inputBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                          <label for="inputBirthPlace" class="form-label">Birthplace</label>
                          <input type="text" class="form-control" name="birthplace" id="inputBirthPlace">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-2">
                            <label for="inputBirthdateSpouse" class="form-label">Birth Date of Spouse</label>
                            <input type="text" class="form-control" name="spousebirthdate" id="inputBirthdateSpouse" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEducationAttainment" class="form-label">Educational Attainment</label>
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputFamilyMember" class="form-label">Family Member</label>
                            <select id="inputFamilyMember" name="familymember" class="form-select">
                              <option>Father</option>
                              <option>Mother</option>
                              <option>Son</option>
                              <option>Daughter</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="inputSpecify" class="form-label">If others please specify</label>
                            <input type="text" class="form-control" name="specify" id="inputSpecify">
                        </div>
                        <div class="col-md-4">
                            <label for="inputMothersName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" name="mothersname" id="inputMothersName">
                        </div>
                        <div class="col-2">
                            <label for="inputMotherBirthdate" class="form-label">Mother's Birth Date</label>
                            <input type="text" class="form-control" name="motherbirthdate" id="inputMotherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="inputFathersName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" name="fathersname" id="inputFathersName">
                        </div>
                        <div class="col-2">
                            <label for="inputFatherBirthdate" class="form-label">Father's Birth Date</label>
                            <input type="text" class="form-control" name="fatherbirthdate" id="inputFatherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputNHTS" class="form-label">DSWD NHTS</label>
                            <select id="inputNHTS" name="dswdnhts" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputFacHousehold" class="form-label">Facility Household No.</label>
                            <input type="text" class="form-control" name="facilityhousehold" id="inputFacHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="input4ps" class="form-label">4ps Member</label>
                            <select id="input4ps" name="4ps" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputHousehold" class="form-label">Household No.</label>
                            <input type="text" class="form-control" name="householdno" id="inputHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="inputPhilhealth" class="form-label">PhilHealth Member</label>
                            <select id="inputPhilhealth" name="philhealth" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputStatusType" class="form-label">Status Type</label>
                            <select id="inputStatusType" name="statustype" class="form-select">
                              <option>N/A</option>
                              <option>Member</option>
                              <option>Dependent</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputPhilhealthNo" class="form-label">Philhealth No.</label>
                            <input type="text" class="form-control" name="philhealthno" id="inputPhilhealthNo">
                        </div>
                        <div class="col-md-3">
                            <label for="inputCategory" class="form-label">If member, indicate category</label>
                            <select id="inputCategory" name="category" class="form-select">
                              <option>N/A</option>
                              <option>FE - Private</option>
                              <option>FE - Goverment</option>
                              <option>IE:</option>
                              <option>Others:</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputPCB" class="form-label">Primary Care Benefit (PCB) Member?</label>
                            <select id="inputPCB" name="pcb" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">INDIVIDUAL TREATMENT RECORD</h5>
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="text" class="form-control" name="familyserial" id="inputFamilySerial">    
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
                            <label for="inputDateConsul" class="form-label">Date of Consultation</label>
                            <input type="text" name="consultationdate" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-3">
                            <label for="inputConsulTime" class="form-label">Consultation Time</label>
                            <input type="text" name="consultationtime" class="form-control" id="inputConsulTime" placeholder="AM/PM">
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
                            <label for="inputHeight" class="form-label">Height (cm)</label>
                            <input type="text" name="height" class="form-control" id="inputHeight">
                        </div>
                        <div class="col-3">
                            <label for="inputWeight" class="form-label">Weight (kg)</label>
                            <input type="text" name="weight" class="form-control" id="inputWeight">
                        </div>
                        <div class="col-3">
                            <label for="inputImmunization" class="form-label">Immunization</label>
                            <select id="inputImmunization" name="pediaimmunization" class="form-select">
                              <option>Hepa B w/in 24hrs</option>
                              <option>Hepa B > 24hrs</option>
                              <option>PENTA 1</option>
                              <option>PENTA 2</option>
                              <option>PENTA 3</option>
                              <option>OPV 1</option>
                              <option>OPV 2 </option>
                              <option>OPV 3</option>
                              <option>MCV 1 (AMV)</option>
                              <option>MCV 2 (MMR)</option>
                              <option>ROTA 1</option>
                              <option>ROTA 2</option>
                              <option>PCV 1</option>
                              <option>PCV 2</option>
                              <option>PCV 3</option>
                              <option>Hepa B2</option>
                              <option>Hepa B3</option>
                              <option>Hepa A</option>
                              <option>Hepa Pneumonia</option>
                              <option>Influenza</option>
                              <option>Others: </option>
                            </select>
                          </div>
                          <div class="col-4">
                            <label for="ChiefComplaints" class="form-label">Chief Complaints</label>
                            <textarea class="form-control" name="chiefcomplaints" id="ChiefComplaints" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="Diagnosis" class="form-label">Diagnosis</label>
                            <textarea class="form-control" name="diagnosis" id="Diagnosis" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="MedicationTreatment" class="form-label">Medication/Treatment</label>
                            <textarea class="form-control" name="medicationtreatment" id="MedicationTreatment" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" name="healthcareprovider" class="form-control" id="inputHealthProvider">
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


  