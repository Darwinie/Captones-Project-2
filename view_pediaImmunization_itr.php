<?php
   include_once("connections/connections.php");
   $con = connection();
   
   $id = $_GET['id'];

   $sql = "SELECT * FROM tbl_pediavaccination_itr WHERE id = '$id'";
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
                              <option <?php echo ($row['mode_of_transaction'] == "Walk-in")? 'selected' : '' ?>>Walk-in</option>
                              <option <?php echo ($row['mode_of_transaction'] == "Visited")? 'selected' : '' ?>>Visited</option>
                              <option <?php echo ($row['mode_of_transaction'] == "Referral")? 'selected' : '' ?>>Referral</option>
                            </select>
                        </div>
                        <!-- <div class="col-5">
                            <label for="inputAddress" class="form-label">Residential Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div> -->
                        <div class="col-3"> 
                            <label for="inputDateConsul" class="form-label">Date of Consultation</label>
                            <input type="date" value="<?php echo $row['consultation_date']; ?>" name="consultationdate" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
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
                            <input type="text" value="<?php echo $row['bloodpressure']; ?>"  name="bloodpressure" class="form-control" id="inputBloodPressure">
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
                          <select id="inputImmunization" name="pediaimmunization" class="form-select">
                              <option <?php echo ($row['immunization'] == "Hepa B w/in 24hrs")? 'selected' : '' ?>>Hepa B w/in 24hrs</option>
                              <option <?php echo ($row['immunization'] == "Hepa B > 24hrs")? 'selected' : '' ?>>Hepa B > 24hrs</option>
                              <option <?php echo ($row['immunization'] == "PENTA 1")? 'selected' : '' ?>>PENTA 1</option>
                              <option <?php echo ($row['immunization'] == "PENTA 2")? 'selected' : '' ?>>PENTA 2</option>
                              <option <?php echo ($row['immunization'] == "PENTA 3")? 'selected' : '' ?>>PENTA 3</option>
                              <option <?php echo ($row['immunization'] == "OPV 1")? 'selected' : '' ?>>OPV 1</option>
                              <option <?php echo ($row['immunization'] == "OPV 2")? 'selected' : '' ?>>OPV 2 </option>
                              <option <?php echo ($row['immunization'] == "OPV 3")? 'selected' : '' ?>>OPV 3</option>
                              <option <?php echo ($row['immunization'] == "MCV 1 (AMV)")? 'selected' : '' ?>>MCV 1 (AMV)</option>
                              <option <?php echo ($row['immunization'] == "MCV 2 (MMR)")? 'selected' : '' ?>>MCV 2 (MMR)</option>
                              <option <?php echo ($row['immunization'] == "ROTA 1")? 'selected' : '' ?>>ROTA 1</option>
                              <option <?php echo ($row['immunization'] == "ROTA 2")? 'selected' : '' ?>>ROTA 2</option>
                              <option <?php echo ($row['immunization'] == "PCV 1")? 'selected' : '' ?>>PCV 1</option>
                              <option <?php echo ($row['immunization'] == "PCV 2")? 'selected' : '' ?>>PCV 2</option>
                              <option <?php echo ($row['immunization'] == "PCV 3")? 'selected' : '' ?>>PCV 3</option>
                              <option <?php echo ($row['immunization'] == "Hepa B2")? 'selected' : '' ?>>Hepa B2</option>
                              <option <?php echo ($row['immunization'] == "Hepa B3")? 'selected' : '' ?>>Hepa B3</option>
                              <option <?php echo ($row['immunization'] == "Hepa A")? 'selected' : '' ?>>Hepa A</option>
                              <option <?php echo ($row['immunization'] == "Hepa Pneumonia")? 'selected' : '' ?>>Hepa Pneumonia</option>
                              <option <?php echo ($row['immunization'] == "Influenza")? 'selected' : '' ?>>Influenza</option>
                              <option <?php echo ($row['immunization'] == "Others:")? 'selected' : '' ?>>Others: </option>
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
                            <textarea class="form-control" name="medicationtreatment" id="MedicationTreatment" rows="1"><?php echo $row['medication_treatment']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" name="healthcareprovider" value="<?php echo $row['healthcare_provider']; ?>" class="form-control" id="inputHealthProvider">
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


  