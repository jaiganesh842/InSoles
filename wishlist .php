<?php
session_start();
$conn = mysqli_connect('localhost','root','','insoles');
$query=mysqli_query($conn,"SELECT * from `wishlist` where `email`='$_SESSION[email]'; ");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wishlist</title>
</head>
<body>
<?php

while($row=mysqli_fetch_array($query)){
    


    // echo "<h1>" . $row['id']. "</h1><br/>";
    // echo "<h1>" . $row['product_name']. "</h1><br/>";
    // echo "<h1>" . $row['email']. "</h1><br/>";
    // echo "<h1>" . $row['price']. "</h1><br/>";
    // echo "<h1>" . $row['size']. "</h1><br/>";
    $id=$row['id'];
    // $product_name=$row['product_name'];
    // $email=$row['email'];
    // $price=$row['price'];
    $size=$row['size'];
    ?>

<?php
echo "<form method='post' action=''>";
echo "<h1>"; echo $row['id']; echo "</h1>";
echo "<h1>"; echo $row['product_name']; echo "</h1>";
echo "<h1>"; echo $row['email']; echo "</h1>";
echo "<h1>"; echo $row['price']; echo "</h1>";
echo "<h1>Your shoe size is "; echo $row['size']; echo "</h1>";
echo "<h1>If you want to change your size, select the below</h1>";
echo "<select name='size' value='<?php echo $size; ?>'>";
  echo "<option value='6'>6</option>";
  echo "<option value='7'>7</option>";
  echo "<option value='8'>8</option>";
  echo "<option value='9'>9</option>";
echo "</select>";

echo "<input type='submit' name='update' value='Update'>";

echo "</form>";

?>
    <a href="deltwishlist.php?did=<?php echo $row['id']; ?>">  <button type="text/javascript"><?php echo 'Remove from wishlist'  ?></button></a><?php

}


?>


<?php 
if(isset($_POST['update'])){

$update=mysqli_query($conn,"UPDATE `wishlist` SET `size`=$_POST[size] WHERE `id`=$id");
echo "<meta http-equiv='refresh' content='0'>";
}
?>

</body>
</html>