<?php
require_once('lib_session.php');

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlisanpham";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = sprintf("SELECT * FROM users WHERE username='%s'", $user);
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_assoc($result);
	if ($row['password'] == $pass) {
		// dang nhap thanh cong
		echo 'Dang nhap thanh cong';
		$_SESSION['current_username'] = $user;
		$_SESSION['isAdmin'] = true;
		header('Location:' . 'products-shirt.php');
	}
	else {
		echo 'Sai password';
	}
}
else {
	echo ('Ko ton tai user ' . $user);
}

mysqli_close($conn);
?>