<?php
include_once("connections/connections.php");
$con = connection();
// $id = $_GET['ID'];

$user_accounts = $con->query($sql) or die ($con->error);
$row = $user_accounts->fetch_assoc();

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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>
<body>
  
  
                
  <!-- FOR PATIENTS RECORD GENERAL -->
  <div class="modal fade" id="UserAccountsDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="UserAccountsDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="UserAccountsDetailsLabel">User Accounts</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <div class="card-body">
                <div class="container">
                <h3>Edit<b> User Accounts</b></h3>
                <div class="row g-3 mt-4 mb-3">
                    <form class="row g-3 mt-4" action="updateUserAccounts.php" method="post">
                        <div class="col-md-4">
                          <label for="inputLastname" class="form-label">Last Name</label>
                          <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                          <input type="text" class="form-control" name="lastname" value="<?php echo $row['last_name']; ?>" id="inputLastname">
                        </div>
                        <div class="col-md-4">
                          <label for="inputFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" name="firstname" value="<?php echo $row['first_name']; ?>" id="inputFirstname">
                        </div>
                        <div class="col-md-4">
                            <label for="inputMiddlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" value="<?php echo $row['middle_name']; ?>" id="inputMiddlename">
                          </div>
                        <div class="col-md-4">
                          <label for="inputContactno" class="form-label">Contact No.</label>
                          <input type="text" class="form-control" name="contactno" value="<?php echo $row['contact_no']; ?>" id="inputContactno">
                        </div>
                        <div class="col-md-4">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" value="<?php echo $row['adress']; ?>" id="inputAddress">
                        </div>
                        <div class="col-4">
                            <label for="inputUsername" class="form-label">User Name</label>
                            <input type="email" class="form-control" name="username" value="<?php echo $row['username']; ?>" id="inputUsername">
                        </div>
                        <div class="col-4">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>" id="inputPassword">
                        </div>
                        <div class="col-3">
                            <label for="inputAcess" class="form-label">Access</label>
                            <select id="inputAcess" name="access" class="form-select" required>
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
                        <div class="col-4 mt-3">
                          
                        </div>
                        <div class="col-4 mt-3">
                           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>  
                    
                </div>
                </div>
                </div>
              </div>
        </div>
             
        
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  

</body>
</html>


