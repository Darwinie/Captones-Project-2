


<?php
if(!isset($_SESSION)){
    session_start();

}
include_once("connections/connections.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM  tbl_family_profiling WHERE id = '$id'";
$family_profiling = $con->query($sql) or die ($con->error);
$row = $family_profiling->fetch_assoc();

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

<?php


?>

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
        <div class="col-md-10 text-end mb-2">
                            <form action="deletepatientinformation.php" method="post">
                                <!-- This delete code is for admin only to see -->
                                <?php if($_SESSION['access'] == "Admin"){?>
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
                                <?php } ?>
                            </form>
        </div>
        <div class="container card col-sm-8 mb-5">    
                <div class="card-body">
                    
                <form class="row g-3 mt-4" method="post" action="">
                <div class="row">
                      <div class="col-md-3">  
                                     
                        </div> 
                        <div class="col-md-3">  
                                     
                        </div> 
                        <div class="col-md-4">  
                                     
                        </div> 
                        <div class="col-md-3">
                            <label for="inputfamilycode" class="form-label fw-bold">Family Code</label>
                            
                            <input type="text" class="form-control" value="<?php echo $row['family_code']; ?>" name="familycode" id="familycode1">    
                        </div>                                             
                        
                        </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">FAMILY PROFILING</h5>
                        
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Date of Interview</label>
                          <input type="date" class="form-control" value="<?php echo $row['date_of_interview']; ?>" name="date_of_interview" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">Interviewer</label>
                          <input type="text" class="form-control" value="<?php echo $row['interviewer']; ?>" name="interviewer" id="inputFirstName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputMiddleName" class="form-label">Interviewee</label>
                            <input type="text" class="form-control" value="<?php echo $row['interviewee']; ?>" name="interviewee" id="inputMiddleName">
                          </div>
                        <div class="col-md-3">
                          <label for="inputSuffix" class="form-label">Barangay</label>
                          <input type="text" class="form-control" value="<?php echo $row['barangay']; ?>" name="barangay" id="inputSuffix">
                        </div>
                        <div class="col-md-2">
                            <label for="inputSex" class="form-label">Residence</label>
                            <select id="inputSex" name="residence" class="form-select">
                            <option value="Male" <?php echo ($row['residence'] == "Permanent")? 'selected' : '' ?>>Permanent</option>
                            <option value="Female" <?php echo ($row['residence'] == "Present")? 'selected' : '' ?>>Present</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="inputresidencylenght" class="form-label">Lenght of Residency(mos/yrs.)</label>
                            <input type="text" class="form-control" value="<?php echo $row['length_of_residency']; ?>" name="residencylenght" id="inputresidencylenght" placeholder="1234 Main St">
                        </div>
                        <div class="col-5">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Prima Care Provider</label>
                            <input type="text" class="form-control" value="<?php echo $row['primarycare_provider']; ?>" name="primarycareprovider" id="inputZip">
                        </div>
                        <div class="col-3">
                            <label for="inputContactNo" class="form-label">Primary Care No.</label>
                            <input type="text" class="form-control" value="<?php echo $row['primarycare_provider_no']; ?>" name="primarycareno" id="inputContactNo">
                        </div>
                        <div class="col-md-2">
                            <label for="inputtraveltime" class="form-label">Travel time (min)</label>
                            <input type="text" class="form-control" value="<?php echo $row['travel_time']; ?>" name="traveltime" id="inputtraveltime">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Mode of Transportation (specify)</label>
                            <input type="text" class="form-control" value="<?php echo $row['mode_of_transportation']; ?>" name="mode_of_transportation" id="inputAge">
                        </div> 
                        
                        <h4 class="ITRtitle justify-content-center text-center shadow">I. Assesment of the Family, Home and Environmental Conditions</h4>
                        <?php 
                        
                        $id = $_GET['id'];
                        $sql1 = "SELECT * FROM familyprofiling_family_members WHERE user_id = '$id' ORDER BY id DESC";
                        $fam_mem = $con->query($sql1) or die ($con->error);
                        $row = $fam_mem->fetch_assoc();

                                    
                       ?>
                        <div class="table-striped border shadow border-3 mt-3 mb-5">
                        <table class="table">
                            <thead>
                          <tr>
                                  
                                  <th>Family member</th>
                                  <th>Family position</th>
                                  <th>Birthday</th>
                                  <th>Sex</th>
                                  <th>Marital Status</th>
                                  <th>Blood Type</th>
                                  <th>Disability</th>
                                  <th>Education attainement</th>
                                  <th>Occupation</th>
                                  <th>Contact No</th>
                                  <th>Nhip membership</th>
                          </tr>
                        </thead>
                            <tbody>
                              <?php do{ ?>
                                <tr>
                                       
                                        <td><?php echo $row['family_member']; ?></td>
                                        <td><?php echo $row['family_position'];?></td>
                                        <td><?php echo $row['birthday']; ?></td>
                                        <td><?php echo $row['sex']; ?></td>
                                        <td><?php echo $row['marital_status']; ?></td>
                                        <td><?php echo $row['blood_type']; ?></td>
                                        <td><?php echo $row['disability']; ?></td>
                                        <td><?php echo $row['highest_education_attainment']; ?></td>
                                        <td><?php echo $row['occupation']; ?></td>
                                        <td><?php echo $row['contact_no']; ?></td>
                                        <td><?php echo $row['nhip']; ?></td>
                                  </tr>
                              <?php }while($row = $fam_mem->fetch_assoc()); ?>
                            </tbody>
                        </table>
                        </div>

                        <?php
                        $id = $_GET['id'];
                        
                        $sql2 = "SELECT * FROM  tbl_family_profiling WHERE id = '$id'";
                        $family_profiling = $con->query($sql2) or die ($con->error);
                        $row = $family_profiling->fetch_assoc();
                        
                        ?>
                        <h4 class="ITRtitle">B.Home and Environment</h4>
                        <h4 class="ITRtitle">1. Home</h4>
                        <div class="col-md-2">
                            <label for="inputownership" class="form-label">Ownership</label>
                            <select id="inputownership" name="ownership" class="form-select">
                            <option <?php echo ($row['ownership'] == "Owned")? 'selected' : '' ?>>Owned</option>
                            <option <?php echo ($row['ownership'] == "Rented")? 'selected' : '' ?>>Rented</option>
                            <option <?php echo ($row['ownership'] == "Others")? 'selected' : '' ?>>others</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputownershipother" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" value="<?php echo $row['others1']; ?>" name="ownershipother" id="inputownershipother">
                        </div>
                        <div class="col-md-2">
                            <label for="inputtypeconmat" class="form-label">Type of construction Material</label>
                            <select id="inputtypeconmat" name="typeconmat" class="form-select">
                            <option <?php echo ($row['type_construction_material'] == "Light")? 'selected' : '' ?>>Light</option>
                            <option <?php echo ($row['type_construction_material'] == "Strong")? 'selected' : '' ?>>Strong</option>
                            <option <?php echo ($row['type_construction_material'] == "Mixed")? 'selected' : '' ?>>Mixed</option>
                            <option <?php echo ($row['type_construction_material'] == "Others")? 'selected' : '' ?>>Others</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputtypeconsmat" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" value="<?php echo $row['others2']; ?>" name="typeconsmat" id="inputtypeconsmat">
                        </div>
                        <div class="col-md-2">
                            <label for="inputlightingfaci" class="form-label">Lighting Facilities</label>
                            <select id="inputlightingfaci" name="lightfaci" class="form-select">
                            <option <?php echo ($row['lighting_facilities'] == "Electricity")? 'selected' : '' ?>>Electricity</option>
                            <option <?php echo ($row['lighting_facilities'] == "Kerosene")? 'selected' : '' ?>>Kerosene</option>
                            <option <?php echo ($row['lighting_facilities'] == "others")? 'selected' : '' ?>>others</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputotherspecify" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" value="<?php echo $row['others3']; ?>" name="lightingfaciothers" id="inputotherspecify">
                        </div>
                        <h4 class="ITRtitle">2. Water Supply</h4>
                        <div class="col-md-2">
                            <label for="inputsource" class="form-label">Source</label>
                            <select id="inputsource" name="source" class="form-select">
                            <option <?php echo ($row['source'] == "level I(Point Source)")? 'selected' : '' ?>>level I(Point Source)</option>
                            <option <?php echo ($row['source'] == "level II(Communal or Stand Posts)")? 'selected' : '' ?>>level II(Communal or Stand Posts)</option>
                            <option <?php echo ($row['source'] == "level III(Waterworks System or Individual House Connection)")? 'selected' : '' ?>>level III(Waterworks System or Individual House Connection)</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputstorage" class="form-label">Storage</label>
                            <select id="inputstorage" name="storage" class="form-select">
                            <option <?php echo ($row['storage'] == "none (direct from faucet)")? 'selected' : '' ?>>none (direct from faucet)</option>
                            <option <?php echo ($row['storage'] == "covered container")? 'selected' : '' ?>>covered container</option>
                            <option <?php echo ($row['storage'] == "Uncovered container")? 'selected' : '' ?>>Uncovered container</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputdrinking" class="form-label">Use for Drinking</label>
                            <select id="inputdrinking" name="usedfordrinking" class="form-select">
                            <option <?php echo ($row['used_for_drinking'] == "Yes")? 'selected' : '' ?>>yes</option>
                            <option <?php echo ($row['used_for_drinking'] == "no")? 'selected' : '' ?>>no</option>
                            <option <?php echo ($row['used_for_drinking'] == "both")? 'selected' : '' ?>>both</option>
                            <option <?php echo ($row['used_for_drinking'] == "others(where)")? 'selected' : '' ?>>others(where?)</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputothers" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" value="<?php echo $row['others4']; ?>" name="useddrinkingothers" id="inputothers">
                        </div>
                        <h4 class="ITRtitle">3. Waste Disposal</h4>
                        <h5 class="ITRtitle">A. Refuse and Garbage</h5>
                        <div class="col-md-2">
                            <label for="inputcontainer" class="form-label">Container</label>
                            <select id="inputcontainer" name="container" class="form-select">
                            <option <?php echo ($row['container'] == "Covered")? 'selected' : '' ?>>Covered</option>
                            <option <?php echo ($row['container'] == "Uncovered")? 'selected' : '' ?>>Uncovered</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputsegregated" class="form-label">Segregated</label>
                            <select id="inputsegregated" name="segregated" class="form-select">
                            <option <?php echo ($row['segregated'] == "Yes")? 'selected' : '' ?>>Yes</option>
                            <option <?php echo ($row['segregated'] == "No")? 'selected' : '' ?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputmethodisposal" class="form-label">Method of Disposal</label>
                            <select id="inputmethodisposal" name="methodisposal" class="form-select">
                            <option <?php echo ($row['method_of_disposal'] == "Hog Feeding")? 'selected' : '' ?>>Hog Feeding</option>
                            <option <?php echo ($row['method_of_disposal'] == "Open Burning")? 'selected' : '' ?>>Open Burning</option>
                            <option <?php echo ($row['method_of_disposal'] == "Open Dumping")? 'selected' : '' ?>>Open Dumping</option>
                            <option <?php echo ($row['method_of_disposal'] == "Burial Pit")? 'selected' : '' ?>>Burial Pit</option>
                            <option <?php echo ($row['method_of_disposal'] == "Composting")? 'selected' : '' ?>>Composting</option>
                            <option <?php echo ($row['method_of_disposal'] == "Garbage Collection")? 'selected' : '' ?>>Garbage Collection</option>
                            </select>
                        </div>
                        <h5 class="ITRtitle">B. Toilet Type</h5>
                        <div class="col-md-2">
                            <label for="inputtoilettype" class="form-label">Toilet Type</label>
                            <select id="inputtoilettype" name="toilet" class="form-select">
                            <option <?php echo ($row['toilet_type'] == "Yes")? 'selected' : '' ?>>Sanitary</option>
                            <option>Unsanitary</option>
                            <option>None</option>
                            </select>
                        </div>

                         <!-- ///////////////////DOMESTIC ANIMALS TABLE ///////////////////////-->
                         <h4 class="ITRtitle">4. Domestic Animals</h4>
                         <?php 
                        
                        $id = $_GET['id'];
                        $sql3 = "SELECT * FROM familyprofiling_domestic_animals WHERE user_id = '$id' ORDER BY id DESC";
                        $anima_dom = $con->query($sql3) or die ($con->error);
                        $row = $anima_dom->fetch_assoc();

                                    
                       ?>
                        <div class="table-striped border shadow border-3 mt-3 mb-5">
                        <table class="table">
                            <thead>
                          <tr>
                                  
                                  <th>Kind/Type</th>
                                  <th>Number</th>
                                  <th>Unvaccinated</th>
                                  <th>Vaccinated</th>
                                  <th>Inside</th>
                                  <th>Outside</th>
                                  <th>Caged</th>
                                  <th>Uncaged</th>
                          </tr>
                        </thead>
                            <tbody>
                                <?php do{ ?>
                                <tr>
                                       
                                        <td><?php echo $row['kind_type']; ?></td>
                                        <td><?php echo $row['number'];?></td>
                                        <td><?php echo $row['no_of_unvaccinated']; ?></td>
                                        <td><?php echo $row['no_of_vaccinated']; ?></td>
                                        <td><?php echo $row['no_inside']; ?></td>
                                        <td><?php echo $row['no_outside']; ?></td>
                                        <td><?php echo $row['no_caged']; ?></td>
                                        <td><?php echo $row['no_uncaged']; ?></td>
                                  </tr>
                                  <?php }while($row = $anima_dom->fetch_assoc()); ?>
                            </tbody>
                        </table>
                        </div>

                        <!-- ///////////////////Health and Condiyitions TABLE ///////////////////////-->
                      <h4 class="ITRtitle justify-content-center text-center">II. Health and Condition and Problem Sheet</h4>
                      <?php 
                        
                        $id = $_GET['id'];
                        $sql1 = "SELECT * FROM familyprofiling_healthcondition_problems_sheet WHERE user_id = '$id' ORDER BY id DESC";
                        $fam_prob = $con->query($sql1) or die ($con->error);
                        $row = $fam_prob->fetch_assoc();

                                    
                       ?>
                        <div class="table-striped border shadow border-3 mt-3 mb-5">
                        <table class="table">
                            <thead>
                          <tr>
                                  
                                  <th>Family member with health condition</th>
                                  <th>Family History</th>
                                  <th>Health Condition</th>
                                  <th>Diagnostic Treatment</th>
                                  <th>Interventions needed & Action taken</th>
                                  <th>Non-emergency</th>
                                  <th>Emergency</th>
                          </tr>
                        </thead>
                            <tbody>
                              <?php do{ ?>
                                <tr>
                                       
                                        <td><?php echo $row['familymember_withhealth_condition']; ?></td>
                                        <td><?php echo $row['family_history'];?></td>
                                        <td><?php echo $row['health_condition_problem']; ?></td>
                                        <td><?php echo $row['diagnostics_treatment_regimen']; ?></td>
                                        <td><?php echo $row['Inventions_Needed_Actions_taken']; ?></td>
                                        <td><?php echo $row['non_emergency']; ?></td>
                                        <td><?php echo $row['emergency']; ?></td>
                                  </tr>
                              <?php }while($row = $fam_prob->fetch_assoc()); ?>
                            </tbody>
                        </table>
                        </div>
                        <h6>*Determine the health facility where the entire family shall be macthed for non-emergency and emergency cases</h6>


                        <!-- ///////////////////Immunization Part ///////////////////////-->
                        <h4 class="ITRtitle justify-content-center text-center">Immunization</h4>
                        <?php 
                        
                        $id = $_GET['id'];
                        $sql4 = "SELECT * FROM familyprofiling_vaccines WHERE user_id = '$id' ORDER BY id DESC";
                        $immuni = $con->query($sql4) or die ($con->error);
                        $row = $immuni->fetch_assoc();

                                    
                       ?>
                        <div class="table-striped border shadow border-3 mt-3 mb-5">
                        <table class="table">
                            <thead>
                          <tr>
                                  <th>Name of Family Member</th>
                                  <th>Immunization ( < 5y/o)</th>
                                  <th>Remarks</th>
                                  <th>Immunization ( > 5y/o,Pregnant, Senior)</th>
                                  <th>Remarks</th>
                          </tr>
                        </thead>
                            <tbody>
                              <?php do{ ?>
                                <tr>
                                       
                                        <td><?php echo $row['name_of_family_member']; ?></td>
                                        <td><?php echo $row['immunization_child'];?></td>
                                        <td><?php echo $row['remarks_1']; ?></td>
                                        <td><?php echo $row['immunization_adult']; ?></td>
                                        <td><?php echo $row['remarks_2']; ?></td>
                                  </tr>
                              <?php }while($row = $immuni->fetch_assoc()); ?>
                            </tbody>
                        </table>
                        </div>
                        </form>
                 </div>
              </div>  
       
        
        
  
   
    <!--FOR SIDE BAR-->
    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    
</body>
</html>