<?php
    include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A Product</title>
    <link rel="stylesheet" href="css/addproductstyle.css">
</head>

<body>

<?php
    include 'adminnavbar.php';
?>
<?php
	$img=$_POST['img']; 
	$pName=$_POST['product_name'];
	$price=$_POST['product_price'];
	$des=$_POST['product_description'];
	$cat=$_POST['product_category'];
	
	
	$statement="INSERT INTO products(name,image,price,product_details) 
    VALUES('$pName', '$img','$price','$des')";
	if(mysqli_query($conn,$statement)){
		session_start();
        echo "<script> alert('Product Added'); </script>";
	}
    
	mysqli_close($conn);


?>  
<div class="container">
    <h2>Add A Product</h2>
    <form action="addProduct.php" method="post">
        <fieldset>
            <legend>Product Name</legend>
            <input type="text" id="product-name" name="product_name" required>
        </fieldset>
        <fieldset>
        <legend>Product Price</legend>
            <input type="number" id="product-price" name="product_price" min="0" step="0.01" required>
            </fieldset>
        <fieldset>
        <legend>Description</legend>
            <textarea id="product-description" name="product_description" rows="5" cols="30" required></textarea>
            </fieldset>
        <fieldset>
        <legend>Product Category</legend>
            <select id="product-category" name="product_category">
                <option value="electronics">Gaming Electronics</option>
                <option value="games">Games</option>
            </select>
            </fieldset>
        <fieldset>
        <legend>Product Image</legend>
            <input type="file" id="img" name="img" accept="image/*">
            </fieldset>  
        <input id="submit" type="submit" value="Add Product">
    </form>
</div>
    
</body>

</html>


