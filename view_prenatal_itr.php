<?php
   include_once("connections/connections.php");
   $con = connection();
   
   $id = $_GET['id'];

   $sql = "SELECT * FROM tbl_prenatal_itr WHERE id = '$id'";
   $tb_itr = $con->query($sql) or die ($con->error);
   $row = $tb_itr->fetch_assoc();

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
                        <div class="col-3 text-end">
                            <label for="inputReferredFrom" class="form-label">For REFERRAL</label>
                            <br>
                            <label for="inputReferredFrom" class="form-label">transaction only:</label>
                        </div>
                        <div class="col-3">
                            <label for="inputReferredFrom" class="form-label">REFERRED FROM</label>
                            <input type="text" name="referredfrom" value="<?php echo $row['referred_from']; ?>" class="form-control" id="inputReferredFrom">
                        </div>
                        <div class="col-3">
                            <label for="inputReferredTo" class="form-label">REFERRED TO</label>
                            <input type="text" name="referredto"  value="<?php echo $row['referred_to']; ?>" class="form-control" id="inputReferredTo">
                        </div>
                        <div class="col-3" style="margin-left:28rem;">
                            <label for="ReasonRefer" class="form-label">Reason(s) for Referral</label>
                            <textarea class="form-control"  value="<?php echo $row['referral_reason']; ?>" name="referralreason" id="ReasonRefer" rows="1"></textarea>
                        </div>
                        <div class="col-3">
                            <label for="inputReferredBy" class="form-label">Referred by</label>
                            <input type="text" name="referredby"  value="<?php echo $row['referred_by']; ?>" class="form-control" id="inputReferredBy">
                        </div>
                        <div class="col-3">
                            <label for="inputDateConsul" class="form-label">Date of Consultation</label>
                            <input type="text" name="consultationdate"  value="<?php echo $row['consultation_date']; ?>" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-3">
                            <label for="inputConsulTime" class="form-label">Consultation Time</label>
                            <input type="text" name="consultationtime"  value="<?php echo $row['consultation_time']; ?>" class="form-control" id="inputConsulTime" placeholder="AM/PM">
                        </div>
                        <div class="col-3">
                            <label for="inputAttendingprovider" class="form-label">Name of Attending Provider</label>
                            <input type="text" name="attendingprovider"  value="<?php echo $row['attending_provider']; ?>" class="form-control" id="inputAttendingprovider">
                        </div>
                        <div class="col-3">
                            <label for="inputNatureVisit" class="form-label">Nature of Visit</label>
                            <select id="inputNatureVisit" name="naturevisit" class="form-select">
                              <option <?php echo ($row['nature_of_visit'] == "New Consultation/Case")? 'selected' : '' ?>>New Consultation/Case</option>
                              <option <?php echo ($row['nature_of_visit'] == "New Admission")? 'selected' : '' ?>>New Admission</option>
                              <option <?php echo ($row['nature_of_visit'] == "Follow-up visit")? 'selected' : '' ?>>Follow-up visit</option>
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
                            <label for="inputRespiratoryR" class="form-label">Respiratory Rate</label>
                            <input type="text" name="respiratoryrate" value="<?php echo $row['respiratory_rate']; ?>" class="form-control" id="inputRespiratoryR">
                        </div>
                        <div class="col-3">
                            <label for="inputPulseR" class="form-label">Pulse Rate</label>
                            <input type="text" name="pulserate" value="<?php echo $row['pulse_rate']; ?>" class="form-control" id="inputPulseR">
                        </div>
                        <div class="col-3">
                            <label for="inputGravidity" class="form-label">Gravidity</label>
                            <input type="text" value="<?php echo $row['gravidity']; ?>" name="gravidity" class="form-control" id="inputGravidity">
                        </div>
                        <div class="col-3">
                            <label for="inputParity" class="form-label">Parity</label>
                            <input type="text" value="<?php echo $row['parity']; ?>" name="parity" class="form-control" id="inputParity">
                        </div>
                        <div class="col-3">
                          <label for="inputTerm" class="form-label">Term</label>
                          <input type="text" value="<?php echo $row['term']; ?>" name="term" class="form-control" id="inputTerm">
                        </div>
                        <div class="col-3">
                          <label for="inputPreterm" class="form-label">Preterm</label>
                          <input type="text" value="<?php echo $row['preterm']; ?>" name="preterm" class="form-control" id="inputPreterm">
                        </div>
                        <div class="col-3">
                          <label for="inputLivebirth" class="form-label">Livebirth</label>
                          <input type="text" value="<?php echo $row['livebirth']; ?>" name="livebirth" class="form-control" id="inputLivebirth">
                        </div>
                        <div class="col-3">
                          <label for="inputAbortion" class="form-label">Abortion</label>
                          <input type="text" value="<?php echo $row['abortion']; ?>" name="abortion" class="form-control" id="inputAbortion">
                        </div>
                        <div class="col-3">
                          <label for="inputLMP" class="form-label">Last Menstrual Period</label>
                          <input type="text" value="<?php echo $row['last_menstrual_period']; ?>" name="lastmensperiod" class="form-control" id="inputLMP">
                        </div>
                        <div class="col-3">
                          <label for="inputEDC" class="form-label">Estimated Due Date</label>
                          <input type="date" value="<?php echo $row['estimate_due_date']; ?>" name="estimatedduedate" class="form-control" id="inputEDC">
                        </div>
                        <div class="col-3">
                          <label for="inputAOG" class="form-label">Gestational Age</label>
                          <input type="text" value="<?php echo $row['gestational_age']; ?>" name="gestationalage" class="form-control" id="inputAOG">
                        </div>
                        <div class="col-3">
                          <label for="inputTT" class="form-label">Vital Pregnancy Vaccination (TT)</label>
                          <input type="text" value="<?php echo $row['vital_pregnancy_vaccination']; ?>" name="vitalpregnancyvaccination" class="form-control" id="inputTT">
                        </div>
                        <div class="col-3">
                          <label for="inputIron" class="form-label">Iron</label>
                          <input type="text" value="<?php echo $row['iron']; ?>" name="iron" class="form-control" id="inputIron">
                        </div>
                        <div class="col-3">
                          <label for="inputOthers" class="form-label">Others</label>
                          <input type="text" value="<?php echo $row['others']; ?>" name="others" class="form-control" id="inputOthers" placeholder="please specify">
                        </div>
                        <div class="col-md-3">
                          <label for="inputSyphilis" class="form-label">Syphilis Result</label>
                          <select id="inputSyphilis" name="syphilisresult" class="form-select">
                            <option <?php echo ($row['syphilis_result'] == "Negative")? 'selected' : '' ?>>Negative</option>
                            <option <?php echo ($row['syphilis_result'] == "Positive")? 'selected' : '' ?>>Positive</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <label for="inputPenicillin" class="form-label">Penicillin Result</label>
                          <select id="inputPenicillin" name="penicillinresult" class="form-select">
                            <option <?php echo ($row['penicillin_result'] == "YES")? 'selected' : '' ?>>YES</option>
                            <option <?php echo ($row['penicillin_result'] == "NO")? 'selected' : '' ?>>NO</option>
                          </select>
                        </div>
                        <div class="col-3">
                          <label for="inputSchedNextVisit" class="form-label">Schedule of Next Visit</label>
                          <input type="date" value="<?php echo $row['sched_of_next_visit']; ?>" name="schednextvisit" class="form-control" id="inputSchedNextVisit" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-3">
                          <label for="inputFundicHeight" class="form-label">Fundic Height (cm)</label>
                          <input type="text" value="<?php echo $row['fundic_height']; ?>" name="fundicheight" class="form-control" id="inputFundicHeight">
                        </div>
                        <div class="col-3">
                          <label for="inputFetalHeartTone" class="form-label">Fetal Heart Tone</label>
                          <input type="text" value="<?php echo $row['fetal_heart_tone']; ?>" name="fetalhearttone" class="form-control" id="inputFetalHeartTone">
                        </div>
                        <div class="col-3">
                          <label for="PreNatalVisits" class="form-label">PreNatal Visits</label>
                          <textarea class="form-control" name="prenatalvisits" id="PreNatalVisits" rows="1"><?php echo $row['prenatal_visits']; ?>"</textarea>
                        </div>
                        <h6>Menstrual History</h6>
                        <div class="col-3">
                          <label for="inputMenarche" class="form-label">Menarche</label>
                          <input type="text" value="<?php echo $row['menarche']; ?>" name="menarche" class="form-control" id="inputMenarche">
                        </div>
                        <div class="col-3">
                          <label for="inputPeriodDuration" class="form-label">Period/Duration</label>
                          <input type="text" value="<?php echo $row['period_duration']; ?>" name="periodduration" class="form-control" id="inputPeriodDuration">
                        </div>
                        <div class="col-3">
                          <label for="inputIntervalCycle" class="form-label">Interval/Cycle</label>
                          <input type="text" value="<?php echo $row['interval_cycle']; ?>" name="intervalcyle" class="form-control" id="inputIntervalCycle">
                        </div>
                        <div class="col-3">
                          <label for="inputOnsetSinteraction" class="form-label">Onset of Sexual Intercourse</label>
                          <input type="text" value="<?php echo $row['onset_sexual_intercourse']; ?>" name="onsetsexintercourse" class="form-control" id="inputOnsetSinteraction">
                        </div>
                        <div class="col-3">
                          <label for="inputBirthControlMethod" class="form-label">Birth Control Method</label>
                          <input type="text" value="<?php echo $row['birth_control_method']; ?>" name="birthcontrol" class="form-control" id="inputBirthControlMethod">
                        </div>
                        <div class="col-md-3">
                          <label for="inputMenopause" class="form-label">Menopause?</label>
                          <select id="inputMenopause" name="menopause" class="form-select">
                            <option <?php echo ($row['menopause'] == "YES")? 'selected' : '' ?>>YES</option>
                            <option <?php echo ($row['menopause'] == "NO")? 'selected' : '' ?>>NO</option>
                        </select>
                        </div>
                        <div class="col-4">
                            <label for="inputHealthProvider" class="form-label">Name of Health Care Provider</label>
                            <input type="text" name="healthcareprovider" value="<?php echo $row['healthcare_provider']; ?>" class="form-control" id="inputHealthProvider">
                        </div>
                        <div class="col-4">
                            <label for="LabFindings" class="form-label">Laboratory Findings/Impression</label>
                            <textarea class="form-control" name="laboratoryfindings" id="LabFindings" rows="1"><?php echo $row['laboratory_findings']; ?></textarea>
                        </div>
                        <div class="col-4">
                            <label for="PerformedLabTest" class="form-label">Performed Laboratory Test</label>
                            <textarea class="form-control" name="performedlaboratory" id="PerformedLabTest" rows="1"><?php echo $row['performed_laboratory_tes']; ?></textarea>
                        </div>
                    </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


  