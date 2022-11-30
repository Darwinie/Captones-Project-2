<?php
   include_once("connections/connections.php");
   $con = connection();
   
   $id = $_GET['id'];

   $sql = "SELECT * FROM tbl_postnatal_itr WHERE id = '$id'";
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
                            <label for="inputlastname" class="form-label">Last Name</label>
                            <input type="text" value="<?php echo $row['last_name']; ?>" name="lastname" class="form-control" id="inputlastname">
                        </div>
                        <div class="col-3">
                            <label for="inputfirstname" class="form-label">First Name</label>
                            <input type="text" value="<?php echo $row['first_name']; ?>" name="firstname" class="form-control" id="inputfirstname">
                        </div>
                        <div class="col-3">
                          <label for="inputmiddlename" class="form-label">Middle Name</label>
                          <input type="text" value="<?php echo $row['middle_name']; ?>" name="Middlename" class="form-control" id="inputmiddlename">
                        </div>
                        <div class="col-3">
                          <label for="inputSex" class="form-label">Sex</label>
                          <input type="text" value="<?php echo $row['sex']; ?>" name="sex" class="form-control" id="inputSex">
                        </div>
                        <div class="col-3">
                          <label for="inputbirthlength" class="form-label">Birth length</label>
                          <input type="text" value="<?php echo $row['birth_length']; ?>" name="birthlength" class="form-control" id="inputbirthlength">
                        </div>
                        <div class="col-3">
                          <label for="inputbirthweight" class="form-label">Birth weight</label>
                          <input type="text" value="<?php echo $row['birth_weight']; ?>" name="birthweight" class="form-control" id="inputbirthweight">
                        </div>
                        <div class="col-3">
                          <label for="inputPrenatalDelivered" class="form-label">Prenatal Delivered</label>
                          <input type="text" value="<?php echo $row['prenatal_delivered']; ?>" name="prenataldelivered" class="form-control" id="inputPrenatalDelivered">
                        </div>
                        <div class="col-3">
                          <label for="inputPlaceDelivered" class="form-label">Place Delivered</label>
                          <input type="text" value="<?php echo $row['place_delivered']; ?>" name="placedelivered" class="form-control" id="inputPlaceDelivered">
                        </div>
                        <div class="col-3">
                          <label for="inputAOG" class="form-label">Gestational Age</label>
                          <input type="text" value="<?php echo $row['gestational_age']; ?>" name="gestationalage" class="form-control" id="inputAOG">
                        </div>
                        <div class="col-3">
                          <label for="inputmodeDelivery" class="form-label">Mode of Delivery</label>
                          <input type="text" value="<?php echo $row['mode_of_delivery']; ?>" name="modedelivery" class="form-control" id="inputmodeDelivery">
                        </div>
                        <div class="col-3">
                          <label for="inputIron" class="form-label">Iron</label>
                          <input type="text" value="<?php echo $row['iron']; ?>" name="iron" class="form-control" id="inputIron">
                        </div>
                        <div class="col-3">
                          <label for="inputAttendantatBirth" class="form-label">Attendant at Birth</label>
                          <input type="text" value="<?php echo $row['attendant_at_birth']; ?>" name="attendantatbirth" class="form-control" id="inputAttendantatBirth">
                        </div>
                        <div class="col-md-3">
                          <label for="inputDeliveryDate" class="form-label">Delivery Date</label>
                          <input type="date" value="<?php echo $row['delivery_date']; ?>" id="inputDeliveryDate" name="deliverydate" class="form-select">
                        </div>
                        <div class="col-md-3">
                          <label for="inputDeliverytime" class="form-label">Delivery Time</label>
                          <input type="time" value="<?php echo $row['delivery_time']; ?>" id="inputDeliverytime" name="deliverytime" class="form-select">
                        </div>
                        <div class="col-md-3">
                          <label for="inputdateInitiateBreastfeeding" class="form-label">Date Initiated Breastfeeding</label>
                          <input type="date" value="<?php echo $row['date_initiate_breastfeeding']; ?>" id="inputdateInitiateBreastfeeding" name="dateInitiateBreastfeeding" class="form-select">
                        </div>
                        <div class="col-md-3">
                          <label for="inputtimeInitiateBreastfeeding" class="form-label">Time Initiated Breastfeeding</label>
                          <input type="time" id="inputtimeInitiateBreastfeeding" value="<?php echo $row['time_initiate_breastfeeding']; ?>" name="timeInitiateBreastfeeding" class="form-select">
                        </div>
                        <div class="col-3">
                          <label for="inputdatepostpartumwithin24" class="form-label">Date of postpartum visit within 24hrs</label>
                          <input type="date" name="datepostpartumwithin24" value="<?php echo $row['date_pospartum_visit24hrs']; ?>" class="form-control" id="inputdatepostpartumwithin24" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-3">
                          <label for="inputdatepostpartumwithin1w" class="form-label">Date of postpartum visit within 1week</label>
                          <input type="date" name="datepostpartumwithin1w" value="<?php echo $row['date_pospartum_visit1w']; ?>" class="form-control" id="inputdatepostpartumwithin1w" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-3">
                          <label for="inputdangersignmother" class="form-label">Danger Signs (Mother)</label>
                          <input type="text" name="dangersignmother" value="<?php echo $row['danger_sign_mother']; ?>" class="form-control" id="inputdangersignmother">
                        </div>
                        <div class="col-3">
                          <label for="inputdangersignbaby" class="form-label">Danger Signs (Baby)</label>
                          <input type="text" name="dangersignbaby" value="<?php echo $row['danger_sign_baby']; ?>" class="form-control" id="inputdangersignbaby">
                        </div>
                        <div class="col-3">
                          <label for="inputdatevitagiven" class="form-label">Date Vitamin A Given</label>
                          <input type="date" name="datevitagiven" value="<?php echo $row['date_vitamina_given']; ?>" class="form-control" id="inputdatevitagiven">
                        </div>
                        <div class="col-3">
                          <label for="inputdateirongiven" class="form-label">Date Iron Given</label>
                          <input type="date" name="dateirongiven" value="<?php echo $row['date_iron_given']; ?>" class="form-control" id="inputdateirongiven">
                        </div>
                        <div class="col-3">
                          <label for="inputnorirongiven" class="form-label">No. of Iron given</label>
                          <input type="text" name="norirongiven" value="<?php echo $row['no_iron_given']; ?>" class="form-control" id="inputnorirongiven">
                        </div>
                    </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


  