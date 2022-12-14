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
  <title>User Maintenance</title>
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

  $sql = "SELECT * FROM user_accounts ORDER BY id DESC";
  $user_main = $con->query($sql) or die ($con->error);
  $row = $user_main->fetch_assoc();
  include("Modals/adduser.php");
  ?>

  <nav class="navbar navbar-expand-md navbar-dark bg-success shadow pt-1.3 pb-1.3">
   <?php include('navbar.php'); ?>
 </nav>

 <section id="home">
  <?php include('navigation-bar.php'); ?> 

  <div class="container mt-5">
    <div class="card mt-2">
      <div class="card-body">
        <div class="card-title">
          <div class="row">
            <div class="table">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                   <h2>List of<b> Users</b></h2>

                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Useraccounts">
                     Add New
                   </button>

                 </div>

                 <div>
                  <?php
                  if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                    echo "<div class='alert alert-primary' role='alert'>".$_SESSION['message']."</div>";
                    unset($_SESSION['message']);
                  }
                  ?>
                </div> 
                <div class="tables border shadow border-3 mt-3 mb-5">
                  <table class="table table-striped mt-3" id="usermainTable" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Adress</th>
                        <th>Username</th>
                        <th>Acess</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php do{ ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['last_name']. ' ' .$row['first_name'];?></td>
                          <td><?php echo $row['contact_no']; ?></td>
                          <td><?php echo $row['adress']; ?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><?php echo $row['access']; ?></td>
                          <td>
                            <div class="col-2">
                             <a href="viewUserAccountsDetails.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mb-2">view</a>
                           </div>   
                         </td> 
                       </tr>
                     <?php }while($row = $user_main->fetch_assoc()); ?>
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

<!-- FOR PAGINATION -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>   
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>   

<!-- FOR PAGINATION TABLE -->
<script>
  $(document).ready(function () {
    $('#usermainTable').DataTable();
  });
</script>

</script>
</body>
</html>



