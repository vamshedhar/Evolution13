<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery1.7.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var time = 3000;
	function rotate(){
		alert();
		$('#rot').animate({
                        '-webkit-transform': 'rotate(20deg)'
                    }, 3000
                    );
					time = 3000;
					alert();
	}
	
	window.setTimeout(rotate()
					,time);
	
	});

</script>


</head>

<body>
<div id="rot">
<img src="images/favicon.png" /></div>
</body>
</html>