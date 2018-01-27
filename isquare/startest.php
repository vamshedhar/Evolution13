<?php
session_start();
include('connect.php');
?>
<html>
<head><link rel="shortcut icon" type="image/x-icon" href="favicon.png"><title>I_SQUARE</title>
<head>
<body>
<?php
$name="";
$email="";

function check()
{
$email=$_POST['EmailID'];
$query = mysql_query("SELECT * FROM student WHERE Email='$email'");
$array = mysql_fetch_array($query);
$w = $array['questionNo'];
	
if($w==21)
{
	//header("Location:end.php");
	echo "<script> window.location=\"end.php\"; </script>";
}
}

if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$email=$_POST['EmailID'];
$check = mysql_query("SELECT * FROM student WHERE Email='$email'");
$array = mysql_fetch_array($check);
if(mysql_num_rows($check)>0)
{
	$_SESSION['email']=$_POST['EmailID'];
	check();
}
else
{
	$insrt="INSERT INTO student (Name,Email,questionNo) VALUES('$name','$email','1')";
	mysql_query($insrt);
	$_SESSION['email']=$_POST['EmailID'];
	check();
}

echo "<br/><hr>";
echo "<font size ='8px'>Hello ".$name.",<br/></font>";
echo"<font size ='6px'><p>Welcome to the first round of I<sup>2</sup>. Kindly go through the following instructions before taking up the quiz.(important)<br/>";
echo"<div id='content' style='float:center' align='center' size='700px'><br/>";
echo"<table border='0.5' cellspacing ='10' cellpadding='10' size='100px'>";
echo"<b>INSTRUCTIONS:</b><br/>";
echo"<body bgcolor='Skyblue' font size='16px' color='white'>";
echo"<tr><td>1.	The quiz comprises of 20 questions all of which are compulsory. Enter the correct option or answer in the space provided.</td></tr><br/>";
echo"<tr><td>2.	There is no time limit to complete the quiz, however we keep a track of total time consumed and accordingly give priority to those participants who complete the quiz in a shorter time interval.</td></tr>";
echo"<tr><td>3. No marks are allotted for a wrong answer but a penalty of one mark is imposed for an un-attempted or unanswered question.</td></tr>";
echo"<tr><td>4. Grading and ranking is completely relative, consequently there are no minimum marks to be scored to clear the quiz and enter subsequent rounds</td></tr>";
echo"<tr><td>5.	Kindly do not try to press the <b>‘back’</b> or <b>‘forward’</b> button on your browser as you might involuntarily <b>skip a question</b>. Press the ‘Next Question’ button if and only if you are confident about the answer, as a correct answer is given higher priority while grading. </tr></td>";
echo"<tr><td>6. All of you are given a single chance (only) to complete the quiz.</td></tr>";
echo"<tr><td>7.	A loss of connection, a power cut or any other interrupts can be compensated by entering the Name and Email_id again and restoring to quiz from the question interrupted. </td></tr>";
echo"<tr><td>8.	Relatively do extremely well as it is highly prestigious to earn an <b>IIT Roorkee’s <i>‘Cognizance’</i> certificate </b>meant for your accomplishment. </td></tr>";
echo"<tr><td>9. <b><i>ALL THE BEST!</i></b>  </td></tr></table></font></body>";

echo"<form input action='Finalquiz.php' method='POST'>";
echo"<align='center'>";
echo"<input type='submit' name='startQuiz' value='Start Quiz'></form><hr>";
}
?>
</body>
</html> 
        