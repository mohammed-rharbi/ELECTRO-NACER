<?php

session_start();
include_once 'connect/connect.php';

$conn = new mysqli($servername, $user, $pass, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
 
    $_SESSION['username'] = $username;
    header("Location:products.php");
    exit();
  } else {

    $error = "Invalid username or password";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>


    

<section id="sic">
  <form action="" method = "post" id="formi" >
    <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5 mt-5 text-white">login</h2>
          
            <div class="form-outline mb-5">
              <input type="text" name= "username" class="form-control text-black" placeholder="user name" id="username">
            </div>
    
            <div class="form-outline mb-4">
              <input type="password" name= "password"; class="form-control text-black" placeholder="user password" id="password">
            </div>
    
            <button type="submit" value = "login" class="btn btn-primary btn-block mt-5" id="btn">
              login
            </button>
        </div>
    </div>
</form>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>