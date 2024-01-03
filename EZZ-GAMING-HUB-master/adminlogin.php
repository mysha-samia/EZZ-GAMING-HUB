<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Login</title>
  </head>
  <body>
  <div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post">
            <span class="contact100-form-title">
                Admin Login
            </span>

            <div class="wrap-input100 validate-input" data-validate="Please enter username">
                <input class="input100" type="text" name="name" placeholder="Username" required>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter password">
                <input class="input100" type="text" name="password" placeholder="Password" required>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <input class="contact100-form-btn" type="submit" name="login" value="login">
            </div>
        </form>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
    
if(isset($_POST['login']))
{        
    $query = "SELECT * FROM `admin` WHERE `username`='$_POST[name]' AND `pass`='$_POST[password]'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['AdminName'] = $_POST['name'];
        header("location: http://localhost/Final%20Project/showOrder.php");
    }
    else{
        
        echo "<script> alert('Invalid Credentials'); </script>";
    }
}        

    ?>


  </body>
</html>