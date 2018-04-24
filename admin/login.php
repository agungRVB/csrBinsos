<?php
session_start();
$errmsg_arr = array();
$errflag = false;

// configuration
$dbhost 	= "localhost";
$dbname		= "management_projek";
$dbuser		= "root";
$dbpass		= "";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 
// new data
$username = $_POST['namauser'];
$password = $_POST['pswd'];
 
// query
$result = $conn->prepare("SELECT * FROM admin WHERE username= :a AND password= :b");
$result->bindParam(':a', $username);
$result->bindParam(':b', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);

if($rows > 0) {
	//$_SESSION['username']=$username;
	echo "berhasil";
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	echo "gagal";
	exit();
}
 
?>