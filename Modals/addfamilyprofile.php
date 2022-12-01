


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <!-- Bootstrap CDN MODAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    
</head>
<body>
  
  <!-- Button trigger modal -->

  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Deworming">
  Deworming
  </button> -->


   <!-- FOR DEWORMING -->
   <div class="modal fade" id="familyprofile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="familyprofileLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="familyprofileLabel">Creating Family Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    
                    <form class="row g-3 mt-4" method="post" action="insert_familyprofiling.php">
                    <div class="row">
                      <div class="col-md-3">  
                                     
                        </div> 
                        <div class="col-md-3">
                            <label for="inputfamilycode" class="form-label fw-bold">Family Code</label>
                            
                            <input type="text" class="form-control" name="familycode" id="familycode1">    
                        </div>                                            
                        
                        </div>
                        <h5 class="ITRtitle justify-content-center text-center shadow">FAMILY PROFILING</h5>
                        
                        <div class="col-md-3">
                          <label for="inputLastName" class="form-label">Date of Interview</label>
                          <input type="date" class="form-control" name="date_of_interview" id="inputLastName">
                        </div>
                        <div class="col-md-3">
                          <label for="inputFirstName" class="form-label">Interviewer</label>
                          <input type="text" class="form-control" name="interviewer" id="inputFirstName">
                        </div>
                        <div class="col-md-3">
                            <label for="inputMiddleName" class="form-label">Interviewee</label>
                            <input type="text" class="form-control" name="interviewee" id="inputMiddleName">
                          </div>
                        <div class="col-md-3">
                          <label for="inputSuffix" class="form-label">Barangay</label>
                          <input type="text" class="form-control" name="barangay" id="inputSuffix">
                        </div>
                        <div class="col-md-2">
                            <label for="inputSex" class="form-label">Residence</label>
                            <select id="inputSex" name="residence" class="form-select">
                            <option value="Male">Permanent</option>
                            <option value="Female">Present</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="inputresidencylenght" class="form-label">Lenght of Residency(mos/yrs.)</label>
                            <input type="text" class="form-control" name="residencylenght" id="inputresidencylenght" placeholder="1234 Main St">
                        </div>
                        <div class="col-5">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Prima Care Provider</label>
                            <input type="text" class="form-control" name="primarycareprovider" id="inputZip">
                        </div>
                        <div class="col-3">
                            <label for="inputContactNo" class="form-label">Primary Care No.</label>
                            <input type="text" class="form-control" name="primarycareno" id="inputContactNo">
                        </div>
                        <div class="col-md-2">
                            <label for="inputtraveltime" class="form-label">Travel time (min)</label>
                            <input type="text" class="form-control" name="traveltime" id="inputtraveltime">
                        </div> 
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Mode of Transportation (specify)</label>
                            <input type="text" class="form-control" name="mode_of_transportation" id="inputAge">
                        </div> 
                        <h4 class="ITRtitle justify-content-center text-center shadow">I. Assesment of the Family, Home and Environmental Conditions</h4>
                        
                        <div id="dynamic_field">
                        <div class="FProfile row">
                        <div class="col-sm-2">
                            <label for="inputfamilymember" class="form-label">Family Member</label>
                            <input type="text" class="form-control mt-4" name="familymember[]" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <label for="inputfamilyposition" class="form-label ">Family Position</label>
                          <input type="text"  style="width: 5rem;" class="form-control mt-4"  name="familyposition[]" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <label for="inputsex" class="form-label">Sex</label>
                            <select id="inputsex" name="sex[]" class="form-select mt-4"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputbirthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control mt-4" name="birthday[]" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <label for="inputmaritalstatus" class="form-label">Marital status</label>
                            <select id="inputmaritalstatus" name="maritalstatus[]" class="form-select">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <label for="inputBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" name="bloodtype[]" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <label for="inputdisability" class="form-label">Disability</label>
                            <input type="text" class="form-control mt-4" name="disability[]" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <label for="inputEducationAttainment" class="form-label">Educational Attainment</label>
                            <select id="inputEducationAttainment" name="educationalattainment[]" class="form-select">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <label for="inputoccupation" class="form-label">Occupation</label>
                            <input type="text" class="form-control mt-4" name="occupation[]" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <label for="inputcontactno" class="form-label">Contact No.</label>
                            <input type="text" class="form-control mt-4" name="contactno[]" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <label for="inputreligion" class="form-label">Religion</label>
                            <select id="inputreligion" name="religion[]" class="form-select mt-4">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <label for="inputNHIP" class="form-label">NHIP</label>
                            <select id="inputNHIP" name="nhip[]" class="form-select mt-4">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        <div class="col" style="width: .5rem; margin-left: -22.5px;">
                                        <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                                    </div>
                        </div>
                        </div>
                        <h4 class="ITRtitle">B.Home and Environment</h4>
                        <h4 class="ITRtitle">1. Home</h4>
                        <div class="col-md-2">
                            <label for="inputownership" class="form-label">Ownership</label>
                            <select id="inputownership" name="ownership" class="form-select">
                            <option>Owned</option>
                            <option>Rented</option>
                            <option>others</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputownershipother" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" name="ownershipother" id="inputownershipother">
                        </div>
                        <div class="col-md-2">
                            <label for="inputtypeconmat" class="form-label">Type of construction Material</label>
                            <select id="inputtypeconmat" name="typeconmat" class="form-select">
                            <option>Light</option>
                            <option>Strong</option>
                            <option>Mixed</option>
                            <option>Others</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputtypeconsmat" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" name="typeconsmat" id="inputtypeconsmat">
                        </div>
                        <div class="col-md-2">
                            <label for="inputlightingfaci" class="form-label">Lighting Facilities</label>
                            <select id="inputlightingfaci" name="lightfaci" class="form-select">
                            <option>Electricity</option>
                            <option>Kerosene</option>
                            <option>others</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputotherspecify" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" name="lightingfaciothers" id="inputotherspecify">
                        </div>
                        <h4 class="ITRtitle">2. Water Supply</h4>
                        <div class="col-md-2">
                            <label for="inputsource" class="form-label">Source</label>
                            <select id="inputsource" name="source" class="form-select">
                            <option>level I(Point Source) </option>
                            <option>level II(Communal or Stand Posts)</option>
                            <option>level III(Waterworks System or Individual House Connection)</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputstorage" class="form-label">Storage</label>
                            <select id="inputstorage" name="storage" class="form-select">
                            <option>none (direct from faucet)</option>
                            <option>covered container</option>
                            <option>Uncovered container</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputdrinking" class="form-label">Use for Drinking</label>
                            <select id="inputdrinking" name="usedfordrinking" class="form-select">
                            <option>yes</option>
                            <option>no</option>
                            <option>both</option>
                            <option>others(where?)</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputothers" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" name="useddrinkingothers" id="inputothers">
                        </div>
                        <h4 class="ITRtitle">3. Waste Disposal</h4>
                        <h5 class="ITRtitle">A. Refuse and Garbage</h5>
                        <div class="col-md-2">
                            <label for="inputcontainer" class="form-label">Container</label>
                            <select id="inputcontainer" name="container" class="form-select">
                            <option>Covered</option>
                            <option>Uncovered</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputsegregated" class="form-label">Segregated</label>
                            <select id="inputsegregated" name="segregated" class="form-select">
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputmethodisposal" class="form-label">Method of Disposal</label>
                            <select id="inputmethodisposal" name="methodisposal" class="form-select">
                            <option>Hog Feeding</option>
                            <option>Open Burning</option>
                            <option>Open Dumping</option>
                            <option>Burial Pit</option>
                            <option>Composting</option>
                            <option>Garbage Collection</option>
                            </select>
                        </div>
                        <h5 class="ITRtitle">B. Toilet Type</h5>
                        <div class="col-md-2">
                            <label for="inputtoilettype" class="form-label">Toilet Type</label>
                            <select id="inputtoilettype" name="toilet" class="form-select">
                            <option>Sanitary</option>
                            <option>Unsanitary</option>
                            <option>None</option>
                            </select>
                        </div>

                         <!-- ///////////////////DOMESTIC ANIMALS TABLE ///////////////////////-->
                         <h4 class="ITRtitle">4. Domestic Animals</h4>
                        <div id="dynamic_field2">
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <label for="inputkindtype" class="form-label">Kind/Type</label>
                            <input type="text" class="form-control mt-4" name="kindtype1[]" id="inputkindtype">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <label for="inputnumber" class="form-label ">Number</label>
                          <input type="number" class="form-control mt-4"  name="number1[]" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnounvaccinated" class="form-label">No. of Unvaccinated</label>
                            <input type="number" class="form-control" name="nounvaccinated1[]" id="inputnounvaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnovaccinated" class="form-label">No. of Vaccinated</label>
                            <input type="number" class="form-control mt-4" name="novaccinated1[]" id="inputnovaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnoinside" class="form-label">(Where Kept)No. Inside</label>
                            <input type="number" class="form-control" name="noinside1[]" id="inputnoinside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnooutside" class="form-label">(Where Kept)No. Outside</label>
                            <input type="number" class="form-control" name="nooutside1[]" id="inputnooutside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnocaged" class="form-label">(Where Kept)No. Caged</label>
                            <input type="number" class="form-control" name="nocaged1[]" id="inputnocaged">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnouncaged" class="form-label">(Where Kept)No. Uncaged</label>
                            <input type="number" class="form-control" name="nouncaged1[]" id="inputnouncaged">
                        </div>
                        <div class="col" style="width: .5rem; margin-left: -22.5px;">
                                <button type="button" name="add" id="add1" class="btn btn-success">+</button>
                        </div>
                        </div>
                        </div>

                        <!-- ///////////////////Health and Condiyitions TABLE ///////////////////////-->
                      <h4 class="ITRtitle justify-content-center text-center">II. Health and Condition and Problem Sheet</h4>
                        <div id="dynamic_field3">
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <label for="inputfamilymembercondition" class="form-label">Family Member with Health Condition</label>
                            <input type="text" class="form-control" name="familymembercondition1[]" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2"  style="width: 12rem; margin-left: -20px;">
                          <label for="inputfamilyhistory" class="form-label ">Family History</label>
                          <input type="text" class="form-control mt-4"  name="familyhistory1[]" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 12rem; margin-left: -15px;">
                            <label for="inputhealthcondition" class="form-label">Health Condition/Problem</label>
                            <input type="text" class="form-control" name="healthcondition1[]" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-2" style="width: 13rem; margin-left: -15px;">
                            <label for="inputdiagnostictreatment" class="form-label">Diagnostic and Treatment Regimen</label>
                            <input type="text" class="form-control " name="diagnostictreatment[]" id="inputdiagnostictreatment">
                        </div>
                        <div class="col-sm-2" style="width: 14rem; margin-left: -15px;">
                            <label for="inputinterventionactiontaken" class="form-label">Interventions Needed & Actions Taken</label>
                            <input type="text" class="form-control" name="interventionactiontaken1[]" id="inputinterventionactiontaken">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnonemergency" class="form-label">Non-Emergency</label>
                            <input type="text" class="form-control mt-4" name="nonemergency1[]" id="inputnonemergency">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputemergency" class="form-label">Emergency</label>
                            <input type="text" class="form-control mt-4" name="emergency1[]" id="inputemergency">
                        </div>
                        <div class="col" style="width: .5rem; margin-left: -22.5px;">
                                <button type="button" name="add" id="add2" class="btn btn-success">+</button>
                        </div>
                        </div>
                        </div>
                        <h6>*Determine the health facility where the entire family shall be macthed for non-emergency and emergency cases</h6>


                        <!-- ///////////////////Immunization Part ///////////////////////-->
                        <h4 class="ITRtitle justify-content-center text-center"></h4>
                        <div id="dynamic_field4">
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-4">
                            <label for="inputnamefamilymember" class="form-label">Name of Family Member</label>
                            <input type="text" class="form-control mt-4" name="namefamilymember1[]" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <label for="inputimmunizationcoverage" class="form-label ">*Immunization Coverag < 5y/o</label>
                          <select id="inputimmunizationcoverage" name="immunizationcoverage1[]" class="form-select mt-4">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <label for="inputlastvaccine" class="form-label">Remarks(lastvaccine recieved,dose,date)</label>
                            <input type="text" class="form-control mt-4" name="lastvaccine1[]" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <label for="inputimmunization" class="form-label ">*Immunization Coverag > 5y/o, Pregnant, Senior Citizen</label>
                          <select id="inputimmunization" name="immunization1[]" class="form-select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <label for="inputallvaccine" class="form-label">Remarks(allvaccine recieved,dose,date)</label>
                            <input type="text" class="form-control mt-4" name="allvaccine1[]" id="inputallvaccine">
                        </div>
                        <div class="col" style="width: .5rem; margin-left: -22.5px;">
                                <button type="button" name="add" id="add3" class="btn btn-success">+</button>
                        </div>
                        </div>
                        </div>
                        <h6>Tick appropriate comlumn: <,> 5y/o-if incomplete, indicate last vaccine recieved on the remarks column</h6>

                        <div class="col-6 mt-5 mb-5">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
   
                    </form>
              </div>
            </div>

                
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
   </div>
  
                


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                var i = 1;
                $('#add').click(function () {
                    i++;
                    $('#dynamic_field').append('<div class="FProfile row" id="row' + i + '"> <div class="col-sm-2"><input type="text" class="form-control mt-1" name="familymember[]" id="inputfamilymember"></div> <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;"><input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition[]" id="inputfamilyposition"></div> <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;"><select id="inputsex" name="sex[]" class="form-select mt-1"  style="width: 4rem;"><option>F</option><option>M</option></select></div> <div class="col-sm-2" style="width: 10rem; margin-left: -15px;"><input type="date" class="form-control mt-1" name="birthday[]" id="inputbirthday"></div> <div class="col-sm-2" style="width: 6rem; margin-left: -20px;"><select id="inputmaritalstatus" name="maritalstatus[]" class="form-select mt-1"><option>S</option><option>W</option><option>Sep</option><option>CL</option></select></div> <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="bloodtype[]" id="inputBloodType"></div> <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="disability[]" id="inputdisability"> </div> <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;"><select id="inputEducationAttainment" name="educationalattainment[]" class="form-select mt-1"><option>No Formal Education</option><option>Elementary</option><option>HighSchool</option><option>Vocational</option><option>College</option><option>Post Graduate</option></select></div> <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="occupation[]" id="inputoccupation"></div> <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="contactno[]" id="inputcontactno"></div> <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;"><select id="inputreligion" name="religion[]" class="form-select mt-1"><option>Roman Catholic</option><option>Iglesia</option><option>Born Again</option><option>Muslim</option><option>Seven Adventist</option><option>Others</option></select></div> <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;"><select id="inputNHIP" name="nhip[]" class="form-select mt-1"><option>write direct</option> <option>indirect</option><option>dependent</option><option>non-member</option> </select></div>  <div class="col" style="width: .1rem; margin-left: -22.5px;"> <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div>         </div>');
                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });

                $('#add1').click(function () {
                    i++;
                    $('#dynamic_field2').append('<div class="FProfile row" id="row' + i + '"><div class="col-sm-2 mt-1"> <input type="text" class="form-control" name="kindtype1[]" id="inputkindtype"> </div> <div class="col-sm-2 mt-1"  style="width: 10rem; margin-left: -20px;"><input type="number" class="form-control"  name="number1[]" id="inputfamilyposition"></div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"> <input type="number" class="form-control" name="nounvaccinated1[]" id="inputnounvaccinated"></div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"> <input type="number" class="form-control" name="novaccinated1[]" id="inputnovaccinated"></div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"><input type="number" class="form-control" name="noinside1[]" id="inputnoinside"></div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"><input type="number" class="form-control" name="nooutside1[]" id="inputnooutside"> </div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"> <input type="number" class="form-control" name="nocaged1[]" id="inputnocaged"></div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"><input type="number" class="form-control" name="nouncaged1[]" id="inputnouncaged"></div> <div class="col" style="width: .1rem; margin-left: -22.5px;"><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button> </div>         </div>');
                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });

                $('#add2').click(function () {
                    i++;
                    $('#dynamic_field3').append('<div class="FProfile row" id="row' + i + '"> <div class="col-sm-2 mt-1"><input type="text" class="form-control" name="familymembercondition1[]" id="inputfamilymembercondition"></div> <div class="col-sm-2 mt-1"  style="width: 12rem; margin-left: -20px;"><input type="text" class="form-control"  name="familyhistory1[]" id="inputfamilyposition"></div> <div class="col-sm-2 mt-1" style="width: 12rem; margin-left: -15px;"><input type="text" class="form-control" name="healthcondition1[]" id="inputhealthcondition"></div> <div class="col-sm-2 mt-1" style="width: 13rem; margin-left: -15px;"><input type="text" class="form-control" name="diagnostictreatment1[]" id="inputdiagnostictreatment"></div> <div class="col-sm-2 mt-1" style="width: 14rem; margin-left: -15px;"><input type="text" class="form-control" name="interventionactiontaken1[]" id="inputinterventionactiontaken"></div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"> <input type="text" class="form-control" name="nonemergency1[]" id="inputnonemergency"> </div> <div class="col-sm-2 mt-1" style="width: 10rem; margin-left: -15px;"><input type="text" class="form-control" name="emergency1[]" id="inputemergency"></div>   <div class="col" style="width: .1rem; margin-left: -22.5px;"><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button> </div> </div>');
                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });

                $('#add3').click(function () {
                    i++;
                    $('#dynamic_field4').append('<div class="FProfile row" id="row' + i + '"> <div class="col-sm-2 mt-1"><input type="text" class="form-control" name="namefamilymember1[]" id="inputnamefamilymember"></div><div class="col-sm-2 mt-1" style="width: 12rem;"><select id="inputimmunizationcoverage" name="immunizationcoverage1[]" class="form-select"><option>Select</option><option>Incomplete</option><option>Fully</option><option>Completely</option></select></div><div class="col-sm-3 mt-1"><input type="text" class="form-control" name="lastvaccine1[]" id="inputlastvaccine"></div><div class="col-sm-2 mt-1"><select id="inputimmunization" name="immunization1[]" class="form-select"><option>Select</option><option>Yes</option><option>No</option></select></div><div class="col-sm-3 mt-1"><input type="text" class="form-control" name="allvaccine1[]" id="inputallvaccine"></div>    <div class="col" style="width: .1rem; margin-left: -22.5px;"><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button> </div> </div>');
                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });

            });
        </script>

<!-- ALL FIELD WILL BE SAME TYPE -->
  <!-- <script>
  var $input6 = document.getElementById('SPNfamilyserial6');
  var $input5 = document.getElementById('Immfamilyserial5');
  var $input4 = document.getElementById('HCPfamilyserial4');
  var $input3 = document.getElementById('dafamilyserial3');
  var $input2 = document.getElementById('AFHEfamilyserial2');
  var $input1 = document.getElementById('familyserial1');
  $input1.addEventListener('keyup', function()
  {
    $input2.value = $input1.value;
    $input3.value = $input1.value;
    $input4.value = $input1.value;
    $input5.value = $input1.value;   
    $input6.value = $input1.value;  
  });
  </script> -->
</body>
</html>






                               
                        




















