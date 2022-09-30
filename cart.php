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
    <title>cart</title>
</head>
<body>
<?php

while($row=mysqli_fetch_array($query)){

    echo "<h1>" . $row['id']. "</h1><br/>";
    echo "<h1>" . $row['product_name']. "</h1><br/>";
    echo "<h1>" . $row['email']. "</h1><br/>";
    echo "<h1>" . $row['price']. "</h1><br/>";
    echo "<h1>" . $row['size']. "</h1><br/>";

    ?>
    <a href="deltcart.php?did=<?php echo $row['id']; ?>">  <button type="text/javascript"><?php echo 'Delete'  ?></button></a><?php
}

?>





</body>
</html>