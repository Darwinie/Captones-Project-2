


<?php
if(!isset($_SESSION)){
    session_start();

}
include_once("connections/connections.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM patient_information WHERE id = '$id'";
$patient_information = $con->query($sql) or die ($con->error);
$row = $patient_information->fetch_assoc();



?>
<?php   include('DetailsModal/editbarangay_vaccination.php'); ?> 

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
                            CONTENT SECTION
  //////////////////////////////////////////////////////////////////////////////// -->
    <!-- GENERAL PATIENT TABLE -->
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
  
        <h3 class="mt-4 justify-content-center text-center">Patient Information Details</h3>
        <div class="row">
        
        <div class="col-md-10 text-end mb-2">
                            <form action="deletepatientinformation.php" method="post">
                                <!-- This delete code is for admin only to see -->
                                <?php if($_SESSION['access'] == "Admin"){?>
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
                                <?php } ?>
                            </form>
        </div>
       
        </div>
        <div class="container card col-sm-8 mb-5">
       
         

        <div class="card-body">
            <div class="content">
                    
                    <form class="row g-3 mt-4" action="" method="post">

                    <div class="row">
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="text" class="form-control" name="familyserial" value="<?php echo $row['family_number']; ?>" id="inputFamilySerial">
                        </div>                                            
                        <div class="col-md-2">
                            <label for="inputFamilyCode" class="form-label fw-bold">Family Code</label>
                            <input type="text" class="form-control" name="familycode" value="<?php echo $row['family_code']; ?>" id="familycode">
                        </div>
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-sm">  
                        </div>
                        <div class="col-md-2 text-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#brgyvaccination">
                             Edit
                            </button>
                        </div>
                        
                    </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">PATIENT ENROLLMENT RECORD</h5>
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" name="lastname" value="<?php echo $row['last_name']; ?>" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" name="firstname" value="<?php echo $row['first_name']; ?>" id="inputFirstName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputMiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" value="<?php echo $row['middle_name']; ?>" id="inputMiddleName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputSuffix" class="form-label">Suffix</label>
                          <input type="text" class="form-control" name="suffix" value="<?php echo $row['suffix']; ?>" id="inputSuffix">
                        </div>
                        
                        <div class="col-md-2">
                            <label for="inputSex" class="form-label">Sex</label>
                            <select id="inputSex" name="sex" class="form-select">
                            <option value="Male" <?php echo ($row['sex'] == "Male")? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?php echo ($row['sex'] == "Female")? 'selected' : '' ?>>Female</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" name="zip" value="<?php echo $row['zip']; ?>" id="inputZip">
                        </div>
                        <div class="col-3">
                            <label for="inputContactNo" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" name="contactno" value="<?php echo $row['contact_no']; ?>" id="inputContactNo">
                        </div>
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Age(yrs)</label>
                            <input type="text" class="form-control" name="age" value="<?php echo $row['age']; ?>"   id="inputAge">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputCivilStatus" class="form-label">Civil Status</label>
                            <select id="inputCivilStatus" name="civilstatus" class="form-select">
                              <option <?php echo ($row['civil_status'] == "Single")? 'selected' : '' ?>>Single</option>
                              <option <?php echo ($row['civil_status'] == "Married")? 'selected' : '' ?>>Married</option>
                              <option <?php echo ($row['civil_status'] == "Annulled")? 'selected' : '' ?>>Annulled</option>
                              <option <?php echo ($row['civil_status'] == "Widowed")? 'selected' : '' ?>>Widowed</option>
                              <option <?php echo ($row['civil_status'] == "Separated")? 'selected' : '' ?>>Separated</option>
                              <option <?php echo ($row['civil_status'] == "Co-Habitation")? 'selected' : '' ?>>Co-Habitation</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputSpouseName" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" name="spousename" value="<?php echo $row['spouse_name']; ?>" id="inputSpouseName">
                        </div>
                        <div class="col-2">
                          <label for="inputBirthdate" class="form-label">Birth Date</label>
                          <input type="text" class="form-control" name="birthdate" value="<?php echo $row['birth_date']; ?>" id="inputBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                          <label for="inputBirthPlace" class="form-label">Birthplace</label>
                          <input type="text" class="form-control" name="birthplace" value="<?php echo $row['birth_place']; ?>" id="inputBirthPlace">
                        </div> 
                        <div class="col-2">
                            <label for="inputBirthdateSpouse" class="form-label">Birth Date of Spouse</label>
                            <input type="text" class="form-control" name="spousebirthdate" value="<?php echo $row['bd_spouse']; ?>" id="inputBirthdateSpouse" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEducationAttainment" class="form-label">Educational Attainment</label>
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select">
                              <option <?php echo ($row['educational_attainment'] == "No Formal Education")? 'selected' : '' ?>>No Formal Education</option>
                              <option <?php echo ($row['educational_attainment'] == "Elementary")? 'selected' : '' ?>>Elementary</option>
                              <option <?php echo ($row['educational_attainment'] == "HighSchool")? 'selected' : '' ?>>HighSchool</option>
                              <option <?php echo ($row['educational_attainment'] == "Vocational")? 'selected' : '' ?>>Vocational</option>
                              <option <?php echo ($row['educational_attainment'] == "College")? 'selected' : '' ?>>College</option>
                              <option <?php echo ($row['educational_attainment'] == "Post Graduate")? 'selected' : '' ?>>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputFamilyMember" class="form-label">Family Member</label>
                            <select id="inputFamilyMember" name="familymember" class="form-select">
                              <option <?php echo ($row['family_member'] == "Father")? 'selected' : '' ?>>Father</option>
                              <option <?php echo ($row['family_member'] == "Mother")? 'selected' : '' ?>>Mother</option>
                              <option <?php echo ($row['family_member'] == "Son")? 'selected' : '' ?>>Son</option>
                              <option <?php echo ($row['family_member'] == "Daughter")? 'selected' : '' ?>>Daughter</option>
                              <option <?php echo ($row['family_member'] == "Others")? 'selected' : '' ?>>Others</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="inputSpecify" class="form-label">If others please specify</label>
                            <input type="text" class="form-control" name="specify" value="<?php echo $row['other_specify']; ?>" id="inputSpecify">
                        </div>
                        <div class="col-md-4">
                            <label for="inputMothersName" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" name="mothersname" value="<?php echo $row['mother_name']; ?>" id="inputMothersName">
                        </div>
                        <div class="col-2">
                            <label for="inputMotherBirthdate" class="form-label">Mother's Birth Date</label>
                            <input type="text" class="form-control" name="motherbirthdate" value="<?php echo $row['mother_bd']; ?>" id="inputMotherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="inputFathersName" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" name="fathersname" value="<?php echo $row['father_name']; ?>" id="inputFathersName">
                        </div>
                        <div class="col-2">
                            <label for="inputFatherBirthdate" class="form-label">Father's Birth Date</label>
                            <input type="text" class="form-control" name="fatherbirthdate" value="<?php echo $row['father_bd']; ?>" id="inputFatherBirthdate" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="inputNHTS" class="form-label">DSWD NHTS</label>
                            <select id="inputNHTS" name="dswdnhts" class="form-select">
                              <option <?php echo ($row['dswd_nhts'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['dswd_nhts'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputFacHousehold" class="form-label">Facility Household No.</label>
                            <input type="text" class="form-control" name="facilityhousehold" value="<?php echo $row['family_house_no']; ?>" id="inputFacHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="input4ps" class="form-label">4ps Member</label>
                            <select id="input4ps" name="4ps" class="form-select">
                              <option <?php echo ($row['4ps_member'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['4ps_member'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputHousehold" class="form-label">Household No.</label>
                            <input type="text" class="form-control" name="householdno" value="<?php echo $row['household_no']; ?>" id="inputHousehold">
                        </div>
                        <div class="col-md-3">
                            <label for="inputPhilhealth" class="form-label">PhilHealth Member</label>
                            <select id="inputPhilhealth" name="philhealth" class="form-select">
                              <option <?php echo ($row['philhealth_member'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['philhealth_member'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputStatusType" class="form-label">Status Type</label>
                            <select id="inputStatusType" name="statustype" value="<?php echo $row['status_type']; ?>" class="form-select">
                              <option <?php echo ($row['status_type'] == "Member")? 'selected' : '' ?>>Member</option>
                              <option <?php echo ($row['status_type'] == "Dependent")? 'selected' : '' ?>>Dependent</option>
                              <option <?php echo ($row['status_type'] == "N/A")? 'selected' : '' ?>>N/A</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="inputPhilhealthNo" class="form-label">Philhealth No.</label>
                            <input type="text" class="form-control" name="philhealthno" value="<?php echo $row['philhealth_no']; ?>" id="inputPhilhealthNo">
                        </div>
                        <div class="col-md-3">
                            <label for="inputCategory" class="form-label">If member, indicate category</label>
                            <select id="inputCategory" name="category" class="form-select">
                              <option <?php echo ($row['indicate_category'] == "N/A")? 'selected' : '' ?>>N/A</option>
                              <option <?php echo ($row['indicate_category'] == "FE - Private")? 'selected' : '' ?>>FE - Private</option>
                              <option <?php echo ($row['indicate_category'] == "FE - Goverment")? 'selected' : '' ?>>FE - Goverment</option>
                              <option <?php echo ($row['indicate_category'] == "IE:")? 'selected' : '' ?>>IE:</option>
                              <option <?php echo ($row['indicate_category'] == "Others:")? 'selected' : '' ?>>Others:</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputPCB" class="form-label">Primary Care Benefit (PCB) Member?</label>
                            <select id="inputPCB" name="pcb" value="<?php echo $row['pcb_member']; ?>" class="form-select">
                              <option <?php echo ($row['pcb_member'] == "Yes")? 'selected' : '' ?>>Yes</option>
                              <option <?php echo ($row['pcb_member'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                      
                    </form>

                    <?php 
                        
                        $familynumber = $row['family_number'];
                        
                        $sql = "SELECT * FROM tbl_pediavaccination_itr WHERE family_number LIKE $familynumber ORDER BY id DESC";
                        $medical_itr = $con->query($sql) or die ($con->error);
                        $row = $medical_itr->fetch_assoc();

             
                     ?>
                     <?php  ?> 
                    
                    <div class="table-wrapper">
                    <div class="table-title">
                      <div class="row">
                          <div class="col-sm-6">
                             <h3>Individual Treatment <b> Record</b></h3>
                             <h3>Immunization <b> History</b></h3>
                          </div>
                          <div class="col-sm-6">
                            <form action="result.php" method="get" class="d-flex" role="search">
                              <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit" >Search</button>
                            </form>
                          </div>
                    <div class="tables border shadow border-3 mt-3 mb-5">
                    <table class="table">
                        <thead>
                      <tr>
                        <th>#</th>
                        <th>Family Number</th>
                        <th>Immunization</th>
                        <th>Chief of Complaints</th>
                        <th>Diagnosis</th>
                        <th>Medication Treatment</th>
                        <th>Time Added</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                        <tbody>
                        <?php do{ ?>
                            <tr>
                                    <td class="patient_id"><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['family_number']; ?></td>
                                    <td><?php echo $row['immunization'];?></td>
                                    <td><?php echo $row['chief_complaints']; ?></td>
                                    <td><?php echo $row['diagnosis']; ?></td>
                                    <td><?php echo $row['medication_treatment']; ?></td>
                                    <td><?php echo $row['added_at']; ?></td>
                                    <td>
                                        <div class="col-2">
                                    
                                        <a href="view_pediaImmunization_itr.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mb-2">view</a>
                                        
                                    </td> 
                              </tr>
                        <?php }while($row = $medical_itr->fetch_assoc()); ?>
                        </tbody>
                    </table>
                  </div>
                  </div>
                 </div>
                

                </div>
                </div>
        </div>
      
        
        
       
  
      



    

  
   
    <!--FOR SIDE BAR-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


</body>
</html>