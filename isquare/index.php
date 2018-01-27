<?php
session_start();
include('connect.php');
/*if(isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
	setcookie("email","",time()+5*24*3600);
	header("Location:Finalquiz.php");
}*/
?>

<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<title>COGNIZANCE-2013</title>
<style type="text/css">
#a
{
	position:absolute;
	top:1%;
	left:25%;
	width:50%;
	height:99%;
	background-color:#000;
	opacity:0.8;
	border-radius:10px;
}
#b
{
	position:absolute;
	top:35%;
	left:77.5%;
	width:20%;
	height:33%;
	background-color:#000;
	opacity:0.8;
	border-radius:10px;
}
#c
{
	position:absolute;
	top:35%;
	left:77.2%;
	width:20%;
	height:30%;
	color:#FFF;
	text-align:center;
}
h1
{
	position:absolute;
	left:36%;
	top:-2.5%;
	color:#FFF;
}
table
{
	color:#FFF;
	position:absolute;
	left:41%;
	top:6%;
	
}
td
{
	text-align:center;
	font:Tahoma, Geneva, sans-serif;
	font-size:16px;
}
</style>
</head>
<body background="I2final.jpg" align="right ">
<div id="a"></div>
<h1>i-sQuare Round-1 has ended.</h1>
<table>
<tr><th>Rank</th><th>Name</th><th>Score/100</th></tr>
<?php
include('connect.php');
$qu = mysql_query("SELECT * FROM student ORDER BY Score DESC LIMIT 25");
$i=1;
while($ar = mysql_fetch_array($qu))
{
	$score = $ar['Score'];
	$name = $ar['Name'];
?>
<tr><td><?php echo $i; ?></td><td><?php echo $name; ?></td><td><?php echo $score; ?></td></tr>
<?php
$i++;
}
?>
</table>
<div id="b"></div>
<div id="c"><h1>Round 2</h1><br /><br /><h3>Design an elevator that could stop at 3 different floors/levels carrying a significant amount of weight.<h3>
<p>(It will be evaluated during Cognizance)</p></div>

<!--<form action ="startest.php" method="post">
<b>Enter your name as required to be in Certificate:</b><input type="text" name="Name"><br/>
<b>Enter your E-mail ID: </b><input type="text" name="EmailID"><br/>
<input type="submit" name="submit" value="Submit Entry">
</form>-->
</body>
</html>