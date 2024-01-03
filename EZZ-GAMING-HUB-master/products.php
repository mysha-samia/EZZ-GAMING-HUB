<?php
include 'config.php';

if(isset($_POST['add_to_cart'])){
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;
   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'The product is already in the cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, qty) VALUES('$product_name', '$product_price','$product_image', '$product_quantity')");
      $message[] = 'Successfully added';
   }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        <?php include 'css/slick.css'; ?>
        <?php include 'css/slick-theme.css'; ?>
        /*  */
        <?php include 'css/page.css'; ?>
    </style>
  </head>
  <body>

    <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>



<section class="products">

   <h1 class="heading">Buy your favourite games</h1>
   <div class="container">
        <div class="shopBox">

            <?php
            
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>
            <?php 
            // $image = ;
            ?>
            <form action="" method="post">
                <div class="shopbox-contents">
                    <?php
                     
                     
                    ?>
                    
                    <div class="fetchImg">
                    <?php echo '<img src="data:image;base64,'.base64_encode($fetch_product['image']).'" alt="" style="width:100%;">'; ?></h3>
                    </div>
                    
                    <div class="name"><h4><?php echo $fetch_product['name']; ?></h4></div>
                    <div class="price"><h3>$<?php echo $fetch_product['price']; ?></h3></div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo '<img src="data:image;base64,'.base64_encode($fetch_product['image']).' " alt="" style="width:100px;height=100px;' ?>">
                    <input type="submit" class="btn" value="ADD" name="add_to_cart">
                </div>
            </form>

            <?php
                };
            };
            ?>

        </div>
   </div>
</section>


<!-- footer section starts  -->

<?php include 'footer.php'; ?>

<!-- footer section ends -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>