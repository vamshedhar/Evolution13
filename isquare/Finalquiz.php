<?php
session_start();
include('connect.php');
$email = $_SESSION['email'];

if(isset($_POST['startQuiz']))
{
	date_default_timezone_set('Asia/Kolkata');
	$start = date("d/m/y H:i:s");
	mysql_query("UPDATE student SET Start_time = '$start' WHERE Email='$email'");
	setcookie('play',1,time()+5*24*3600);
	header('Location:Finalquiz.php');
	
}
if($_COOKIE['play']==1)
{
	$query = mysql_query("SELECT * FROM student WHERE Email='$email'");
	$array = mysql_fetch_array($query);
	$w = $array['questionNo'];

if(isset($_POST['submit']))
{
	$ans = $_POST['answer'];
	$ques = "Answer$w";
	if($_POST['answer']==NULL)
	{
		header ("Location: Finalquiz.php?err=1");
	}
	else
	{
		$w++;
		mysql_query("UPDATE student SET questionNo='$w', $ques='$ans' WHERE Email='$_SESSION[email]'");
		
	}
}
?>
<html>
<head><link rel="shortcut icon" type="image/x-icon" href="favicon.png"><title>I-SQUARE_Quiz</title></head>
<body bgcolor="Skyblue">
<center>
<font color="white" style="font-size:72px;">&iota;<sup>2</font>
<br><font color="white" style="font-size:40px;">Welcome to ROUND 1</font>
</center>
<hr>

<?php
if($w==21)
{
	echo ("<script type='text/javascript'>setTimeout(\"window.location = 'end.php'\",0);</script>");
}

else
{
echo"<align='center'>";
echo "<b>Question ".$w."</b><br/>";
$query1 = mysql_query("SELECT * FROM questions WHERE PID='$w'");
$row1 = mysql_fetch_array($query1);
echo $row1['Question']."<br/>";
echo $row1['OptionA']."<br/>";
echo $row1['OptionB']."<br/>";
echo $row1['OptionC']."<br/>";
echo $row1['OptionD']."<br/>";
$diag=$row1['Picture'];
$widt=$row1['width'];
$heit=$row1['height'];
if(isset($_GET['err']) && $_GET['err']==1)
{
echo "<b>Enter a valid answer</b>";}
echo "<form action ='Finalquiz.php' method='post'>" ."<br/>";
echo"<img src='$diag' width='$widt' height='$heit' align='center'>"."<br/>";
echo "<input type='text' name='answer' autofocus=\"autofocus\">";
echo "<input type='submit' name='submit' value='Next Question'>"."<br/>";

}
}
?>
</body>
</html>