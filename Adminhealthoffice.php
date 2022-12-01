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
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-success shadow pt-1.3 pb-1.3">
   <?php include('navbar.php'); ?>
 </nav>

 <section id="home">
  <?php include('navigation-bar.php'); ?> 


  <div class="wle justify-content-center text-center mt-5">
    <?php
    if(!isset($_POST['username'])){

      echo "Welcome"." ".$_SESSION['username'];
    }else{
      echo "Welcome Guest";
    }
    ?>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div>
    <?php
    if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
      echo "<div class='alert alert-info' role='alert'>".$_SESSION['message']."</div>";
      unset($_SESSION['message']);
    }
    ?>
  </div>
      </div>
    </div>
  </div>


</section>
<script type="js/JS_Reports">
  $(function () {
    $(function (".Reports").load("CMB.html");

    )};

  </script>  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


<?php
unset($_SESSION["message"]);
?>