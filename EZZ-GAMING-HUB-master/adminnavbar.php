<?php 
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="headerstyle.css">
</head>
<body>
    <nav>
        <ul>
          <li><a href="showOrder.php">Orders</a></li>
          <li><a href="addProduct.php">Add Product</a></li>
          <li><form method="post">
      <input type="submit" name="logout" value="Log out">
</form></li>
        </ul>
      </nav>

<?php
    if(isset($_POST['logout']))
    {        
         header("location: http://localhost/Final%20Project/adminlogin.php");
        }
        ?>
</body>
</html>