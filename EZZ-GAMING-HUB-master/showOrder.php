<?php
include 'config.php';
session_start();
$statement="select * from orders";
$result=mysqli_query($conn, $statement);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="css/showorderstyle.css">
    <link rel="stylesheet" href="css/headerstyle.css">
</head>
<body>
<?php
    include 'adminnavbar.php';
?>
<?php
echo "<h2>Recent Orders</h2>";

echo "<table>";
echo "<tr>
    <th>Name</th>
    <th>Number</th>
    <th>Email</th>
    <th>Method</th>
    <th>Address</th>
    <th>Total Price</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['number'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['method'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['total_price'] . "</td>";
    // echo "<td>" . $row['qty'] . "</td>";
    echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
  
 ?>


</body>
</html>