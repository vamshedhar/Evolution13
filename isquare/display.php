<table>
<tr><td>Rank</td><td>Name</td><td>Score/100</td></tr>
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