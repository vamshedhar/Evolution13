<?php
session_start();
if(isset($_SESSION['email']))
{
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$end = date("d/m/y H:i:s");
mysql_query("UPDATE student SET Stop_time = '$end' WHERE Email='$_SESSION[email]'");
setcookie("play","",time()-3600);
unset($_SESSION['email']);
session_destroy();
?>
<html>
<head><link rel="shortcut icon" type="image/x-icon" href="favicon.png"><title>I-Square1</title></head>
<body bgcolor="Skyblue">
<font size="20px" color="white">Thankyou for answering the quiz.</font><br/>
<font size="16px" color="white">We will soon update you with your result if you make it into top 20</font> 
<?php } 
else
header("Location: index.php");
?>
</body>
</html>
