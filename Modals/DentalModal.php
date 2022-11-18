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
  

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adultImmunization">
  Adult Immunization
</button>


    <!-- FOR ADULT IMMUNIZATION -->
    <div class="modal fade" id="adultImmunization" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="adultImmunizationLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adultImmunizationLabel">Adult Immunization</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="text" class="form-control" id="inputFamilySerial">
                        </div>
                        <div class="col-md-2">
                            <label for="inputFamilyCode" class="form-label fw-bold">Family Code</label>
                            <input type="text" class="form-control" id="inputFamilyCode">
                        </div>
                    </div>
                    <form class="row g-3 mt-4">
                        <h5 class="ITRtitle justify-content-center text-center shadow">PATIENT ENROLLMENT RECORD</h5>
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="inputFirstName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="inputMiddleName">
                          </div>
                        <div class="col-md-3">
                          <label for="inputSuffix" class="form-label">Suffix</label>
                          <input type="text" class="form-control" id="inputSuffix">
                        </div>
                        <div class="col-md-2">
                            <label for="inputSex" class="form-label">Sex</label>
                            <select id="inputSex" class="form-select">
                            <option>Male</option>
                            <option>Female</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-3">
                            <label for="inputContactNo" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" id="inputContactNo">
                        </div>
                        <div class="col-md-2">
                            <label for="inputCivilStatus" class="form-label">Civil Status</label>
                            <select id="inputCivilStatus" class="form-select">
                              <option selected>Single</option>
                              <option>Married</option>
                              <option>Annulled</option>
                              <option>Widow/er</option>
                              <option>Separated</option>
                              <option>Co-Habitation</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputSpouseName" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" id="inputSpouseName">
                        </div>
                        <div class="col-2">
                          <label for="inputBirthdate" class="form-label">Birth Date</label>
                          <input type="text" class="form-control" id="inputBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                          <label for="inputBirthPlace" class="form-label">Birthplace</label>
                          <input type="text" class="form-control" id="inputBirthPlace">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="inputBloodType">
                        </div>
                        <div class="col-2">
                            <label for="inputBirthdateSpouse" class="form-label">Birth Date of Spouse</label>
                            <input type="text" class="form-control" id="inputBirthdateSpouse" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEducationAttainment" class="form-label">Educational Attainment</label>
                            <select id="inputEducationAttainment" class="form-select">
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
                            <select id="inputFamilyMember" class="form-select">
                              <option>Father</option>
                              <option>Mother</option>
                              <option>Son</option>
                              <option>Daughter</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="inputSpecify" class="form-label">If others please specify</label>
                            <input type="text" class="form-control" id="inputSpecify">
                        </div>
                        <div class="col-md-4">
                            <label for="inputMothersName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="inputMothersName">
                        </div>
                        <div class="col-2">
                            <label for="inputMotherBirthdate" class="form-label">Mother's Birth Date</label>
                            <input type="text" class="form-control" id="inputMotherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="inputFathersName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="inputFathersName">
                        </div>
                        <div class="col-2">
                            <label for="inputFatherBirthdate" class="form-label">Father's Birth Date</label>
                            <input type="text" class="form-control" id="inputFatherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputNHTS" class="form-label">DSWD NHTS</label>
                            <select id="inputNHTS" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputFacHousehold" class="form-label">Facility Household No.</label>
                            <input type="text" class="form-control" id="inputFacHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="input4ps" class="form-label">4ps Member</label>
                            <select id="input4ps" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputHousehold" class="form-label">Household No.</label>
                            <input type="text" class="form-control" id="inputHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="inputPhilhealth" class="form-label">PhilHealth Member</label>
                            <select id="inputPhilhealth" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputStatusType" class="form-label">Status Type</label>
                            <select id="inputStatusType" class="form-select">
                              <option>Member</option>
                              <option>Dependent</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputPhilhealthNo" class="form-label">Philhealth No.</label>
                            <input type="text" class="form-control" id="inputPhilhealthNo">
                        </div>
                        <div class="col-md-3">
                            <label for="inputCategory" class="form-label">If member, indicate category</label>
                            <select id="inputCategory" class="form-select">
                              <option>N/A</option>
                              <option>FE - Private</option>
                              <option>FE - Goverment</option>
                              <option>IE:</option>
                              <option>Others:</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputPCB" class="form-label">Primary Care Benefit (PCB) Member?</label>
                            <select id="inputPCB" class="form-select">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                    <form class="ITR row g-3 mt-4">
                        <h5 class="ITRtitle justify-content-center text-center shadow">INDIVIDUAL TREATMENT RECORD (ADULT IMMUNIZATION)</h5>
                        <div class="col-md-2">
                            <label for="inputTransaction" class="form-label">Mode of Transaction</label>
                            <select id="inputTransaction" class="form-select">
                              <option>Walk-in</option>
                              <option>Visited</option>
                              <option>Referral</option>
                            </select>
                        </div>
                       
                        <div class="col-3">
                            <label for="inputDate" class="form-label">Date</label>
                            <input type="text" class="form-control" id="inputDate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-3">
                            <label for="inputTime" class="form-label">Time</label>
                            <input type="text" class="form-control" id="inputTime" placeholder="AM/PM">
                        </div>
                        <div class="col-3">
                            <label for="inputAttendingprovider" class="form-label">Name of Attending Provider</label>
                            <input type="text" class="form-control" id="inputAttendingprovider">
                        </div>
                        <div class="col-3">
                            <label for="inputNatureVisit" class="form-label">Nature of Visit</label>
                            <select id="inputNatureVisit" class="form-select">
                              <option>New Consultation/Case</option>
                              <option>New Admission</option>
                              <option>Follow-up visit</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputBloodPressure" class="form-label">Blood Pressure</label>
                            <input type="text" class="form-control" id="inputBloodPressure">
                        </div>
                        <div class="col-3">
                            <label for="inputTemperature" class="form-label">Temperature</label>
                            <input type="text" class="form-control" id="inputTemperature">
                        </div>
                        <div class="col-3">
                            <label for="inputRespiratoryR" class="form-label">Respiratory Rate</label>
                            <input type="text" class="form-control" id="inputRespiratoryR">
                        </div>
                        <div class="col-3">
                            <label for="inputPulseR" class="form-label">Pulse Rate</label>
                            <input type="text" class="form-control" id="inputPulseR">
                        </div>
                        <div class="col-3">
                            <label for="inputHeight" class="form-label">Height (cm)</label>
                            <input type="text" class="form-control" id="inputHeight">
                        </div>
                        <div class="col-3">
                            <label for="inputWeight" class="form-label">Weight (kg)</label>
                            <input type="text" class="form-control" id="inputWeight">
                        </div>
                        <div class="col-3">
                          <label for="inputImmunization" class="form-label">Immunization</label>
                          <select id="inputImmunization" class="form-select">
                            <option>Pneumococcal</option>
                            <option>Flu</option>
                            <option>Tetanus,diptheria,pertussis</option>
                            <option>Measles</option>
                            <option>Varicella</option>
                            <option>Zoster recombinant (RZB)</option>
                            <option>Human pappillomavirus (HPV))</option>
                            <option>Hepatitis A</option>
                            <option>Hepatitis B</option>
                            <option>Meningococcal A,C,W,Y (MenACWY)</option>
                            <option>Meningococcal B (MenB)</option>
                            <option>Haemophilus influenzae type b(Hib) (Hib)</option>
                          </select>
                        </div>
                        
                        <div class="col-4">
                            <label for="ChiefComplaints" class="form-label">Chief Complaints</label>
                            <textarea class="form-control" id="ChiefComplaints" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="Diagnosis" class="form-label">Diagnosis</label>
                            <textarea class="form-control" id="Diagnosis" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="MedicationTreatment" class="form-label">Medication/Treatment</label>
                            <textarea class="form-control" id="MedicationTreatment" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" class="form-control" id="inputHealthProvider">
                        </div>
                        
                    </form>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
   </div>
   
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


  