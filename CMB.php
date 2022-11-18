<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
</head>
<body>
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
    <!-- THIS IS FOR CODE FOR REPORTS -->
    <div id="Reports" class="container mt-3 Tabhead">
        <div class="Tabs">
          <ul class="nav nav-pills">
            <li onclick="CMBtoggle()" class="nav-item">
              <a  class="nav-link active" aria-current="page" href="#CMBReport">CBM Reports</a>
            </li>
            <li onclick="ACPStoggle()" class="nav-item">
              <a class="nav-link" href="#ACPSReport">ACPS Reports</a>
            </li>
            <li onclick="ZeroFivetoggle()" class="nav-item">
              <a class="nav-link" href="#ZeroFiveReport">0-71 Reports</a>
            </li>
            <li onclick="BHWSAReporttoggle()" class="nav-item">
              <a class="nav-link" href="#BHWSAReport">BHW'SA Reports</a>
            </li>
            <li onclick="PADReporttoggle()" class="nav-item">
              <a class="nav-link" href="#PADReport">PAD Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BES Reports</a>
            </li>
            <li onclick="PregTrackingtoggle()" class="nav-item">
              <a class="nav-link" href="#PregTrack">PTC Forms</a>
            </li>
          </ul>
    </div>
    
        <!-- THIS IS CMB REPORT -->
        <div id="CMBReport" class="CMB">
        <div class="card mt-2">
          <div class="card-body">
            <div class="card-title">
              <div class="row">
                  <div class="justify-content-center text-center">
                     <h3>COMMUNITY BASED MONITORING <b>REPORT</b></h3>
                  </div>
                  <div class="brgyselector">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select your Barangay</option>
                    <option value="1">Sandiego</option>
                    <option value="2">Prenza</option>
                    <option value="3">Malaruhatan</option>
                    <option value="3">Kapito</option>
                    <option value="3">Binubusan</option>
                    <option value="3">Brgy Uno</option>
                  </select>
                  
                  <select class="form-select mt-2" aria-label="Default select example">
                    <option selected>Select your Municipality</option>
                    <option value="1">Lian</option>
                  </select>
                  <select class="form-select mt-2" aria-label="Default select example">
                    <option selected>Select your Province</option>
                    <option value="1">Batangas</option>
                  </select>
                  </div>
    
                  <!-- this is for total population -->
                  <div class="container mt-4">
                    <h6>CBMB REPORT:</h6>
                        <input type="number" class="Totalpopulation mb-2" id="usr">
                        <label for="usr">Total no. of Population</label>
                        
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="noh">
                        <label for="usr">No. of Houses</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="nof">
                        <label for="usr">No. of Families</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="noht">
                        <label for="usr">No. of Houses w/Toilet</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="sani">
                        <label for="usr">A. Sanitary</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. Unsanitary</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="nohwot">
                        <label for="usr">No. of Housed w/o Toilet</label>
                    
                    <h6>WATER SUPPLY SOURCE:</h6>
                        <input type="number" class="Totalpopulation mb-2" id="usr">
                        <label for="usr">A. Safe Water</label>
                    
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="noh">
                        <label for="usr">B. for follow-up</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="nof">
                        <label for="usr">D. Danger</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="noht">
                        <label for="usr">No. MWRA [15-45 yrs.old]</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="sani">
                        <label for="usr">A. Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Single</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Married</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="sani">
                        <label for="usr">B. Female</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Single</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Married</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="nohwot">
                        <label for="usr">No. of ADOLESCENT [10-25 yrs old]</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of Pregnant Women</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">A. W/ prenatal check-up</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. W/o prenatal check-up</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">C. Given TT2 plus</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">D. Given TT1 only</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of high risk women</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of Post Partum (PP) Mothers</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of Mothers w/ exclusive Breast Feeding (BF)</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Total no. of BF Mothers w/ 0-2 yrs old</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Total no. of non-Family Planning(fp) acceptors</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Total no. of FP acceptors</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">A. Pills</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. DMPA</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">C. IUD</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">D. CONDOM</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">E. NFP (LAM)</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">F. BTL</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">G. VASECTOMY</label>
    
    
                    <h6>STATUS of FP PRACTICES:</h6>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">A. Current User</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. Drop-out</label> 
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of children (0-6 yrs.old) </label> 
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">A. 0-11 months</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. 1-5 yrs.old</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <label for="usr">C.6 yrs.old</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
    
                    <h6>NUTRITIONAL STATUS (0-6):</h6> 
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">A. Normal</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. Underweight</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">C. Severely Underweight</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">D. Overweight</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Male</label>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">Female</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. fully immunized children</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. Maternal of Deaths</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. Infants Deaths</label>
                          
                    <h6>Garbage Disposal:</h6> 
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">A. garbage w/ cover</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">B. garbage w/o cover</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">C. burning/garbage truck</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of Garbage</label>
    
                    <h6>CONTROL OF COMMUNICATION DISEASES:</h6> 
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of TB patients</label>
                        <br>
                        <input type="number" class="Totalpopulation mb-2" id="unsani">
                        <label for="usr">No. of TB patients Cured</label>
                  </div>
          </div>
         </div>
          </div>
        </div>
        </div>

                      <!-- THIS IS FOR ANNUAL CATCHMENT POPULATION REPORT -->
        <div id="ACPSReport" class="ACPS">
          <div class="card mt-2">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                    <div class="justify-content-center text-center">
                       <h3>ANNUAL CATCHMENT POPULATION SUMMARY <b>REPORT</b></h3>
                       <div class="DateSelector">
                        <input type="text" class="form-control" name="datepicker" id="datepicker" />
                       </div>
                       <div class="brgyselector">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Select your Barangay</option>
                          <option value="1">Sandiego</option>
                          <option value="2">Prenza</option>
                          <option value="3">Malaruhatan</option>
                          <option value="3">Kapito</option>
                          <option value="3">Binubusan</option>
                          <option value="3">Brgy Uno</option>
                        </select>
                        <select class="form-select mt-2" aria-label="Default select example">
                          <option selected>Select your Municipality</option>
                          <option value="1">Lian</option>
                        </select>
                        </div>
                       <table class="table">
                        <thead>
                          <tr>
                            <th>LESS GROUP</th>
                            <th>MALE</th>
                            <th>FEMALE</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>LESS THAN 1 YEAR</td>
                            <td>Defaultson</td>
                            <td>gd</td>
                            <td>def@somemail.com</td>
                          </tr>      
                          <tr class="success">
                            <td>1 - 4</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>def@somemail.com</td>
                          </tr>
                          <tr class="danger">
                            <td>5 - 6</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td>def@somemail.com</td>
                          </tr>
                          <tr class="info">
                            <td>7 - 14</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td>def@somemail.com</td>
                          </tr>
                          <tr class="warning">
                            <td>15 - 49</td>
                            <td>Refs</td>
                            <td>bo@example.com</td>
                            <td>def@somemail.com</td>
                          </tr>
                          <tr class="active">
                            <td>50 - 64</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                            <td>def@somemail.com</td>
                          </tr>
                          <tr class="active">
                            <td>65 - OVER</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                            <td>def@somemail.com</td>
                          </tr>
                          <tr class="active">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>TOTAL</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
            </div>
           </div>
          </div>
        </div>
        </div>
         <!-- THIS IS FOR 0-71 MONTHS -->
        <div id="ZeroFiveReport" class="zerotofive">
          <div class="card mt-2">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                    <div class="justify-content-center text-center">
                       <h3>0 - 71 MONTHS <b>REPORT</b></h3>
                       <div class="brgyselector">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Select your Barangay</option>
                          <option value="1">Sandiego</option>
                          <option value="2">Prenza</option>
                          <option value="3">Malaruhatan</option>
                          <option value="3">Kapito</option>
                          <option value="3">Binubusan</option>
                          <option value="3">Brgy Uno</option>
                        </select>
                        <select class="form-select mt-2" aria-label="Default select example">
                          <option selected>Select your Municipality</option>
                          <option value="1">Lian</option>
                        </select>
                        </div>
                       <table class="table">
                        <thead class="titlehead">
                          <tr>
                            <th width="20%">Name of FATHER/MOTHER</th>
                            <th width="20%">NAME OF CHILD</th>
                            <th width="9%">DATE OF BIRTH</th>
                            <th width="6%">AGE IN MONTH</th>
                            <th width="6%">WEIGHT (kg)</th>
                            <th width="9%">Nut'L Status</th>
                            <th width="6%">LENGTH</th>
                            <th width="6%">HEIGHT</th>
                            <th width="6%">Length Height for Age</th>
                            <th width="6%">Weight for lenght Height</th>
                            <th width="6%">Standing/lying</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>      
                          <tr class="success">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>john@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>
                          <tr class="danger">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>mary@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>
                          <tr class="info">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>july@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>
                          <tr class="warning">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>bo@</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                          </tr>
                          <tr class="active">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>act@</td>
                            <td>def@</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>d23kg</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
            </div>
           </div>
          </div>
          </div>
        </div>

        <!-- THIS IS FOR BARANGAY HEALTHWORKER ACOMPLISHMENT REPORT -->
        <div id="BHWSAReport" class="BHWSA">
                  <div class="card mt-2">
                    <div class="card-body">
                      <div class="card-title">
                        <div class="row">
                            <div class="justify-content-center text-center">
                               <h3>BARANGAY HEALTH WORKER'S ACCOMPLISHMENT <b>REPORT</b></h3>
                            </div>
                            <div class="brgyselector">
                            <select class="form-select" aria-label="Default select example">
                              <option selected>Select your Barangay</option>
                              <option value="1">Sandiego</option>
                              <option value="2">Prenza</option>
                              <option value="3">Malaruhatan</option>
                              <option value="3">Kapito</option>
                              <option value="3">Binubusan</option>
                              <option value="3">Brgy Uno</option>
                            </select>
                            <select class="form-select mt-2" aria-label="Default select example">
                              <option selected>Select your Municipality</option>
                              <option value="1">Lian</option>
                            </select>
                            </div>
              
                            
                            <div class="container mt-4">
                                  <label for="usr">Total no. of Women</label>
                                  <input type="number" class="BHWAccomplishment1 mb-2" id="usr">
                                  <br>
                                  <label for="usr" class="label">10-14</label>
                                  <input type="number" class="BHWAccomplishment2 mb-2" id="noh">
                                  <br>
                                  <label for="usr" class="label">WRA(Women of Reproductive Age 15-49)</label>
                                  <input type="number" class="BHWAccomplishment3 mb-2" id="nof">
                                  <br>
                                  <label for="usr" class="label">50-59</label>
                                  <input type="number" class="BHWAccomplishment4 mb-2" id="noht">
                                  <br>
                                  <label for="usr" class="label">Senior</label>
                                  <input type="number" class="BHWAccomplishment5 mb-2" id="sani">
                                  <br>
                                  <label for="usr" class="label">Pregnant Women</label>
                                  <input type="number" class="BHWAccomplishment6 mb-2" id="unsani">
                                  <br>
                                  <label for="usr"  class="label">Adolescent (10-19)</label>
                                  <input type="number" class="BHWAccomplishment7 mb-2" id="nohwot">
                                  <br>
                                  <label for="usr" class="label">20-49</label>
                                  <input type="number" class="BHWAccomplishment8 mb-2" id="nohwot">
                                  <br>
                                  <label for="usr" class="label">FP Users</label>
                                  <input type="number" class="BHWAccomplishment9   mb-2" id="nohwot">   
                             </div>

                         <div class="card mt-2">
                         <table class="table">
                          <thead class="FP">
                            <tr>
                              <th></th>
                              <th>BTL</th>
                              <th>IUD</th>
                              <th>PILLS</th>
                              <th>INJECTABLE</th>
                              <th>CONDOM</th>
                              <th>IMPLANT</th>
                              <th>FAB</th>
                              <th>TOTAL</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>10-19</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>      
                            <tr class="success">
                              <td>20-49</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="danger">
                              <td>50-59</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="info">
                              <td>TOTAL</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                      <div class="container mt-4">
                        <label for="usr">Total no. of Men</label>
                        <input type="number" class="BHWAccomplishment11 mb-2" id="usr">
                        <br>
                        <label for="usr" class="label">10-19</label>
                        <input type="number" class="BHWAccomplishment12 mb-2" id="noh">
                        <br>
                        <label for="usr" class="label">20-49</label>
                        <input type="number" class="BHWAccomplishment13 mb-2" id="nof">
                        <br>
                        <label for="usr" class="label">50-59</label>
                        <input type="number" class="BHWAccomplishment14 mb-2" id="noht">
                        <br>
                        <label for="usr" class="label">Senior</label>
                        <input type="number" class="BHWAccomplishment15 mb-2" id="sani">
                        <br>
                       </div>
                       <div class="container mt-3">
                        <span>Is there a maternal death?</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">No</label>
                        </div>
                        <br>
                        <span>If Yes, list the name, date, age, DP of maternal deaths.</span>
                        <div class="card mt-2">
                          <table class="table">
                           <thead class="FP">
                             <tr>
                               <th>Name</th>
                               <th>Date of Death</th>
                               <th>Age</th>
                               <th>Gravida,Para</th>  
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td>10-19</td>
                               <td></td>
                               <td></td>
                               <td></td>
                             </tr>      
                             <tr class="success">
                               <td>20-49</td>
                               <td></td>
                               <td></td>
                               <td></td>
                             </tr>
                             <tr class="danger">
                               <td>50-59</td>
                               <td></td>
                               <td></td>
                               <td></td>
                             </tr>
                             <tr class="info">
                               <td>TOTAL</td>
                               <td></td>
                               <td></td>
                               <td></td>
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

        <!-- THIS IS FOR POP AGE DISTRIBUTION REPORT -->
        <div id="PADReport" class="PAD">
          <div class="card mt-2">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                    <div class="justify-content-center text-center">
                       <h3>POP AGE DISTRIBUTION <b>REPORT</b></h3>
                       <div class="brgyselector">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Select your Barangay</option>
                          <option value="1">Sandiego</option>
                          <option value="2">Prenza</option>
                          <option value="3">Malaruhatan</option>
                          <option value="3">Kapito</option>
                          <option value="3">Binubusan</option>
                          <option value="3">Brgy Uno</option>
                        </select>
                        <select class="form-select mt-2" aria-label="Default select example">
                          <option selected>Select your Municipality</option>
                          <option value="1">Lian</option>
                        </select>
                        </div>
                       <table class="table mt-5">
                        <thead>
                          <tr>
                            <th>AGE GROUP</th>
                            <th>MALE</th>
                            <th>FEMALE</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>0 - 11</td>
                            <td>Defaultson</td>
                            <td>gd</td>
                            <td>gd</td>
                          </tr>      
                          <tr class="success">
                            <td>1 - 4</td>
                            <td>Doe</td>
                            <td>john@</td>
                            <td>gd</td>
                          </tr>
                          <tr class="danger">
                            <td>5 - 6</td>
                            <td>Moe</td>
                            <td>mary@</td>
                            <td>gd</td>
                          </tr>
                          <tr class="info">
                            <td>7 - 9</td>
                            <td>Dooley</td>
                            <td>july@</td>
                            <td>gd</td>
                          </tr>
                          <tr class="warning">
                            <td>10 - 14</td>
                            <td>Refs</td>
                            <td>bo@</td>
                            <td>gd</td>
                          </tr>
                          <tr class="active">
                            <td>15 - 19</td>
                            <td>Activeson</td>
                            <td>act@</td>
                            <td>gd</td>
                          </tr>
                          <tr class="active">
                            <td>20 - 24</td>
                            <td>Activeson</td>
                            <td>act@</td>
                            <td>gd</td>
                          </tr>
                          <tr class="active">
                            <td>25 - 29</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>30 - 34</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>35 - 39</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>40 - 44</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>45 - 49</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>50 - 54</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>55 - 59</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>60 - 64</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="active">
                            <td>65 +</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
            </div>
           </div>
          </div>
        </div>
        </div>

         <!-- THIS IS FOR PREGNANCY TRACKING COLLECTION FORM -->
        <div id="PregTrack" class="PregnancyTracking">
          <div class="card mt-2">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                    <div class="justify-content-center text-center">
                       <h3>PREGNANCY TRACKING COLLECTION <b>REPORT</b></h3>
                       <div class="brgyselector">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Select your Barangay</option>
                          <option value="1">Sandiego</option>
                          <option value="2">Prenza</option>
                          <option value="3">Malaruhatan</option>
                          <option value="3">Kapito</option>
                          <option value="3">Binubusan</option>
                          <option value="3">Brgy Uno</option>
                        </select>
                        <select class="form-select mt-2" aria-label="Default select example">
                          <option selected>Select your Municipality</option>
                          <option value="1">Lian</option>
                        </select>
                        </div>
                       <table class="table">
                        <thead class="titlehead">
                          <tr>
                            <th width="20%">LASTNAME</th>
                            <th width="20%">FIRSTNAME</th>
                            <th width="9%">CONTACT NO.</th>
                            <th width="6%">Barangay HealthWorker</th>
                            <th width="6%">BHW Contact No.</th>
                            <th width="9%">Philhealth</th>
                            <th width="6%">Birthday</th>
                            <th width="6%">LMP</th>
                            <th width="6%">GP</th>
                            <th width="6%">Medical Condition</th>
                            <th width="6%">Previous Obstric Complication</th>
                            <th width="6%">Date of First PreNatal</th>
                            <th width="6%">H+(cm)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Gonzales</td>
                            <td>Riconicoo</td>
                            <td>09213334216</td>
                            <td>Mayla Santiago</td>
                            <td>09213334216</td>
                            <td>Yes</td>
                            <td>11/05/2000</td>
                            <td>d34</td>
                            <td>5677</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>      
                          <tr class="success">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>john@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>
                          <tr class="danger">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>mary@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>
                          <tr class="info">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>july@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                            <td>def@</td>
                          </tr>
                          <tr class="warning">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>bo@</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                          </tr>
                          <tr class="active">
                            <td>James Niko Robert jr.</td>
                            <td>Willy B. Bautista</td>
                            <td>act@</td>
                            <td>def@</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>23kg</td>
                            <td>d23kg</td>
                            <td>d23kg</td>
                            <td>d23kg</td>
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

    
  
  

 

  </section>
    
       <script src="js/JS_Reports.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
       <script>
        $(document).ready(function(){
          $("#datepicker").datepicker({
             format: "yyyy",
             viewMode: "years", 
             minViewMode: "years",
             autoclose:true
          });   
        })
        </script>
      </body>
</html>