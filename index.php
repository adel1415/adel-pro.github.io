<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
session_start();
$category=$_GET['cat'];


include('app.inc.conf.php');
 $user=$conf['dbuser'];
$pass=$conf['dbpass'];
$db=$conf['dbname'];
$host=$conf['dbhost'];

	include('database.php');
	$connection=new database();
	$con2=$connection->connect($db, $user, $pass, $host);


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpeg" href="img/icon.jpeg"/>
    <title>UnlimStore</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/solid.css" integrity="sha384-g2aKxiZcFezoVOq4MsjaxuBbSxSlXD/NRQ5GaPLfvCtcTLgP3fYZKKAGxCM/wMfe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/regular.css" integrity="sha384-nM5tBytXTc1HDZ/A3My2gNT2TxLk/M/5yFi0QrOxaZjBi7QpKUfA2QqT+fcSxSlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/brands.css" integrity="sha384-1beec9tTZuu+KrTudmvRnGpK81r78DKCAXdphCvdG+PR+n/WCczsYPqTBTvYsM7z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/fontawesome.css" integrity="sha384-xdTUmhbcetyLRVL4PAriRajOve+/5pjOiy5sJABnhXMcRMVc9HI9s2KmOCjjDK/P" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="container">
<br/>

<center><h3 class="titlepage">UnlimStore :Code 1</h3></center>
<center><h4 class="titlepage" id="bgicon"> <i class="fas fa-tachometer-alt"></i> </h4></center>
<br/>



<div class="row">
<?php 
 $sql="select  * from apps where category='$category'";
$result = $con2->query($sql);
	while($row=mysqli_fetch_assoc($result))
	{


?>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="appbox">
    <button class="install" onclick="window.location.href='itms-services://?action=download-manifest&url=<?php echo str_replace(" ","",$row)['Action_url'] ?>install.plist'">تثبيت  </button>
    <img class="appicon" src="<?php echo "../OSAPP/". $row['appimage']?>" alt="">
    <span class="titleapp"><?php echo  $row['myname']?> </span> <br/>
    <span class="appv"><?php echo ' الأصدار '. $row['appversion']; ?> <i class="fas fa-info-circle"></i></span> <br/>
    <span class="appv"><?php echo $row['descrip']; ?>&nbsp;</span>
  </div>

	<?php }?>

</div>
<br/><br/><br/><br/>
<center>
  <p class="tos">تواصل معنا / دعم فني</p>
  <?php require('footer.php');?>

<?php
echo "<p class=\"copy\"> جميع الحقوق محفوظه &copy; 2018 UnlimStore.com </p>";
?>

</center>

<br/><br/><br/><br/>
<div class="fixbutton">
    <a href="#">الدعم <i class="fas fa-phone"></i> </a>
    <a href="#">مكرر <i class="far fa-window-restore"></i> </a>
    <a href="#">افلام <i class="fas fa-video"></i ></a>
    <a href="#">الرئسيه <i class="fas fa-tachometer-alt"></i> </a>


</div>

</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php ?>