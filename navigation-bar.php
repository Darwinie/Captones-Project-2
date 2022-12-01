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
    <title>Navigation-Bar</title>
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


<?php
// $sql = "SELECT * FROM user_accounts ORDER BY id DESC";
// $user_accounts = $con->query($sql) or die ($con->error);
// $row = $user_accounts->fetch_assoc();

// $sql = "SELECT * FROM patient_information, user_accounts ORDER BY id DESC";
// $patient_information = $con->query($sql) or die ($con->error);
// $row = $patient_information->fetch_assoc();
?>

<div class="container  col-sm-4">
        <div class="sidebar close">
            <div class="logo-details">
              <i class='bx bxl-c-plus-plus'></i>
              <span class="logo_name">Health Center</span>
            </div>
            <ul class="nav-links">
                <li>
                    <div class="iocn-link">
                      <a href="#">
                        <i class='bx bx-collection' ></i>
                        <span class="link_name">Patient Information</span>
                      </a>
                      <i class='bx bxs-chevron-down arrow' ></i>
                    </div>
                    <ul class="Menu">
                      <li><a class="link_name" href="#">Patient Information</a></li>
                      <li onclick="patienttoggle()"><a href="#Patient-Table">Medical</a></li>
                      <li><a href="familyprofiletable.php">Family Profiling</a></li>
                      <li onclick="dentaltoggle()"><a href="#Dental-Table">Dental</a></li>
                      <li onclick="immunizationtoggle()"><a href="#Immunization-Table">Immunization</a></li>
                      <li class="hover-me"><a href="#">Pediatric
                            <i class='bx bxs-chevron-down arrow' ></i>
                      </a>
                        <ul class="sub-menu2">
                            <li><a class="link_name" href="#">Pediatric</a></li>
                            <li onclick="Pimmunitoggle()"><a href="#Pimmunization-Table">Vaccination</a></li>
                            <li><a href="barangay_vaccination_table.php">Barangay Vaccination</a></li>
                            <li onclick="Pdewormingtoggle()"><a href="#Deworming-Table">Deworming</a></li>
                            <li><a href="brgydeworming_table.php">Barangay Deworming</a></li>
                          </ul>
                        </li>
                      
                      <li onclick="tbtoggle()"><a href="#TB-Table">TB Dots</a></li>
                      <li class="hover-me"><a href="#">OB
                        <i class='bx bxs-chevron-down arrow' ></i>
                      </a>
                        <ul class="sub-menu2">
                            <li><a class="link_name" href="#">OB</a></li>
                            <li onclick="prenataltoggle()"><a href="#PreNatal-Table">Pre-Natal</a></li>
                            <li><a href="#PreNatal-Table">Barangay Pre-Natal</a></li>
                            <li onclick="postnataltoggle()"><a href="#PostNatal-Table">Post-Natal</a></li>
                            <li onclick="familyplantoggle()"><a href="#FamilyPlanning-Table">Family Planning</a></li>
                            <li><a href="brgy_familyplanning_table.php">Barangay Family Planning</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-collection' ></i>
                    <span class="link_name">Barangay Record</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="Menu">
                  <li><a class="link_name" href="#">Barangay Record</a></li>
                  <li><a href="#">Family Profiling</a></li>
                  <li><a href='CMB.php'>Barangay Reports</a></li>
                </ul>
              </li> -->
              <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-collection' ></i>
                    <span class="link_name">Inventory</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="Menu">
                  <li><a class="link_name" href="#">Inventory</a></li>
                  <li><a href="medicine_Inventory.php">Medicine</a></li>
                  <li><a href="brgy_medicine_inventory.php">Barangay Medicine</a></li>
                  <li><a href="consumables_Inventory.php">Consumables</a></li>
                  <li><a href="issuance_consumables.php">Consumables Issuance</a></li>
                  <li><a href="issuance_Inventory.php">Medicine Issuance</a></li>
                  <li><a href="brgymedicine_issuance.php">Barangay Issuance</a></li>
                </ul>
              </li>
              <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">Reports</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="Menu">
                  <li><a class="link_name" href="#">Reports</a></li>
                  <li><a href="#">Inventory Reports</a></li>
                  <li><a href='CMB.php'>Barangay Reports</a></li>
                </ul>
              </li>
              
              <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-plug' ></i>
                    <span class="link_name">Utilities</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="Menu">
                  <li><a class="link_name" href="#">Utilities</a></li>
                  <li><a href="usermaintenanceTable.php">User Maintenance</a></li>
                  <li><a href="audit_trailTable.php">Audit Trail</a></li>
                  <li><a href="backup_restoreTable.php">Backup and Restore</a></li>
                </ul>
              </li>
              
              <li>
                <a href="#">
                  <i class='bx bx-cog' ></i>
                  <span class="link_name">Setting</span>
                </a>
                <ul class="Menu blank">
                  <li><a class="link_name" href="#">Setting</a></li>
                </ul>
              </li>
              <li>
            <div class="profile-details">
              <div class="profile-content">
                <!--<img src="image/profile.jpg" alt="profileImg">-->
              </div>
              <div class="name-job">
                <div class="profile_name"></div>
                <div class="job"></div>
              </div>
              <i class='bx bx-log-out' ></i>
            </div>
          </li>
        </ul>
          </div>
    </div>

    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>