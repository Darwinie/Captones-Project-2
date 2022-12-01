<?php
include_once("connections/connections.php");
$con = connection();
// $id = $_GET['ID'];



$user_accounts = $con->query($sql) or die ($con->error);
$row = $user_accounts->fetch_assoc();

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
  

                
  <!-- FOR EDITING DENTAL INFORMATION -->
  <div class="modal fade" id="DentalDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="DentalDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DentalDetailsLabel">Dental Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <div class="card-body">
                <div class="container">
                <h3>Edit<b> Dental Patient Information</b></h3>
                <div class="row g-3 mt-4 mb-3">
                    <form class="row g-3 mt-4" action="updateDentalInfo.php" method="post">
                       <div class="row">
                         <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" class="form-control" value="<?php echo $row['family_number']; ?>" name="familyserial" id="inputFamilySerial">
                         </div>
                                                               
                        </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">PATIENT DENTAL RECORD</h5>
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" value="<?php echo $row['last_name']; ?>" name="lastname" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" value="<?php echo $row['first_name']; ?>" name="firstname" id="inputFirstName">
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
                            <label for="inputAddress" class="form-label">Adress</label>
                            <input type="text" class="form-control" value="<?php echo $row['adress']; ?>" name="address" id="inputAddress" placeholder="1234 Main St">
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
                            <input type="text" class="form-control" value="<?php echo $row['age']; ?>" name="age" id="inputAge">
                        </div>
                        <div class="col-2">
                          <label for="inputBirthdate" class="form-label">Birth Date</label>
                          <input type="text" class="form-control" value="<?php echo $row['birth_date']; ?>" name="birthdate" id="inputBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-2">
                            <label for="inputBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" value="<?php echo $row['blood_type']; ?>" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-md-3">
                            <label for="inputFamilyMember" class="form-label">Civil Status</label>
                            <select id="inputCivilStatus" name="civilstatus" class="form-select">
                                 <option <?php echo ($row['civil_status'] == "Single")? 'selected' : '' ?>>Single</option>
                                 <option <?php echo ($row['civil_status'] == "Married")? 'selected' : '' ?>>Married</option>
                                 <option <?php echo ($row['civil_status'] == "Annulled")? 'selected' : '' ?>>Annulled</option>
                                 <option <?php echo ($row['civil_status'] == "Widowed")? 'selected' : '' ?>>Widowed</option>
                                 <option <?php echo ($row['civil_status'] == "Separated")? 'selected' : '' ?>>Separated</option>
                                 <option <?php echo ($row['civil_status'] == "Co-Habitation")? 'selected' : '' ?>>Co-Habitation</option>
                             </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputMothersName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['mothers_name']; ?>" name="mothersname" id="inputMothersName">
                        </div>
                        <div class="col-md-4">
                            <label for="inputFathersName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['fathers_name']; ?>" name="fathersname" id="inputFathersName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputTransaction" class="form-label">Mode of Transaction</label>
                            <select id="inputTransaction" name="transactionmode" class="form-select">
                                 <option <?php echo ($row['mode_of_transactions'] == "Walk-in")? 'selected' : '' ?>>Walk-in</option>
                                 <option <?php echo ($row['mode_of_transactions'] == "Visited")? 'selected' : '' ?>>Visited</option>
                                 <option <?php echo ($row['mode_of_transactions'] == "Referral")? 'selected' : '' ?>>Referral</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputBloodPressure" class="form-label">Blood Pressure</label>
                            <input type="text" name="bloodpressure" value="<?php echo $row['bloodpressure']; ?>" class="form-control" id="inputBloodPressure">
                        </div>
                        <div class="col-3">
                            <label for="inputTemperature" class="form-label">Temperature</label>
                            <input type="text" name="temperature" value="<?php echo $row['temperature']; ?>" class="form-control" id="inputTemperature">
                        </div>
                        <div class="col-3">
                            <label for="inputPulseR" class="form-label">Pulse Rate</label>
                            <input type="text" name="pulserate" value="<?php echo $row['pulse_rate']; ?>" class="form-control" id="inputPulseR">
                        </div>
                        <div class="col-4">
                            <label for="ChiefComplaints" class="form-label">Chief Complaints</label>
                            <textarea class="form-control" name="chiefcomplaints" id="ChiefComplaints" rows="1"><?php echo $row['chief_of_complaints']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="Diagnosis" class="form-label">Diagnosis</label>
                            <textarea class="form-control" name="diagnosis" id="Diagnosis" rows="1"><?php echo $row['diagnosis']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="MedicationTreatment" class="form-label">Medication/Treatment</label>
                            <textarea class="form-control" name="medicationtreatment" id="MedicationTreatment" rows="1"><?php echo $row['medication_treatment']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" name="healthcareprovider" value="<?php echo $row['healthcare_provider']; ?>" class="form-control" id="inputHealthProvider">
                        </div>
                        <div class="col-4 mt-3">
                          
                        </div>
                        <div class="col-4 mt-3">
                        </div>
                        <div class="col-4 mt-3">
                           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>  
                    
                </div>
                </div>
                </div>
              </div>
        </div>
             
        
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  


</body>
</html>


