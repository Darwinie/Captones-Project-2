<?php
include_once("connections/connections.php");
$con = connection();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
  $sql = "SELECT * FROM user_accounts WHERE username = '$username' AND password = '$password'";
  $user = $con->query($sql) or die ($con->error);
  $row = $user->fetch_assoc();
  $total = $user->num_rows;

  if($total > 0){
    $_SESSION['username'] = $row['username'];
    $_SESSION['access'] = $row['access'];
    $_SESSION['loggedIn'] = true;

    echo header("Location: Adminhealthoffice.php");
  }else{
    $_SESSION["error"] = "Please check your username and password";
    // header("location: login.php");
  }
} else {
 if(isset($_SESSION['loggedIn']) == true){
    header("Location: Adminhealthoffice.php");
    exit;
    }
    // eto dinagdag ko din.
    // kasi pag nag home page tapos nag click ng login dapat hindi na mag lologin kasi naka login naman na sya.
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/loginstyle.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="heading">
            <h1>Login Form</h1>
        </div>
       <div class="form">
        <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span class='text-danger'>$error</span>";
                    }
                ?>  
            <form action="login.php" method="post">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username" id="username">
                </span><br>
                <span>
                   <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password">
                </span><br>
                    <button type="submit" name="login">login</button>
           </form>
       </div>
    </div>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>