<?php
$conn = mysqli_connect('localhost','root','','insoles');

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>