<?php 
session_start();
$conn = mysqli_connect("localhost","id12293297_root","meet@123","id12293297_booksourcehub") or die("Connection Error: " . mysqli_error($conn));
if(!isset($_POST['submit'])){
		echo "Something wrong! Check again!";
		exit;
	}
	
	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);

	if($name == "" || $pass == ""){
		echo "Name or Pass is empty!";
		exit;
	}

	$name = mysqli_real_escape_string($conn, $name);	// used for safe data transfer
	$pass = mysqli_real_escape_string($conn, $pass);
	$pass = sha1($pass);								// crypto technique

	// get from db
	$query = "SELECT name, pass from admin";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);

	if($name != $row['name'] && $pass != $row['pass']){		// vaidation for the same name and password as in database
		echo "Name or pass is wrong. Check again!";
		$_SESSION['admin'] = false;
		exit;
	}

	if(isset($conn)) {mysqli_close($conn);}
	$_SESSION['admin'] = true;
	header("Location: admin.php");


?>