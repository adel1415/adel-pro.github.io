<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

$id = !empty($_GET['id']) ? ($_GET['id']) : null;


function hatagetir($hata)
{
	echo '

	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Expires" content="0"> 
<title>UnlimStore</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" />
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
</head>
<body id="login-bg"> 
 <div id="login-holder">
	<div id="logo-login">
		<a href="index.php"><img src="images/logo.png" width="200" height="40" alt="" /></a>
	</div>
	<div class="clear"></div>
	<div id="loginbox" style="	background: url(img/loginbox_bg.png) no-repeat;
	font-size: 12px;
	height: 212px;
	line-height: 12px;
	padding-top: 60px;
	position: relative;
	width: 508px;">
<form action="inc/auth.php" method="POST" >
	<div id="login-inner">
			<div id="forgotbox-text">
		<p style="font-size: 15px;line-height: 2;">	'.$hata.'</p>
		</div>
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th> </th>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>

';

// *************************************************************************
$retpage = trim($_GET['retpage']);
if (empty($retpage)){
  echo "<a href='index.php' class='back-login'>Geri Dön</a>";
} else {
  echo "<a href='index.php' class='back-login'>Loglara Geri Dön</a>";
}
// *************************************************************************

echo '
	</div>
	</form>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>
	
	
	
	
	
	';
}





 if($id == "Login"){
 
 hatagetir("ERROR! username or password is wrong or your account not activated  yet!");
               ?>

 		   
 <?php
                
        }elseif($id =="Logout"){
		
		
session_start();
session_destroy();
header("location: index.php");




                 ?>

				

               <?php
                
    }elseif($id =="Yetki"){   
 hatagetir(" 
Your login has been disapproved or you have attempted to perform an unauthorized transaction.");	
                 ?>
				 
				       <?php
                
    }elseif($id =="Basarili"){   
 hatagetir("Your transaction has been completed successfully.");	
                 ?>


                 <?php

    }elseif($id =="Password"){
	 hatagetir("The  Admin's password was successfully changed.");
	
	?>

<?php          

                      }elseif($id =="Hata"){
					  	 hatagetir("Operating System Not Found : ) ");
            ?>

            <?php
                        }
                        
                    
?>
