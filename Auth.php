<?php 


error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
error_reporting(0);
 session_start();

include('app.inc.conf.php');
 $user=$conf['dbuser'];
$pass=$conf['dbpass'];
 $db=$conf['dbname'];
$host=$conf['dbhost'];


$conn = new mysqli($host, $user, $pass, $db);
$admin=mysqli_real_escape_string($conn,$_POST['username']);
$guvenli_parola=mysqli_real_escape_string($conn,$_POST['password']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT * FROM users WHERE username='$admin'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
;
if (($admin!="" || $guvenli_parola!="") && ($admin==$row['username'] && $guvenli_parola==$row['password'] && $row['status']=='Active' )){
	$category=$row['category'];
 	$_SESSION['category']=$category;
$_SESSION['os_users']=$admin;
header("location:index.php");
}
else{
//	echo 'username or password is wrong please try again';
header("location:Message.php?id=Login");
}




?>
