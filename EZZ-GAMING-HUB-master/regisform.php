<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div class="contact-form">
        <h1>Registration</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="name"   class="form-control" placeholder="Enter First Name"> <br><br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br><br>
           <input type="text" name="password"  class="form-control" placeholder="Enter Password"><br> <br>
           <input type="submit" class="form-control submit" value="Register" >
       </form>
    </div>
</body>
</html>