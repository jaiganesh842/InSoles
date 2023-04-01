<?php
session_start();
$conn = mysqli_connect('localhost','root','','insoles');
$query=mysqli_query($conn,"SELECT * from `wishlist` where `email`='$_SESSION[email]'; ");

$total_price = 0; // Initialize total price variable to 0

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wishlist</title>
    <style>
         body{
            background-color: rgb(242, 248, 248);
         }
         h3{
            font-family:cursive;
         }
         .sec{
            font-size:20px;
            border:none;
            background-color:rgba(0, 0, 0, 0);
         }
         .sec option{
            background-color:black;
            color:white;
         }
         .all{
            background-color:rgba(0, 0, 0, 0);
            font-family:cursive;
            border-radius:50px;
         }
         .all:hover{
            background-color:rgb(108, 203, 237);
            color: rgb(0, 0, 0);
         }
         .wip{
            text-align: center;
         }
         .center-text{
            text-align: center;
         }
    </style>
</head>
<body>
<h1 class="wip" >WELCOME TO WISHLIST</h1>
<?php

while($row=mysqli_fetch_array($query)){
    $id=$row['id'];
    $size=$row['size'];

    // Add the price of the current item to the total price
    $total_price += $row['price'];
    ?>

<?php
echo "<form method='post' action=''>";
echo "<div class='center-text'>";
echo "<h3 name='id'>Product_Id : "; echo  $row['id']; echo "</h3>";
echo "<h3>Product_Name : "; echo $row['product_name']; echo "</h3>";
echo "<h3>User_Id : "; echo $row['email']; echo "</h3>";
echo "<h3>Price : "; echo $row['price']; echo "</h3>";
echo "<h3>Your shoe size is : "; echo $row['size']; echo "</h3>";
echo "</div>";

echo "</form>";

?>
<div class='center-text'>
    <a href="deltwishlist.php?did=<?php echo $row['id']; ?>">  <button class='all' type="text/javascript"><?php echo 'Remove from wishlist'  ?></button></a>
    <a href="updatewishlist.php?did=<?php echo $row['id']; ?>">  <button class='all' type="text/javascript"><?php echo 'Update from wishlist'  ?></button></a>
    </div>

 <?php

   }

   // Print the total price
   echo "<div class='center-text'>";
   echo "<h3>Total Price: ".$total_price."</h3>";
   echo "</div>";
   ?>


<?php 
if(isset($_POST['update'])){

$update=mysqli_query($conn,"UPDATE `wishlist` SET `size`=$_POST[size] WHERE `id`=$_POST[id]");
echo "<meta http-equiv='refresh' content='0'>";
}
?>

</body>
</html>
