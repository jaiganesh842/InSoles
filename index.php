<?php
session_start();

if (!isset($_SESSION['email'])) {
    // If the user is not logged in, redirect them to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/style.css">
    <script src="https://kit.fontawesome.com/41f04730dd.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./Js/app.js"></script>
    <title>InSoles</title>
</head>

<body>
    <nav>
        <a herf="#" class="logo"><span>In</span>soles</a>
        <ul>
            <li><a href="#">Home </a></li>
            <li><a href="#about">About </a></li>
            <li><a href="#shopnow">Shop </a></li>
            <li><a href="#services">Services </a></li>
        </ul>
        <div class="icon">
            <a href="login.php"> <i class='fas fa-user-alt'></i></a>
            <a style="text-decoration:none;" href="logout.php">logout</a>
            <a href="./wishlist .php"><i class="fa-regular fa-heart"></i></a>
            <a href="./cart.php"><i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
        </div>
    </nav>
    <div class="sec1">
        <img name="slide" class="slider">
    </div>
    <div class="shopnow" id="shopnow">SHOP NOW</div>
    <div class="products">
        <form action="" method="post" id="flexcontainer">
            <div class="items">
                <img src="./Images/items/product-1.jpg">
                <p class="items1">Nike Downshifter 10</p>
                <p class="items2">14,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike10_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="nike10" value="BUY NOW">
                <input class="wishlist" type="submit" name="nike10w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-2.jpg">
                <p class="items1">Nike Downshifter 11</p>
                <p class="items2">6,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike11_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="nike11" value="BUY NOW">
                <input class="wishlist" type="submit" name="nike11w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-3.jpg">
                <p class="items1">Nike Revolution 5</p>
                <p class="items2">21,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike5_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="nike5" value="BUY NOW">
                <input class="wishlist" type="submit" name="nike5w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-4.jpg">
                <p class="items1">Nike Revolution 6</p>
                <p class="items2">8,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike6_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="nike6" value="BUY NOW">
                <input class="wishlist" type="submit" name="nike6w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-5.jpg">
                <p class="items1">Nike Downshifter 12</p>
                <p class="items2">12,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike12_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="nike12" value="BUY NOW">
                <input class="wishlist" type="submit" name="nike12w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-6.jpg">
                <p class="items1">Fila Unisex Joggers</p>
                <p class="items2">7,000 &#x20B9;</p>
                <label>Size</label>
                <select name="fila_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="new1" value="BUY NOW">
                <input class="wishlist" type="submit" name="new1w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-7.jpg">
                <p class="items1">Nike Women Joggers</p>
                <p class="items2">3,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nikewomen_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="new2" value="BUY NOW">
                <input class="wishlist" type="submit" name="new2w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-8.jpg">
                <p class="items1">Addidas Venom</p>
                <p class="items2">4,500 &#x20B9;</p>
                <label>Size</label>
                <select name="Venom_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="new3" value="BUY NOW">
                <input class="wishlist" type="submit" name="new3w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/product-10.jpg">
                <p class="items1">Puma Mid 5</p>
                <p class="items2">13,000 &#x20B9;</p>
                <label>Size</label>
                <select name="Pumamid_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="new4" value="BUY NOW">
                <input class="wishlist" type="submit" name="new4w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/c5-1.png">
                <p class="items1">Fila Canvas </p>
                <p class="items2">1,000 &#x20B9;</p>
                <label>Size</label>
                <select name="filacanvas_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="new5" value="BUY NOW">
                <input class="wishlist" type="submit" name="new5w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/c2.webp">
                <p class="items1">Crocs</p>
                <p class="items2">4,500 &#x20B9;</p>
                <label>Size</label>
                <select name="crocs_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="crocs" value="BUY NOW">
                <input class="wishlist" type="submit" name="crocsw" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/c4.webp">
                <p class="items1">Puma Men Outstretch V2</p>
                <p class="items2">6,900 &#x20B9;</p>
                <label>Size</label>
                <select name="pumav2_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="pumav2" value="BUY NOW">
                <input class="wishlist" type="submit" name="pumav2w" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/c3.webp">
                <p class="items1">Puma Men Softride </p>
                <p class="items2">6,950 &#x20B9;</p>
                <label>Size</label>
                <select name="pumasoft_size">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <input class="cart" type="submit" name="pumasoft" value="BUY NOW">
                <input class="wishlist" type="submit" name="pumasoftw" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/w.webp">
                <p class="items1">Denill White Heels</p>
                <p class="items2">13,000 &#x20B9;</p>
                <label>Size</label>
                <select name="denillwhite_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="denillwhite" value="BUY NOW">
                <input class="wishlist" type="submit" name="denillwhitew" value="Add To Wishlist">
            </div>
            <div class="items">
                <img src="./Images/items/w2.webp">
                <p class="items1">Denill Black Heels</p>
                <p class="items2">10,000 &#x20B9;</p>
                <label>Size</label>
                <select name="denillblack_size">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input class="cart" type="submit" name="denillblack" value="BUY NOW">
                <input class="wishlist" type="submit" name="denillblackw" value="Add To Wishlist">
            </div>
           
        </form>
    </div>
    <div class="shopnow" id="services">Services</div>
    <div class="services">
        <div class="services1">
            <div class="circle"><i class="fa-sharp fa-solid fa-truck-fast"></i></div>
            <p>FREE SHIPING</p>
            <span>All orders over $150</span>
        </div>
        <div class="services1">
            <div class="circle"><i class="fa-solid fa-credit-card"></i></div>
            <p>QUICK PAYMENT</p>
            <span>100% secure payment</span>
        </div>
        <div class="services1">
            <div class="circle"><i class="fa-solid fa-box-open"></i></div>
            <p>FREE RETURNS</p>
            <span>Money back in 30 days</span>
        </div>
        <div class="services1">
            <div class="circle"><i class="fa-solid fa-clock"></i></div>
            <p>24/7 SUPPORT</p>
            <span>Get Quick Support</span>
        </div>
    </div>
    <div style="background-color:black;text-align:center;color:white;" id="about"><h1>About Us</h1></div>
    <div class="aboutus" id="aboutus">
        <div class="aboutus1">
            <div class="logo2">
                <div class="logo3">
                    <p>In<span class="logo1">soles</span></p>
                </div>
                <p class="make">This is simple website to buy shoes and sandals,Make sure your internet is conneced and please login before adding products to cart if you are new to this page create a new account to move further in this website</p><br>
                <p class="make">Add : SDMIT ujire</p>
                <p class="make">Call : 6361577690</p>
                <p class="make">Email : jaiganeshkn842@gmail.com</p>
            </div>
            <div class="online">
                <h4>Online Platforms</h4><br><br>
                <a href="#">Brands Associated</a><br><br>
                <a href="#">Purchanse Guide</a><br><br>
                <a href="#">Events</a><br><br>
                <a href="#">Insturctor Profile</a><br><br>
                <a href="#">Charities</a><br><br>
                <a href="#">Help</a><br><br>
            </div>
            <div class="online">
                <h4>Links</h4><br><br>
                <a href="#">Contact Us</a><br><br>
                <a href="#">Gallery</a><br><br>
                <a href="#">News & Articles</a><br><br>
                <a href="#">FAQ's</a><br><br>
                <a href="#">Login/Registration</a><br><br>
                <a href="#">Comming Soon</a><br><br>
            </div>
        </div>
        <div class="links">
            <a href="https://www.facebook.com/profile.php?id=100025378621761"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/jai-ganesh-b6aaa1227/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://twitter.com/Jai_ganesh_07"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/jai_ganesh_7/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UC7c4Z2ZlMsLg2smy0taW3kQ"><i class="fa-brands fa-youtube"></i></a>
        </div>

        <hr>
        <div class="copyrights">
            <h5>Copyright 2022 All Rights Reserved by <a href="https://github.com/jaiganesh842">Jaiganesh</a></h5>
        </div>
    </div>
</body>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'insoles');

