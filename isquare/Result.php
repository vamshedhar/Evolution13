<?php
include('connect.php');
$x=1;
while($x<90)
{
$querys=mysql_query("SELECT * FROM student WHERE PID='$x'");
$arrays=mysql_fetch_array($querys);
$count=0;
$emal=$arrays['Email'];
if($emal!=NULL)
{$w=1;

while($w<21)
{/*switch($w)
{case 1:
case 2:
case 3:
case 4:
case 5:
case 7:
case 10:*/
$AnswerNo="Answer$w";
//echo $AnswerNo;
$ans=$arrays["Answer$w"];
//echo $ans;
$queryq=mysql_query("SELECT Answer FROM Questions WHERE PID='$w'");
$arrayq=mysql_fetch_array($queryq);
$AnsForQuestion=$arrayq['Answer'];
//echo $AnsForQuestion."<br />";
if($w==1 ||$w==2||$w==3||$w==4||$w==5||$w==7||$w==10)
{if($AnsForQuestion==$ans)
{$count=$count+4;
//echo $count;
}
$w++;}/*break;
case 6:
case 8: 
case 19:*/
elseif($w==6||$w==8||$w==19)
{
if($AnsForQuestion==$ans)
{$count=$count+2;}
$w++;}/*break;
case 9:
case 11:
case 18:*/
elseif($w==9||$w==11||$w==18)
{if($AnsForQuestion==$ans)
{$count=$count+3;}
$w++;}
/*break;
case 16:*/
elseif($w==16) 
{if($AnsForQuestion==$ans){$count=$count+5;}
$w++;}/*break;
case 12:
case 13:
case 14:
case 15:*/
elseif($w==12||$w==13||$w==14||$w==15)
{if($AnsForQuestion==$ans)
{$count=$count+8;}
$w++;}
/*break;
case 17:fff
case 20:*/
elseif($w==17||$w==20)
{
if($AnsForQuestion==$ans)
{$count=$count+10;}
$w++;}
}
mysql_query("UPDATE student SET Score='$count' WHERE Email='$emal'");
}
$x++;
}
?>