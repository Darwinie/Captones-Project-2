<?php


if(!isset($_SESSION)){
    session_start();

include_once("connections/connections.php");
$con = connection();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHealthOffice</title>
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <link rel="stylesheet" href="css/Sidebardesign.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2js"></script>
</head>
<body>
<?php

// $sql = "INSERT INTO `tbl_logs`(`user_id`,`action_made`) VALUES ('<?php echo $row['ID']; ?>','added patient information in medical record')";
// $query = $con->query($sql) or die ($con->error);

?>


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
  <div class="wle justify-content-center text-center">
  <?php
if(!isset($_POST['UserLogin'])){

  echo "Welcome"." ".$_SESSION['UserLogin'];
}else{
  echo "Welcome Guest";
}
?>
  </div>
  <!-- GENERAL PATIENT TABLE -->
  <div id="Patient-Table" class="container col-sm-8">
      <?php include('Patient_Table.php'); ?> 
  </div>
  <!--DENTAL TABLE-->
  <div id="Dental-Table" class="container col-sm-8">
     <?php include('Dental_Table.php'); ?> 
  </div>
  <!--IMMUNIZATION TABLE-->
  <div id="Immunization-Table" class="container col-sm-8">
     <?php include('Immunization_Table.php'); ?> 
  </div>
    <!--PEDIATRIC TABLE-->
  <div id="Pimmunization-Table" class="container col-sm-8">
     <?php include('pediatricImmunization_Table.php'); ?> 
  </div>
    <!--PEDIATRIC TABLE-->
  <div id="Deworming-Table" class="container col-sm-8">
     <?php include('pediaDeworming_Table.php'); ?> 
  </div>
    <!--PEDIATRIC TABLE-->
  <div id="Vitamins-Table" class="container col-sm-8">
    <?php include('pediaVitamins_Table.php'); ?>  
  </div>
  <!--TB DOTS TABLE-->
  <div id="TB-Table" class="container col-sm-8">
    <?php include('TbDOTS_Table.php'); ?>  
  </div>
  <!--OB TABLE-->
  <div id="PreNatal-Table" class="container col-sm-8">
    <?php include('OBPreNatal_Table.php'); ?>  
  </div>
  <!--OB TABLE-->
  <div id="PostNatal-Table" class="container col-sm-8">
    <?php include('OBPostNatal_Table.php'); ?> 
  </div>
  <!--OB TABLE-->
  <div id="FamilyPlanning-Table" class="container col-sm-8">
    <?php include('OBFamilyPlanning_Table.php'); ?> 
  </div>

 

 

  </section>
    <script type="js/JS_Reports">
    $(function () {
      $(function (".Reports").load("CMB.html");
      
      )};

    </script>  
   
    <!--FOR SIDE BAR-->
    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>