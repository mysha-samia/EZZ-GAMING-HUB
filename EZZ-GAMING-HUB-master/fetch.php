<?php
//sleep(1);
include ("config.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM filter WHERE genre = '$request'";
    $result = mysqli_query($conn , $query);
    $count = mysqli_num_rows($result);

?>

<table class="table ">
    <?php

    if($count){

    ?>
    <thead>
        <tr>
          
            <th> Name </th>
            <th> Genre </th>
            <th> Image</th>

        </tr>

        <?php
    }
    else{
        echo"Sorry!";

    }   
    
        ?>
    
    </thead>
    <tbody>
         <?php
        while($row = mysqli_fetch_assoc($result)){

            
         ?>

            <tr>
            
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['genre'] ?></td>
                    <td><img src="uploaded_img/<?php echo $row['image'] ?>" class="img-responsive img-thumbnail" width="150"></td>
            
                
                
            </tr>

            <?php
        }   
            ?>
    </tbody>
</table>

<?php
}
?>