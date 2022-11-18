<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <link rel="stylesheet" href="css/Sidebardesign.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow pt-1.3 pb-1.3">
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
          </div>
        </div>
      </nav>
      <section id="home" class="intro-section">
       <div class="container  col-sm-4">
        <div class="sidebar close">
          <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">CodingLab</span>
          </div>
          <ul class="nav-links">
            <li>
              <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="link_name">Setting</span>
              </a>
              <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Setting</a></li>
              </ul>
            </li>
            <li>
          <div class="profile-details">
            <div class="profile-content">
              <!--<img src="image/profile.jpg" alt="profileImg">-->
            </div>
            <div class="name-job">
              <div class="profile_name">Prem Shahi</div>
              <div class="job">Web Desginer</div>
            </div>
            <i class='bx bx-log-out' ></i>
          </div>
        </li>
      </ul>
        </div>
        
    </div>
    <div class="container col-sm-8">
      <div class="d-flex justify-content-center align-items-center vh-100">
          <button type="button" class= "rounded-4 btn-rounded w-25">Municipal Health Office
            <!-- <span><i class="fas fa-arrow-right"></i></span> -->
          </button>
          <button type="button" class="rounded-4 btn-rounded mx-3 w-25">Barangay
    <!--<span><i class="fas fa-arrow-right"></i></span>-->
         </button>
      </div>
    </div>
      </section>
    

     
      <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e)=>{
         let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
         arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("close");
        });
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>