<?php
   include_once("connections/connections.php");
   $con = connection();
   
   $id = $_GET['id'];

   $sql = "SELECT * FROM tbl_adultimmunization_itr WHERE id = '$id'";
   $medical_itr = $con->query($sql) or die ($con->error);
   $row = $medical_itr->fetch_assoc();

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
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>
<body>
       <!-- ///////////////////////////////////////////////////////////////////////////////
                            NAVBAR SECTION
  //////////////////////////////////////////////////////////////////////////////// -->
  <nav class="navbar navbar-expand-md navbar-dark bg-success shadow pt-1.3 pb-1.3">
       <?php include('navbar.php'); ?>
    </nav>
  <!-- ///////////////////////////////////////////////////////////////////////////////
                            NAVIGATION SECTION
  //////////////////////////////////////////////////////////////////////////////// -->
  <section id="home">
        <?php include('navigation-bar.php'); ?> 
       
  <!-- ///////////////////////////////////////////////////////////////////////////////
                            CONTENT SECTION
  //////////////////////////////////////////////////////////////////////////////// -->
        

                
  <!-- FOR PATIENTS MEDICAL_ITR -->

  <h4 class="mt-5 justify-content-center text-center"><?php echo $row['family_number']; ?> - Medical History DETAILS</h4>

  <div class="container mt-3">
  <!-- <a href="view_medicalrecord.php" class="btn btn-primary mb-2">Return</a> -->
            <div class="card">
                <div class="card-body">
                    
                    <form class="row g-3 mt-4" action="" method="post">

                        <h5 class="ITRtitle justify-content-center text-center shadow">INDIVIDUAL TREATMENT RECORD</h5>
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="text" class="form-control"  value="<?php echo $row['family_number']; ?>" name="familyserial" id="inputFamilySerial">    
                        </div>
                        <!-- <div class="col-5">
                            <label for="inputAddress" class="form-label">Residential Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div> -->
                        <div class="col-md-2">
                            <label for="inputTransaction" class="form-label">Mode of Transaction</label>
                            <select id="inputTransaction" name="transactionmode" class="form-select">
                              <option <?php echo ($row['mode_transaction'] == "Walk-in")? 'selected' : '' ?>>Walk-in</option>
                              <option <?php echo ($row['mode_transaction'] == "Visited")? 'selected' : '' ?>>Visited</option>
                              <option <?php echo ($row['mode_transaction'] == "Referral")? 'selected' : '' ?>>Referral</option>
                            </select>
                        </div>
                        <!-- <div class="col-5">
                            <label for="inputAddress" class="form-label">Residential Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div> -->
                        <div class="col-3"> 
                            <label for="inputDateConsul" class="form-label">Date of Consultation</label>
                            <input type="date" value="<?php echo $row['date_consultation']; ?>" name="consultationdate" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-3">
                            <label for="inputConsulTime" class="form-label">Consultation Time</label>
                            <input type="time" value="<?php echo $row['consultation_time']; ?>" name="consultationtime" class="form-control" id="inputConsulTime" placeholder="AM/PM">
                        </div>
                        <div class="col-3">
                            <label for="inputAttendingprovider" class="form-label">Name of Attending Provider</label>
                            <input type="text" value="<?php echo $row['attending_provider']; ?>" name="attendingprovider" class="form-control" id="inputAttendingprovider">
                        </div>
                        <div class="col-3">
                            <label for="inputNatureVisit" class="form-label">Nature of Visit</label>
                            <select id="inputNatureVisit" name="naturevisit" class="form-select">
                              <option <?php echo ($row['nature_visit'] == "New Consultation/Case")? 'selected' : '' ?>>New Consultation/Case</option>
                              <option <?php echo ($row['nature_visit'] == "New Admission")? 'selected' : '' ?>>New Admission</option>
                              <option <?php echo ($row['nature_visit'] == "Follow-up visit")? 'selected' : '' ?>>Follow-up visit</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputBloodPressure" class="form-label">Blood Pressure</label>
                            <input type="text" value="<?php echo $row['blood_pressure']; ?>"  name="bloodpressure" class="form-control" id="inputBloodPressure">
                        </div>
                        <div class="col-3">
                            <label for="inputTemperature" class="form-label">Temperature</label>
                            <input type="text" name="temperature" value="<?php echo $row['temperature']; ?>" class="form-control" id="inputTemperature">
                        </div>
                        <div class="col-3">
                            <label for="inputRespiratoryR" class="form-label">Respiratory Rate</label>
                            <input type="text" name="respiratoryrate" value="<?php echo $row['respiratory_rate']; ?>" class="form-control" id="inputRespiratoryR">
                        </div>
                        <div class="col-3">
                            <label for="inputPulseR" class="form-label">Pulse Rate</label>
                            <input type="text" name="pulserate" value="<?php echo $row['pulse_rate']; ?>" class="form-control" id="inputPulseR">
                        </div>
                        <div class="col-3">
                            <label for="inputHeight" class="form-label">Height (cm)</label>
                            <input type="text" name="height" value="<?php echo $row['height']; ?>" class="form-control" id="inputHeight">
                        </div>
                        <div class="col-3">
                            <label for="inputWeight" class="form-label">Weight (kg)</label>
                            <input type="text" name="weight" value="<?php echo $row['weight']; ?>" class="form-control" id="inputWeight">
                        </div>
                        <div class="col-3">
                          <label for="inputImmunization" class="form-label">Immunization</label>
                          <select id="inputImmunization"  name="adultimmunization" class="form-select">
                            <option <?php echo ($row['immunization'] == "Pneumococcal")? 'selected' : '' ?>>Pneumococcal</option>
                            <option <?php echo ($row['immunization'] == "Flu")? 'selected' : '' ?>>Flu</option>
                            <option <?php echo ($row['immunization'] == "Tetanus,diptheria,pertussis")? 'selected' : '' ?>>Tetanus,diptheria,pertussis</option>
                            <option <?php echo ($row['immunization'] == "Measles")? 'selected' : '' ?>>Measles</option>
                            <option <?php echo ($row['immunization'] == "Varicella")? 'selected' : '' ?>>Varicella</option>
                            <option <?php echo ($row['immunization'] == "Zoster recombinant (RZB)")? 'selected' : '' ?>>Zoster recombinant (RZB)</option>
                            <option <?php echo ($row['immunization'] == "Human pappillomavirus (HPV))")? 'selected' : '' ?>>Human pappillomavirus (HPV))</option>
                            <option <?php echo ($row['immunization'] == "Hepatitis A")? 'selected' : '' ?>>Hepatitis A</option>
                            <option <?php echo ($row['immunization'] == "Hepatitis B")? 'selected' : '' ?>>Hepatitis B</option>
                            <option <?php echo ($row['immunization'] == "Meningococcal A,C,W,Y (MenACWY)")? 'selected' : '' ?>>Meningococcal A,C,W,Y (MenACWY)</option>
                            <option <?php echo ($row['immunization'] == "Meningococcal B (MenB)")? 'selected' : '' ?>>Meningococcal B (MenB)</option>
                            <option <?php echo ($row['immunization'] == "Haemophilus influenzae type b(Hib) (Hib)")? 'selected' : '' ?>>Haemophilus influenzae type b(Hib) (Hib)</option>
                          </select>
                        </div>
                        
                        <div class="col-4">
                            <label for="ChiefComplaints" class="form-label">Chief Complaints</label>
                            <textarea class="form-control" name="chiefcomplaints" id="ChiefComplaints" rows="1"><?php echo $row['chief_complaints']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="Diagnosis" class="form-label">Diagnosis</label>
                            <textarea class="form-control" name="diagnosis" id="Diagnosis" rows="1"><?php echo $row['diagnosis']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="MedicationTreatment" class="form-label">Medication/Treatment</label>
                            <textarea class="form-control" name="medicationtreatment" id="MedicationTreatment" rows="1"><?php echo $row['medical_treatment']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" name="healthcareprovider" value="<?php echo $row['name_healthprovider']; ?>" class="form-control" id="inputHealthProvider">
                        </div>
                        <div class="col-4">
                    </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


  