<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location:index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Css\login.css">
	<title>Login Form</title>
</head>
<body>
	<div class="box">
		<form action="" method="POST" class="login-email">
			<h1>Login</h1>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				<button name="submit" class="btn">Login</button>
			<p class="login-register-text">Don't have an account? <a href="signin.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>