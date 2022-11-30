<?php
   include_once("connections/connections.php");
   $con = connection();
   
//    $id = $_GET['id'];

//    $sql = "SELECT * FROM tbl_postnatal_itr WHERE id = '$id'";
//    $tb_itr = $con->query($sql) or die ($con->error);
//    $row = $tb_itr->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Record</title>
    <!-- Bootstrap CDN MODAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />

    <!-- FOR PAGINATION DESIGN -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
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

  <h4 class="mt-5 justify-content-center text-center">Patient's Information</h4>

<div class="container mt-3">
<!-- <a href="view_medicalrecord.php" class="btn btn-primary mb-2">Return</a> -->
    <div class="card">
        <div class="card-body"><div class="row">
              <div class="col-sm-6">
                 <h2>List of <b> Patients</b></h2>
                 <?php //include('Modals/Modal.php'); ?>    
              </div>

              <!-- <div class="col-sm-6">
                <form action="result.php" method="get" class="d-flex" role="search">
                  <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" >Search</button>
                </form>
             </div> -->
        <div class="tables border shadow border-3 mt-3 mb-5">
        <table class="table table-striped mt-3" id="patientTable" style="width:100%">
            <thead>
          <tr>
            <th>#</th>
            <th>Family Number</th>
            <th>Patient Name</th>
            <th>Sex</th>
            <th>Contact No.</th>
            <th>Address</th>
            <th>Time Added</th>
            <th>Action</th>
          </tr>
        </thead>
            <tbody>
                <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="col-2">
                            <a href="view_medicalrecord.php" class="btn btn-primary mb-2">view</a>
                            </div>   
                        </td> 
                  </tr>
            </tbody>
        </table>
      </div>
      </div>
       
        
              
        </div>
    </div> 

                
  

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
    <!-- FOR PAGINATION -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>   
    
    <!-- FOR PAGINATION TABLE -->
    <script>
      $(document).ready(function () {
      $('#patientTable').DataTable();
      });
    </script>
</body>
</html>


  