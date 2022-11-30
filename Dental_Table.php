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
     <!-- FOR PAGINATION DESIGN -->
     <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
     <link rel="stylesheet"  href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
</head>
<body>

<?php


$sql = "SELECT * FROM tbl_dental_patients ORDER BY id DESC";
$dental_patients = $con->query($sql) or die ($con->error);
$row = $dental_patients->fetch_assoc();


?>

  <!-- ///////////////////////////////////////////////////////////////////////////////
                            CONTENT SECTION
  //////////////////////////////////////////////////////////////////////////////// -->
    <!-- DENTAL TABLE -->
  
    <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
              <div class="col-sm-6">
                 <h2>List of Dental <b>Patients</b></h2>
                 <?php include('Modals/DentalModal.php'); ?>
                 
                 <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dental">
                   Add New
                 </button>  -->
              </div>
              
              <!-- <div class="col-sm-6">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div> -->
        <div class="tables border shadow border-3 mt-3 mb-5">
        <table class="table table-striped mt-3" id="dentalTable" style="width:100%">
            <thead>
          <tr>
            <th>ID</th>
            <th>Family #</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date Added</th>
            <th>Action</th>
          </tr>
            </thead>
            <tbody>
            <?php do{ ?>
                <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['family_number']; ?></td>
                        <td><?php echo $row['last_name']. ' ' .$row['first_name'];?></td>
                        <td><?php echo $row['sex']; ?></td>
                        <td><?php echo $row['contact_no']; ?></td>
                        <td><?php echo $row['adress']; ?></td>
                        <td><?php echo $row['added_at']; ?></td>
                        <td>
                            <div class="col-2">
                            <a href="viewDental.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mb-2">view</a>
                            </div>  
                        </td> 
                  </tr>
                  <?php }while($row = $dental_patients->fetch_assoc()); ?>
                    
            </tbody>
        </table>
      </div>
      </div>
     </div>
    </div>
    

  </section> 
   
    <!--FOR SIDE BAR-->
    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- FOR PAGINATION -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>   
    
    <!-- FOR PAGINATION TABLE -->
    <script>
      $(document).ready(function () {
      $('#dentalTable').DataTable();
      });
    </script>
  </body>
</html>


