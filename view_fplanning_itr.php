<?php
   include_once("connections/connections.php");
   $con = connection();
   
   $id = $_GET['id'];

   $sql = "SELECT * FROM tbl_familyplanning_itr WHERE id = '$id'";
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
                            <input type="text" name="consultationdate"  value="<?php echo $row['consulation_date']; ?>" class="form-control" id="inputDateConsul" placeholder="mm/dd/yyyy">
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
                                 <label for="inputBloodPressure" class="form-label">Type of Client</label>
                                 <input type="text" value="<?php echo $row['type_of_client']; ?>"  name="typeclient" class="form-control" id="inputBloodPressure">
                            </div>
                            <div class="col-3">
                                <label for="inputNatureVisit" class="form-label">Family Planning Method</label>
                                <select id="inputNatureVisit" name="fpmethod" class="form-select">
                                  <option selected>Select family planning method</option>
                                  <option  <?php echo ($row['method'] == "BTL")? 'selected' : '' ?>>BTL</option>
                                  <option  <?php echo ($row['method'] == "IUD")? 'selected' : '' ?>>IUD</option>
                                  <option  <?php echo ($row['method'] == "PILLS")? 'selected' : '' ?>>PILLS</option>
                                  <option  <?php echo ($row['method'] == "INJECTABLE")? 'selected' : '' ?>>INJECTABLE</option>
                                  <option  <?php echo ($row['method'] == "CONDOM")? 'selected' : '' ?>>CONDOM</option>
                                  <option  <?php echo ($row['method'] == "IMPLANT")? 'selected' : '' ?>>IMPLANT</option>
                                  <option  <?php echo ($row['method'] == "FAB")? 'selected' : '' ?>>FAB</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="inputRespiratoryR" class="form-label">Reason if Drop out</label>
                                <input type="text" value="<?php echo $row['dropout_reason']; ?>"  name="dropoutreason" class="form-control" id="inputRespiratoryR">
                            </div>
                            <div class="col-3">
                                <label for="inputPulseR" class="form-label">Schedule of next Visit</label>
                                <input type="text" name="schednextvisit" class="form-control" id="inputPulseR">
                            </div>
                            
                    </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


  