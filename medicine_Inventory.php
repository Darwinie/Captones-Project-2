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
    <title>Medicine Inventory</title>
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

$sql = "SELECT * FROM tbl_medicine_inventory ORDER BY id DESC";
$medicine_inventory = $con->query($sql) or die ($con->error);
$row = $medicine_inventory->fetch_assoc();

include('Modals/addmedicine.php');
include('Modals/updatemedicine.php');




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
                 <h2>Medicine<b> Inventory</b></h2>
                 <button data-id="<? echo $row['id'] ?>"  onclick="$('#dataid').val($(this).data('id')); $('#medicineInventory')
                            .modal('show');" class="btn btn-primary" >Add New
                  </button>
              </div>

              <!-- <div class="col-sm-6">
                <form action="result.php" method="get" class="d-flex" role="search">
                  <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" >Search</button>
                </form>
             </div> -->
          <div class="tables border shadow border-3 mt-3 mb-5">
          <table class="table table-striped mt-3" id="medicineInventoryTable" style="width:100%">
            <thead>
          <tr>
            <th>#</th>
            <th>Item No.</th>
            <th>Total Quantity</th>
            <th>Available Quantity</th>
            <th>Item Description</th>
            <th>Expiration Date</th>
            <th>Date Added</th>
            <th>Action</th>
          </tr>
        </thead>
            <tbody>
                <?php do{ ?>
                <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Item_no']; ?></td>
                        <td><?php echo $row['total_quantity']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['item_description_']; ?></td>
                        <td><?php echo $row['expiration_date']; ?></td>
                        <td><?php echo $row['added_at']; ?></td>
                        <td>
                            <!-- <button data-id="<? echo $note['id'] ?>"  onclick="$('#dataid').val($(this).data('id')); $('#updatemedicineinventory')
                            .modal('show');" class="btn btn-primary" >click me
                            </button> -->
                            <button type="button" class="btn btn-primary editbtn">Edit</button>
                        </td> 
                  <?php }while($row = $medicine_inventory->fetch_assoc()); ?>    
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
      $('#medicineInventoryTable').DataTable();
      });
    </script>


 <!-- //SHOWING MODAL AND GETTING THE IDS -->
    <script>
      $(document).ready(function () {
         $('.editbtn').on('click', function () {
             $('#updatemedicineinventory').modal('show');

             $tr = $(this).closest('tr');

             var data = $tr.children("td").map(function() {
                return $(this).text();
             }).get();

             console.log(data);

             $('#id').val(data[0]);
             $('#itemno').val(data[1]);
             $('#inputQuantity').val(data[2]);
             $('#inputAQuantity').val(data[3]);
             $('#itemdesc').val(data[4]);
             $('#xpdate').val(data[5]);

         });

      });
    </script>
  </body>
</html>


         <!-- THIS IS FOR PREGNANCY TRACKING COLLECTION FORM -->
        