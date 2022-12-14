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
  



    <!-- Medicine Form-->
    <div class="modal fade" id="consumableissuancemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="consumableissuancemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="consumableissuancemodalLabel">Issuance Consumables</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                <div class="container">
                <h3>Add new<b> Item</b></h3>
                <form class="row g-3 mt-4 mb-3" action="insertconsumable_issuance.php" method="post">
                
                    <div class="col-md-4">
                          <label for="inputItemno" class="form-label">Item No.</label>
                          <input type="text" class="form-control" name="itemno" id="inputitemno">
                        </div>
                        <div class="col-md-4">
                          <label for="inputQuantity" class="form-label">Quantity</label>
                          <input type="number" class="form-control" name="issuedquantity" id="inputquantity">
                        </div>
                        <div class="col-md-4">
                          <label for="inputItemdesc" class="form-label">Item Decription</label>
                          <input type="text" class="form-control" name="itemdesc" id="inputitemdesc">
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
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>


    