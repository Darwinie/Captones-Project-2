<?php
include_once("connections/connections.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM user_accounts WHERE id = '$id'";
$user_accounts = $con->query($sql) or die ($con->error);
$row = $user_accounts->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
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
        <h3 class="mt-4 justify-content-center text-center">User Account Details</h3>
        <?php if($_SESSION['access'] == "Administrator"){?>
        <div class="col-md-10 text-end mb-2">
            <form action="deletepatientinformation.php" method="post">
                <!-- This delete code is for admin only to see -->
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
            </form>
        </div>
        <?php } ?>
        <?php include('DetailsModal/EditDetailsUserAccounts.php'); ?>  
        <div class="container col-sm-8 mb-5">
         <div class="card ">
            <div class="card-body">
              
                <div class="row">
                            <div class="col-md-4">
                            <h3>View<b> User Accounts</b></h3>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-sm">  
                            </div>
                            <div class="col-md-2 text-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UserAccountsDetails">
                             Edit
                            </button>
                            </div>
                </div>
                <div class="row g-3 mt-4 mb-3">
                        <div class="col-md-4">
                          <label for="inputLastname" class="form-label">Last Name</label>
                          <input type="text" class="form-control" name="lastname" value="<?php echo $row['last_name']; ?>" id="inputLastname" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" name="firstname" value="<?php echo $row['first_name']; ?>" id="inputFirstname" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="inputMiddlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" value="<?php echo $row['middle_name']; ?>" id="inputMiddlename" readonly>
                          </div>
                        <div class="col-md-4">
                          <label for="inputContactno" class="form-label">Contact No.</label>
                          <input type="text" class="form-control" name="contactno" value="<?php echo $row['contact_no']; ?>" id="inputContactno" readonly>
                        </div>
                        <div class="col-md-4">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" value="<?php echo $row['adress']; ?>" id="inputAddress" readonly>
                        </div>
                        <div class="col-4">
                            <label for="inputUsername" class="form-label">User Name</label>
                            <input type="email" class="form-control" name="username" value="<?php echo $row['username']; ?>" id="inputUsername" readonly>
                        </div>
                        <div class="col-4">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>" id="inputPassword" readonly>
                        </div>
                        <div class="col-3">
                            <label for="inputAcess" class="form-label">Access</label>
                            <select id="inputAcess" name="access" class="form-select" required disabled>
                              <option value="">Input Access Type</option>
                              <option <?php echo ($row['access'] == "Administrator")? 'selected' : '' ?>>Administrator</option>
                              <option <?php echo ($row['access'] == "Doctor")? 'selected' : '' ?>>Doctor</option>
                              <option <?php echo ($row['access'] == "Dentist")? 'selected' : '' ?>>Dentist</option>
                              <option <?php echo ($row['access'] == "Nurse")? 'selected' : '' ?>>Nurse</option>
                              <option <?php echo ($row['access'] == "Barangay Healthworker")? 'selected' : '' ?>>Barangay Healthworker</option>
                              <option <?php echo ($row['access'] == "Barangay Healthworker Leader")? 'selected' : '' ?>>Barangay Healthworker Leader</option>
                              <option <?php echo ($row['access'] == "Midwife")? 'selected' : '' ?>>Midwife</option>
                              <option <?php echo ($row['access'] == "Barangay Midwife")? 'selected' : '' ?>>Barangay Midwife</option>
                            </select>
                        </div>  
                </div>
            </div>
          </div>  
        </div>
        
        
       
  
      



    

  
   
    <!--FOR SIDE BAR-->
    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>