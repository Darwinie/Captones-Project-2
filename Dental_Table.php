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
    <script src="//code.jquery.com/jquery-1.10.2js"></script>
</head>
<body>

  <!-- ///////////////////////////////////////////////////////////////////////////////
                            CONTENT SECTION
  //////////////////////////////////////////////////////////////////////////////// -->
    <!-- DENTAL TABLE -->
  
    <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
              <div class="col-sm-6">
                 <h2>List of Dental <b>Patients</b></h2>
              </div>
              <div class="col-sm-6">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
             </div>
        <div class="tables border shadow border-3 mt-3 mb-5">
        <table class="table">
            <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
            <tbody>
                <tr>
                        <td>1</td>
                        <td>Low</td>
                        <td>Key</td>
                        <td>Male</td>
                        <td>27</td>
                        <td>low.key@gmail.com</td>
                        <td>+673668292</td>
                        <td>NewyorkUSA</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='update'>Update</a>
                            <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                        </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Low</td>
                      <td>Key</td>
                      <td>Male</td>
                      <td>27</td>
                      <td>low.key@gmail.com</td>
                      <td>+673668292</td>
                      <td>NewyorkUSA</td>
                      <td>
                          <a class='btn btn-primary btn-sm' href='update'>Update</a>
                          <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                      </td>
                  </tr>  
                  <tr>
                    <td>3 </td>
                    <td>Low</td>
                    <td>Key</td>
                    <td>Male</td>
                    <td>27</td>
                    <td>low.key@gmail.com</td>
                    <td>+673668292</td>
                    <td>NewyorkUSA</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                    </td>
                </tr>    
            </tbody>
        </table>
      </div>
      </div>
     </div>
    </div>
    

  </section> 
   
    <!--FOR SIDE BAR-->
    <script src="js/JS_tables.js"></script>
    <script src="js/JS_Reports.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


