<?php
include_once("connections/connections.php");

$con = connection();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup and Restore data</title>
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

$sql = "SELECT * FROM patient_information ORDER BY id DESC";
$patient_information = $con->query($sql) or die ($con->error);
$row = $patient_information->fetch_assoc();

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
    <!-- Inventory -->
    <div class="container mt-5">
          <div class="card mt-2">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                <div class="table">
        <div class="table-title">
          <div class="row">
              <div class="col-sm-6">
                 <h2>Backup and<b> Restore</b></h2>
                 <a href="backupdatabase.php">Create Backup</a>
                  
              </div>

              <div class="col-sm-6">
                <form action="result.php" method="get" class="d-flex" role="search">
                  <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" >Search</button>
                </form>
             </div>
        <div class="tables border shadow border-3 mt-3 mb-5">
        <table class="table">
            <thead>
          <tr>
            <th>#</th>
            <th>File Name</th>
            <th>Action</th>
            <th>Created At</th>
            
          </tr>
        </thead>
            <tbody>
            
                <tr>
                        <td>1</td>
                        <td>helthcarerecrodsystem.BAK</td>
                        <td>Backup</td>
                        <td>2022-11-03 19:42:17</td> 
                  </tr>
                  <tr>
                        <td>1</td>
                        <td>helthcarerecrodsystem.BAK</td>
                        <td>Backup</td>
                        <td>2022-11-05 7:42:17</td>  
                  </tr>
                  
            </tbody>
        </table>
      </div>
      </div>
     </div>
    </div>
                       
                   
           
                </div>
              </div>
            </div>
          </div>
        </div>

  
      
  </section> 
   
    <!--FOR SIDE BAR-->
    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

   
  </script>
  </body>
</html>


     
        