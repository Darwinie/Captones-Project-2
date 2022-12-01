


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
                    
                    <form class="row g-3 mt-4" method="post" action="insert_familyprofiling.php">
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
                            <input type="text" class="form-control" name="familyserial[]" id="AFHEfamilyserial2" readonly='readonly'>    
                        </div>  
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
                        <div class="col" style="width: 7rem; margin-left: -22.5px;">
                                        <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                    </div>
                        </div>
                        </div>
                    


                        <div class="col-6 mt-5 mb-5">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        
                        
                        
                    </form>
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
                    $('#dynamic_field').append('<div class="FProfile row" id="row' + i + '"> <div class="col-sm-2"><input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember"></div> <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;"><input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition"></div> <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;"><select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;"><option>F</option><option>M</option></select></div> <div class="col-sm-2" style="width: 10rem; margin-left: -15px;"><input type="date" class="form-control mt-1" name="birthday" id="inputbirthday"></div> <div class="col-sm-2" style="width: 6rem; margin-left: -20px;"><select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1"><option>S</option><option>W</option><option>Sep</option><option>CL</option></select></div> <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType"></div> <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="disability" id="inputdisability"> </div> <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;"><select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1"><option>No Formal Education</option><option>Elementary</option><option>HighSchool</option><option>Vocational</option><option>College</option><option>Post Graduate</option></select></div> <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="occupation" id="inputoccupation"></div> <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="contactno" id="inputcontactno"></div> <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;"><select id="inputreligion" name="religion" class="form-select mt-1"><option>Roman Catholic</option><option>Iglesia</option><option>Born Again</option><option>Muslim</option><option>Seven Adventist</option><option>Others</option></select></div> <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;"><select id="inputNHIP" name="nhip" class="form-select mt-1"><option>write direct</option> <option>indirect</option><option>dependent</option><option>non-member</option> </select></div>  <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div>         </div>');
                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });

            });
        </script>

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







                        
<!-- <div class="col-sm-2"><input type="text" class="form-control mt-1" name="familymember" id="inputfamilymember"></div> <div class="col-sm-2"  style="width: 10rem; margin-left: -20px;"><input type="text"  style="width: 5rem;" class="form-control mt-1"  name="familyposition" id="inputfamilyposition"></div> <div class="col-sm-2"  style="width: 5rem; margin-left: -50px;"><select id="inputsex" name="sex" class="form-select mt-1"  style="width: 4rem;"><option>F</option><option>M</option></select></div> <div class="col-sm-2" style="width: 10rem; margin-left: -15px;"><input type="date" class="form-control mt-1" name="birthday" id="inputbirthday"></div> <div class="col-sm-2" style="width: 6rem; margin-left: -20px;"><select id="inputmaritalstatus" name="maritalstatus" class="form-select mt-1"><option>S</option><option>W</option><option>Sep</option><option>CL</option></select></div> <div class="col-sm-2" style="width: 5.5rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="bloodtype" id="inputBloodType"></div> <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="disability" id="inputdisability"> </div> <div class="col-sm-2" style="width: 8rem; margin-left: -22.5px;"><select id="inputEducationAttainment" name="educationalattainment" class="form-select mt-1"><option>No Formal Education</option><option>Elementary</option><option>HighSchool</option><option>Vocational</option><option>College</option><option>Post Graduate</option></select></div> <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="occupation" id="inputoccupation"></div> <div class="col-sm-2" style="width: 9rem; margin-left: -22.5px;"><input type="text" class="form-control mt-1" name="contactno" id="inputcontactno"></div> <div class="col-sm-2" style="width: 6rem; margin-left: -22.5px; fontweight: 0.5px;"><select id="inputreligion" name="religion" class="form-select mt-1"><option>Roman Catholic</option><option>Iglesia</option><option>Born Again</option><option>Muslim</option><option>Seven Adventist</option><option>Others</option></select></div> <div class="col-sm-2" style="width: 7rem; margin-left: -22.5px;"><select id="inputNHIP" name="nhip" class="form-select mt-1"><option>write direct</option> <option>indirect</option><option>dependent</option><option>non-member</option> </select></div> -->