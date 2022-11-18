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
    <title>Modal</title>
    <!-- Bootstrap CDN MODAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>
<body>
  



    <!-- User Maintenance FORM-->
    <div class="modal fade" id="Useraccounts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Useraccounts
    Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="UseraccountsLabel">Issuance Inventory</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                <div class="container">
                <h3>Add new<b> Item</b></h3>
                <form class="row g-3 mt-4 mb-3" action="insertpatientinformation.php" method="post">
                
                        <div class="col-md-4">
                          <label for="inputLastname" class="form-label">Last Name</label>
                          <input type="text" class="form-control" name="lastname" id="inputLastname">
                        </div>
                        <div class="col-md-4">
                          <label for="inputFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" name="firstname" id="inputFirstname">
                        </div>
                        <div class="col-md-4">
                            <label for="inputMiddlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" id="inputMiddlename">
                          </div>
                        <div class="col-md-4">
                          <label for="inputContactno" class="form-label">Contact No.</label>
                          <input type="text" class="form-control" name="contactno" id="inputContactno">
                        </div>
                        <div class="col-md-4">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" id="inputAddress">
                        </div>
                        <div class="col-4">
                            <label for="inputUsername" class="form-label">User Name</label>
                            <input type="email" class="form-control" name="username" id="inputUsername">
                        </div>
                        <div class="col-4">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="inputPassword">
                        </div>
                        <div class="col-3">
                            <label for="inputAcess" class="form-label">Access</label>
                            <select id="inputAcess" name="acess" class="form-select">
                              <option selected>Input Access Type</option>
                              <option>Admin</option>
                              <option>Doctor</option>
                              <option>Dentist</option>
                              <option>Nurse</option>
                              <option>Barangay Healthworker</option>
                              <option>Midwife</option>
                              <option>Baranagy Midwife</option>
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
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
   </div>
   
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


    