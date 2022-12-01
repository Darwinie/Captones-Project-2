<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <title>Navbar</title>
</head>
<body>
        <div class="container-xxl">
          <!-- toggle button for mobile nav -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- navbar links -->
          
          <div class="home-content">
            <i class='bx bx-menu' ></i>
              <span class="text">Menu</span>
          </div>
          
          <div class="collapse navbar-collapse justify-content-end fw-bold " id="main-nav">
            <button type="button" class="rounded-pill btn-rounded-login">
               
                <span>
                    <i class="fas fa-user"></i>
                </span>
                
            </button>
            <?php if(isset($_SESSION['loggedIn']) == true){?>
              <a href="logout.php">Logout</a>
            <?php } else{ ?>
              <a href="login.php">Logout</a>
            <?php } ?>

           
          </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


