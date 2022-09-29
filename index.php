<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/style1.css">
    <script src="https://kit.fontawesome.com/41f04730dd.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./Js/app.js"></script>
    <title>InSoles</title>
</head>

<body>
    <nav>
        <a herf="#" class="logo"><span>In</span>soles</a>
        <ul>
            <li><a href="#">Home </a></li>
            <li><a href="#">About </a></li>
            <li><a href="#shopnow">Shop </a></li>
            <li><a href="#services">Services </a></li>

        </ul>
        <div class="icon">
            <a href="login.php"> <i class='fas fa-user-alt'></i></a>
            <a href="#"><i class="fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
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
                <input type="submit" name="nike10" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/product-2.jpg">
                <p class="items1">Nike Downshifter 11</p>
                <p class="items2">6,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike11_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="nike11" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/product-3.jpg">
                <p class="items1">Nike Revolution 5</p>
                <p class="items2">21,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike5_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="nike5" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/product-4.jpg">
                <p class="items1">Nike Revolution 6</p>
                <p class="items2">8,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike6_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="nike6" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/product-5.jpg">
                <p class="items1">Nike Downshifter 12</p>
                <p class="items2">12,000 &#x20B9;</p>
                <label>Size</label>
                <select name="nike12_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="nike12" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/c2.webp">
                <p class="items1">Crocs</p>
                <p class="items2">4,500 &#x20B9;</p>
                <label>Size</label>
                <select name="crocs_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="crocs" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/c4.webp">
                <p class="items1">Puma Men Outstretch V2</p>
                <p class="items2">6,900 &#x20B9;</p>
                <label>Size</label>
                <select name="pumav2_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="pumav2" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/c3.webp">
                <p class="items1">Puma Men Softride </p>
                <p class="items2">6,950 &#x20B9;</p>
                <label>Size</label>
                <select name="pumasoft_size">
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                </select>
                <input type="submit" name="pumasoft" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/w.webp">
                <p class="items1">Denill White Heels</p>
                <p class="items2">13,000 &#x20B9;</p>
                <label>Size</label>
                <select name="denillwhite_size">
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                </select>
                <input type="submit" name="denillwhite" value="Add To Cart">
            </div>
            <div class="items">
                <img src="./Images/items/w2.webp">
                <p class="items1">Denill Black Heels</p>
                <p class="items2">10,000 &#x20B9;</p>
                <label>Size</label>
                <select name="denillblack">
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                </select>
                <input type="submit" name="denillblack" value="Add To Cart">
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

?>

</html>