if (isset($_POST['nike10'])) {
    $name = 'Nike Downshifter 10';
    $size = $_POST['nike10_size'];
    $price = 14000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike11'])) {
    $name = 'Nike Downshifter 11';
    $size = $_POST['nike11_size'];
    $price = 6000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike5'])) {
    $name = 'Nike Revolution 5';
    $size = $_POST['nike5_size'];
    $price = 21000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike6'])) {
    $name = 'Nike Revolution 6';
    $size = $_POST['nike6_size'];
    $price = 8000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike12'])) {
    $name = 'Nike Downshifter 12';
    $size = $_POST['nike12_size'];
    $price = 12000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new1'])) {
    $name = 'Fila Unisex Joggers';
    $size = $_POST['fila_size'];
    $price = 7000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new2'])) {
    $name = 'Nike Women Joggers';
    $size = $_POST['nikewomen_size'];
    $price = 3000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new3'])) {
    $name = 'Addidas Venom';
    $size = $_POST['Venom_size'];
    $price = 4500;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new4'])) {
    $name = 'Puma Mid 5';
    $size = $_POST['Pumamid_size'];
    $price = 13000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new5'])) {
    $name = 'Fila Canvas';
    $size = $_POST['fila_size'];
    $price = 1000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['crocs'])) {
    $name = 'Crocs';
    $size = $_POST['crocs_size'];
    $price = 4500;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['pumav2'])) {
    $name = 'Puma Men Outstreatch v2';
    $size = $_POST['pumav2_size'];
    $price = 6900;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['pumasoft'])) {
    $name = 'Puma Men Softride';
    $size = $_POST['pumasoft_size'];
    $price = 6950;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['denillwhite'])) {
    $name = 'Denill White Heels';
    $size = $_POST['denillwhite_size'];
    $price = 13000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['denillblack'])) {
    $name = 'Denill Black Heels';
    $size = $_POST['denillblack_size'];
    $price = 10000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `cart`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike10w'])) {
    $name = 'Nike Downshifter 10';
    $size = $_POST['nike10_size'];
    $price = 14000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike11w'])) {
    $name = 'Nike Downshifter 11';
    $size = $_POST['nike11_size'];
    $price = 6000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike5w'])) {
    $name = 'Nike Revolution 5';
    $size = $_POST['nike5_size'];
    $price = 21000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike6w'])) {
    $name = 'Nike Revolution 6';
    $size = $_POST['nike6_size'];
    $price = 8000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['nike12w'])) {
    $name = 'Nike Downshifter 12';
    $size = $_POST['nike12_size'];
    $price = 12000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new1w'])) {
    $name = 'Fila Unisex Joggers';
    $size = $_POST['fila_size'];
    $price = 7000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new2w'])) {
    $name = 'Nike Women Joggers';
    $size = $_POST['nikewomen_size'];
    $price = 3000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new3w'])) {
    $name = 'Addidas Venom';
    $size = $_POST['Venom_size'];
    $price = 4500;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new4w'])) {
    $name = 'Puma Mid 5';
    $size = $_POST['Pumamid_size'];
    $price = 13000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['new5w'])) {
    $name = 'Fila Canvas';
    $size = $_POST['fila_size'];
    $price = 1000;
    $email = $_SESSION['email'];

    
    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['crocsw'])) {
    $name = 'Crocs';
    $size = $_POST['crocs_size'];
    $price = 4500;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['pumav2w'])) {
    $name = 'Puma Men Outstreatch v2';
    $size = $_POST['pumav2_size'];
    $price = 6900;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['pumasoftw'])) {
    $name = 'Puma Men Softride';
    $size = $_POST['pumasoft_size'];
    $price = 6950;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['denillwhitew'])) {
    $name = 'Denill White Heels';
    $size = $_POST['denillwhite_size'];
    $price = 13000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
if (isset($_POST['denillblackw'])) {
    $name = 'Denill Black Heels';
    $size = $_POST['denillblack_size'];
    $price = 10000;
    $email = $_SESSION['email'];

    mysqli_query($conn, "INSERT INTO `wishlist`(`product_name`, `email`, `price`, `size`)
     VALUES ('$name','$email','$price','$size');");

?>
    <script>
        window.location.href = './index.php';
    </script>
<?php
}
?>

</html>