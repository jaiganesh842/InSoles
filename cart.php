<?php
session_start();
$conn = mysqli_connect('localhost','root','','insoles');
$query=mysqli_query($conn,"SELECT * from `cart` where `email`='$_SESSION[email]'; ");


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
         .car{
            text-align: center;
         }
    </style>
</head>
<body>
   <h1 class="car" >WELCOME TO CART</h1>
<?php

while($row=mysqli_fetch_array($query)){
    $id=$row['id'];
    $size=$row['size'];
    ?>

<?php
echo "<form method='post' action=''>";
echo "<h3 name='id'>Product_Id : "; echo  $row['id']; echo "</h3>";
echo "<h3>Product_Name : "; echo $row['product_name']; echo "</h3>";
echo "<h3>User_Id : "; echo $row['email']; echo "</h3>";
echo "<h3>Price : "; echo $row['price']; echo "</h3>";
echo "<h3>Your shoe size is : "; echo $row['size']; echo "</h3>";


echo "</form>";

?>
    <a href="deltcart.php?did=<?php echo $row['id']; ?>">  <button class='all' type="text/javascript"><?php echo 'Remove from cart'  ?></button></a>
    <a href="updatecart.php?did=<?php echo $row['id']; ?>">  <button class='all' type="text/javascript"><?php echo 'Update from cart'  ?></button></a>
 <?php

   }


   ?>


<?php 
if(isset($_POST['update'])){

$update=mysqli_query($conn,"UPDATE `cart` SET `size`=$_POST[size] WHERE `id`=$_POST[id]");
echo "<meta http-equiv='refresh' content='0'>";
}
?>

</body>
</html>