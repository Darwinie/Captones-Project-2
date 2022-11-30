


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
  
                
  <!-- FOR PATIENTS RECORD GENERAL -->
  <div class="container-sm mt-5">

            <div class="card">
                <div class="card-body">
                    
                    <form class="row g-3 mt-4" name="theform" action="updateTBDOTS.php" method="post">
                    <div class="row">
                      <div class="col-md-3">  
                                     
                        </div> 
                        <div class="col-md-3">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial1">    
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
                        <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="AFHEfamilyserial2" readonly='readonly'>    
                        </div>  
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <label for="inputfamilymember" class="form-label">Family Member</label>
                            <input type="text" class="form-control mt-4" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <label for="inputfamilyposition" class="form-label ">Family Position</label>
                          <input type="text"  style="width: 5rem;" class="form-control mt-4"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <label for="inputsex" class="form-label">Sex</label>
                            <select id="inputsex" name="sex" class="form-select mt-4"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputbirthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control mt-4" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <label for="inputmaritalstatus" class="form-label">Marital status</label>
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <label for="inputBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <label for="inputdisability" class="form-label">Disability</label>
                            <input type="text" class="form-control mt-4" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <label for="inputEducationAttainment" class="form-label">Educational Attainment</label>
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select">
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
                            <input type="text" class="form-control mt-4" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <label for="inputcontactno" class="form-label">Contact No.</label>
                            <input type="text" class="form-control mt-4" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <label for="inputreligion" class="form-label">Religion</label>
                            <select id="inputreligion" name="religion" class="form-select mt-4">
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
                            <select id="inputNHIP" name="nhip" class="form-select mt-4">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial3" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 2nd row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial4" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 3rd row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial5" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 4th row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial6" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 5th row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial7" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 6th row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial8" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 7th row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="familyserial9" readonly='readonly'>    
                        </div>  -->
                        <!-- ///////////////////FOR 8th row of Family members ///////////////////// -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;">
                            <select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;">
                              <option>F</option>
                              <option>M</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="date" class="form-control mt-1" name="birthday" id="inputbirthday">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -20px;">
                            <select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1">
                              <option>S</option>
                              <option>W</option>
                              <option>Sep</option>
                              <option>CL</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="disability" id="inputdisability">
                        </div>
                        <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;">
                            <select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1">
                              <option>No Formal Education</option>
                              <option>Elementary</option>
                              <option>HighSchool</option>
                              <option>Vocational</option>
                              <option>College</option>
                              <option>Post Graduate</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="occupation" id="inputoccupation">
                        </div>
                        <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;">
                            <input type="text" class="form-control mt-1" name="contactno" id="inputcontactno">
                        </div>
                        <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;">
                            <select id="inputreligion" name="religion" class="form-select mt-1">
                              <option>Roman Catholic</option>
                              <option>Iglesia</option>
                              <option>Born Again</option>
                              <option>Muslim</option>
                              <option>Seven Adventist</option>
                              <option>Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;">
                            <select id="inputNHIP" name="nhip" class="form-select mt-1">
                              <option>write direct</option>
                              <option>indirect</option>
                              <option>dependent</option>
                              <option>non-member</option>
                            </select>
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
                          <label for="inputlightfac" class="form-label">Others(specify)</label>
                          <input type="text" class="form-control" name="useddrinkingothers" id="inputlightfac">
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
                            <select id="inputtoilettype" name="toilettype" class="form-select">
                            <option>Sanitary</option>
                            <option>Unsanitary</option>
                            <option>None</option>
                            </select>
                        </div>
                        
                        <!-- ///////////////////DOMESTIC ANIMALS TABLE ///////////////////////-->
                        <h4 class="ITRtitle">4. Domestic Animals</h4>
                        <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="DAfamilyseriald" id="dafamilyserial3" readonly='readonly'>    
                        </div>  
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <label for="inputkindtype" class="form-label">Kind/Type</label>
                            <input type="text" class="form-control mt-4" name="kindtype1" id="inputkindtype">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <label for="inputnumber" class="form-label ">Number</label>
                          <input type="number" class="form-control mt-4"  name="number1" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnounvaccinated" class="form-label">No. of Unvaccinated</label>
                            <input type="number" class="form-control" name="nounvaccinated1" id="inputnounvaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnovaccinated" class="form-label">No. of Vaccinated</label>
                            <input type="number" class="form-control mt-4" name="novaccinated1" id="inputnovaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnoinside" class="form-label">(Where Kept)No. Inside</label>
                            <input type="number" class="form-control" name="noinside1" id="inputnoinside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnooutside" class="form-label">(Where Kept)No. Outside</label>
                            <input type="number" class="form-control" name="nooutside1" id="inputnooutside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnocaged" class="form-label">(Where Kept)No. Caged</label>
                            <input type="number" class="form-control" name="nocaged1" id="inputnocaged">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnouncaged" class="form-label">(Where Kept)No. Uncaged</label>
                            <input type="number" class="form-control" name="nouncaged1" id="inputnouncaged">
                        </div>
                        </div>

                        <!--////////////////////// Number 2 row DA ////////////////////////////////////-->
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="dafamilyserial1" readonly='readonly'>    
                        </div>   -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="kindtype2" id="inputkindtype">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="number" class="form-control mt-1"  name="number2" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nounvaccinated2" id="inputnounvaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="novaccinated2" id="inputnovaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="noinside2" id="inputnoinside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nooutside2" id="inputnooutside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nocaged2" id="inputnocaged">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nouncaged2" id="inputnouncaged">
                        </div>
                        </div>

                        <!--////////////////////// Number 3 row DA ////////////////////////////////////-->
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="dafamilyserial1" readonly='readonly'>    
                        </div>   -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="kindtype3" id="inputkindtype">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="number" class="form-control mt-1"  name="number3" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nounvaccinated3" id="inputnounvaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="novaccinated3" id="inputnovaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="noinside3" id="inputnoinside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nooutside3" id="inputnooutside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nocaged3" id="inputnocaged">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nouncaged3" id="inputnouncaged">
                        </div>
                        </div>

                        <!--////////////////////// Number 4 row DA ////////////////////////////////////-->
                        <!-- <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="familyserial" id="dafamilyserial1" readonly='readonly'>    
                        </div>   -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="kindtype4" id="inputkindtype">
                        </div>
                        <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;">
                          <input type="number" class="form-control mt-1"  name="number4" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nounvaccinated4" id="inputnounvaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="novaccinated4" id="inputnovaccinated">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="noinside4" id="inputnoinside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nooutside4" id="inputnooutside">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nocaged4" id="inputnocaged">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="number" class="form-control mt-1" name="nouncaged4" id="inputnouncaged">
                        </div>
                        </div>

                      <!-- ///////////////////Health and Condiyitions TABLE ///////////////////////-->
                      <h4 class="ITRtitle justify-content-center text-center">II. Health and Condition and Problem Sheet</h4>
                        <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="DAfamilyseriald" id="HCPfamilyserial4" readonly='readonly'>    
                        </div>  
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <label for="inputfamilymembercondition" class="form-label">Family Member with Health Condition</label>
                            <input type="text" class="form-control" name="familymembercondition1" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2"  style="width: 12rem; margin-left: -20px;">
                          <label for="inputfamilyhistory" class="form-label ">Family History</label>
                          <input type="text" class="form-control mt-4"  name="familyhistory1" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 12rem; margin-left: -15px;">
                            <label for="inputhealthcondition" class="form-label">Health Condition/Problem</label>
                            <input type="text" class="form-control" name="healthcondition1" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-2" style="width: 13rem; margin-left: -15px;">
                            <label for="inputdiagnostictreatment" class="form-label">Diagnostic and Treatment Regimen</label>
                            <input type="text" class="form-control " name="diagnostictreatment1" id="inputdiagnostictreatment">
                        </div>
                        <div class="col-sm-2" style="width: 14rem; margin-left: -15px;">
                            <label for="inputinterventionactiontaken" class="form-label">Interventions Needed & Actions Taken</label>
                            <input type="text" class="form-control" name="interventionactiontaken1" id="inputinterventionactiontaken">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputnonemergency" class="form-label">Non-Emergency</label>
                            <input type="text" class="form-control mt-4" name="nonemergency1" id="inputnonemergency">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <label for="inputemergency" class="form-label">Emergency</label>
                            <input type="text" class="form-control mt-4" name="emergency1" id="inputemergency">
                        </div>
                        </div>
                          <!--////////////////////// Number 2 row HEALTH CONDTION AND PROBLEM ////////////////////////////////////-->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymembercondition2" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2"  style="width: 12rem; margin-left: -20px;">
                          <input type="text" class="form-control mt-1"  name="familyhistory2" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 12rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="healthcondition2" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-2" style="width: 13rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="diagnostictreatment2" id="inputdiagnostictreatment">
                        </div>
                        <div class="col-sm-2" style="width: 14rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="interventionactiontaken2" id="inputinterventionactiontaken">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="nonemergency2" id="inputnonemergency">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="emergency2" id="inputemergency">
                        </div>
                        </div>
                          <!--////////////////////// Number 3 row HEALTH CONDTION AND PROBLEM ////////////////////////////////////-->
                          <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymembercondition3" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2"  style="width: 12rem; margin-left: -20px;">
                          <input type="text" class="form-control mt-1"  name="familyhistory3" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 12rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="healthcondition3" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-2" style="width: 13rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="diagnostictreatment3" id="inputdiagnostictreatment">
                        </div>
                        <div class="col-sm-2" style="width: 14rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="interventionactiontaken3" id="inputinterventionactiontaken">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="nonemergency3" id="inputnonemergency">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="emergency3" id="inputemergency">
                        </div>
                        </div>
                          <!--////////////////////// Number 4 row HEALTH CONDTION AND PROBLEM ////////////////////////////////////-->
                          <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymembercondition4" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2"  style="width: 12rem; margin-left: -20px;">
                          <input type="text" class="form-control mt-1"  name="familyhistory4" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 12rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="healthcondition4" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-2" style="width: 13rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="diagnostictreatment4" id="inputdiagnostictreatment">
                        </div>
                        <div class="col-sm-2" style="width: 14rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="interventionactiontaken4" id="inputinterventionactiontaken">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="nonemergency4" id="inputnonemergency">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="emergency4" id="inputemergency">
                        </div>
                        </div>
                          <!--////////////////////// Number 5 row HEALTH CONDTION AND PROBLEM ////////////////////////////////////-->
                          <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="familymembercondition5" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2"  style="width: 12rem; margin-left: -20px;">
                          <input type="text" class="form-control mt-1"  name="familyhistory5" id="inputfamilyposition">
                        </div>
                        <div class="col-sm-2" style="width: 12rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="healthcondition5" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-2" style="width: 13rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="diagnostictreatment5" id="inputdiagnostictreatment">
                        </div>
                        <div class="col-sm-2" style="width: 14rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="interventionactiontaken5" id="inputinterventionactiontaken">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="nonemergency5" id="inputnonemergency">
                        </div>
                        <div class="col-sm-2" style="width: 10rem; margin-left: -15px;">
                            <input type="text" class="form-control mt-1" name="emergency5" id="inputemergency">
                        </div>
                        
                        </div>
                        
                        <!-- ///////////////////Immunization Part ///////////////////////-->
                        <h4 class="ITRtitle justify-content-center text-center"></h4>
                        <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="DAfamilyseriald" id="Immfamilyserial5" readonly='readonly'>    
                        </div>  
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-4">
                            <label for="inputnamefamilymember" class="form-label">Name of Family Member</label>
                            <input type="text" class="form-control mt-4" name="namefamilymember1" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <label for="inputimmunizationcoverage" class="form-label ">*Immunization Coverag < 5y/o</label>
                          <select id="inputimmunizationcoverage" name="immunizationcoverage1" class="form-select mt-4">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <label for="inputlastvaccine" class="form-label">Remarks(lastvaccine recieved,dose,date)</label>
                            <input type="text" class="form-control mt-4" name="lastvaccine1" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <label for="inputimmunization" class="form-label ">*Immunization Coverag > 5y/o, Pregnant, Senior Citizen</label>
                          <select id="inputimmunization" name="immunization1" class="form-select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3 mt-4">
                            <label for="inputallvaccine" class="form-label">Remarks(allvaccine recieved,dose,date)</label>
                            <input type="text" class="form-control mt-4" name="allvaccine1" id="inputallvaccine">
                        </div>
                        </div>
                         <!-- ///////////////////ROW 2 Immunization ///////////////////////-->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="namefamilymember2" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <select id="inputimmunizationcoverage" name="immunizationcoverage2" class="form-select mt-1">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="lastvaccine2" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <select id="inputimmunization" name="immunization2" class="form-select mt-1">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="allvaccine2" id="inputallvaccine">
                        </div>
                        </div>
                         <!-- ///////////////////ROW 3 Immunization ///////////////////////-->
                         <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="namefamilymember3" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <select id="inputimmunizationcoverage" name="immunizationcoverage3" class="form-select mt-1">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="lastvaccine3" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <select id="inputimmunization" name="immunization3" class="form-select mt-1">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="allvaccine3" id="inputallvaccine">
                        </div>
                        </div>
                         <!-- ///////////////////ROW 4 Immunization ///////////////////////-->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="namefamilymember4" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <select id="inputimmunizationcoverage" name="immunizationcoverage4" class="form-select mt-1">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="lastvaccine4" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <select id="inputimmunization" name="immunization2" class="form-select mt-1">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="allvaccine4" id="inputallvaccine">
                        </div>
                        </div>
                        <!-- ///////////////////ROW 5 Immunization ///////////////////////-->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="namefamilymember5" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <select id="inputimmunizationcoverage" name="immunizationcoverage5" class="form-select mt-1">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="lastvaccine5" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <select id="inputimmunization" name="immunization5" class="form-select mt-1">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="allvaccine5" id="inputallvaccine">
                        </div>
                        </div>
                        <!-- ///////////////////ROW 6 Immunization ///////////////////////-->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control mt-1" name="namefamilymember6" id="inputnamefamilymember">
                        </div>
                        <div class="col-sm-2" style="width: 12rem;">
                          <select id="inputimmunizationcoverage" name="immunizationcoverage6" class="form-select mt-1">
                            <option>Select</option>
                            <option>Incomplete</option>
                            <option>Fully</option>
                            <option>Completely</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="lastvaccine6" id="inputlastvaccine">
                        </div>
                        <div class="col-sm-2">
                          <select id="inputimmunization" name="immunization6" class="form-select mt-1">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-1" name="allvaccine6" id="inputallvaccine">
                        </div>
                        
                        </div>

                        <h4 class="ITRtitle">C. Service and Progress Notes</h4>
                        <div class="col-sm-2">
                            <label for="inputFamilySerial" class="form-label fw-bold">Family Serial Number</label>
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" class="form-control" name="DAfamilyseriald" id="SPNfamilyserial6" readonly='readonly'>    
                        </div>  
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2">
                            <label for="inputfamilymembercondition" class="form-label">Family Member with Health Condition</label>
                            <input type="text" class="form-control" name="familycondition1" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2">
                          <label for="inputdate" class="form-label mt-4">Date</label>
                          <input type="date" class="form-control"  name="date1" id="inputdate">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputhealthcondition" class="form-label mt-4">Health Condition/Problem</label>
                            <input type="text" class="form-control" name="healthcondition1" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-3">
                            <label for="inputobservation" class="form-label mt-4">Observation,Actions and Outcomes</label>
                            <input type="text" class="form-control" name="observation1" id="inputobservation">
                        </div>
                        <div class="col-sm-2">
                            <label for="inputhealthcareprovider" class="form-label">Name of Healthcare Provider</label>
                            <input type="text" class="form-control" name="healthcareprovider1" id="inputhealthcareprovider">
                        </div>
                        </div>
                        <!-- Row 2 Service and Progress Notes -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="familycondition2" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2 mt-1">
                          <input type="date" class="form-control"  name="date2" id="inputdate">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="healthcondition2" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="observation2" id="inputobservation">
                        </div>
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="healthcareprovider2" id="inputhealthcareprovider">
                        </div>
                        </div>
                        <!-- Row 3 Service and Progress Notes -->
                        <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="familycondition3" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2 mt-1">
                          <input type="date" class="form-control"  name="date3" id="inputdate">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="healthcondition3" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="observation3" id="inputobservation">
                        </div>
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="healthcareprovider3" id="inputhealthcareprovider">
                        </div>
                        </div>
                         <!-- Row 4 Service and Progress Notes -->
                         <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="familycondition4" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2 mt-1">
                          <input type="date" class="form-control"  name="date4" id="inputdate">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="healthcondition4" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="observation4" id="inputobservation">
                        </div>
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="healthcareprovider4" id="inputhealthcareprovider">
                        </div>
                        </div>
                         <!-- Row 5 Service and Progress Notes -->
                         <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="familycondition5" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2 mt-1">
                          <input type="date" class="form-control"  name="date5" id="inputdate">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="healthcondition5" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="observation5" id="inputobservation">
                        </div>
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="healthcareprovider5" id="inputhealthcareprovider">
                        </div>
                        </div>
                         <!-- Row 6 Service and Progress Notes -->
                         <div class="FProfile input-group-xs row">
                        <div class="col-sm-2 mt-1">
                            <input type="text" class="form-control" name="familycondition6" id="inputfamilymembercondition">
                        </div>
                        <div class="col-sm-2 mt-1">
                          <input type="date" class="form-control"  name="date6" id="inputdate">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="healthcondition6" id="inputhealthcondition">
                        </div>
                        <div class="col-sm-3 mt-1">
                            <input type="text" class="form-control" name="observation6" id="inputobservation">
                        </div>
                        <div class="col-sm-2 mt-1 mb-5">
                            <input type="text" class="form-control" name="healthcareprovider6" id="inputhealthcareprovider">
                        </div>
                        </div>
                        
                        <div class="col-6 mt-5 mb-5">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        
                        
                    </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <script>
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
  </script>
</body>
</html>
