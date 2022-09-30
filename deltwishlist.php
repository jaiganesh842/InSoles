<?php
$conn = mysqli_connect('localhost','root','','insoles');

$del_id=$_GET["did"];

mysqli_query($conn,"DELETE from wishlist where id=$del_id;");

?>

<script>
    window.location.href="./wishlist .php";
</script>
<?php
?>