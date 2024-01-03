<?php
include 'config.php';
?>
<?php
// $name = $_POST["name"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO users(name, email, password) VALUES ('$name','$email','$password');";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

header("location: http://localhost/Final%20Project/regisform.php");
mysqli_close($conn);
?>