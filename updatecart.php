<?php

$conn = mysqli_connect('localhost','root','','insoles');
$query=mysqli_query($conn,"SELECT * from `cart` where `id`='$_GET[did]'; ");
while($row=mysqli_fetch_array($query)){
    $id=$row['id'];
    $product_name=$row['product_name'];
    $email=$row['email'];
    $price=$row['price'];
    $size=$row['size'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <h2>Product Id:<?php echo $id;?></h2>
    <h2>Product name:<?php echo $product_name?></h2>
    <h2>Email:<?php echo $email?></h2>
    <h2>Price:<?php echo $price?></h2>
    <h2>Size:<?php echo $size?></h2>
    <h4>Change size below:</h4>
    <select type="number" name="size" value="<?php echo $size?>">
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>

    </select>
    <input type="submit" name="update"  value="UPDATE"/>
</form>
    

<?php 
if(isset($_POST['update'])){

$update=mysqli_query($conn,"UPDATE `cart` SET `size`=$_POST[size] WHERE `id`=$id");
echo "<meta http-equiv='refresh' content='0'>";
}
?>

</body>
</html>