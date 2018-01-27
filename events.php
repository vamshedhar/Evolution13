<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#eventsmain
{
	background:#CCC;
	position:absolute;
	top:150px;
	left:200px;
	width:900px;
	height:400px;
	padding: 20px;
}
#eventsmain > div
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
/*#event2details
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
#event3details
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
#event4details
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
#event5details
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
#event6details
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
#event7details
{
	position:absolute;
	top:20px;
	left:20px;
	width:100%;
	height:100%;
	opacity: 0;
}
*/</style>
<script type="text/javascript" src="js/jquery1.7.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		function clear()
		{
			$('#eventsmain > div').stop().animate({
                        opacity: 0
                    }, 500
                    );
		}
		$('#eventlist li').bind('click',function(event){
					var $anchor = $(this);
					clear();
					window.setTimeout(function(){
						$('#'+$anchor.attr('id')+'details').stop().animate({
                        opacity: 1
                    }, 1000
                    );
					}
					,500);
			});
	});
</script>
</head>

<body>
<ul id="eventlist">
<li id="event1">
event1
</li>
<li id="event2">
event1
</li><li id="event3">
event1
</li><li id="event4">
event1
</li><li id="event5">
event1
</li><li id="event6">
event1
</li>
</ul>

<div id="eventsmain">
<div id="event1details">
asdadsnaljdsbasljdbad
</div>
<div id="event2details">
sdajdaldsaldsa
</div>
<div id="event3details">
adaksbkdabskd
</div>
<div id="event4details">
sdanlasdaasd
</div>
<div id="event5details">
sdanlasdaasd
</div>
<div id="event6details">
sdanlasdaasd
</div>
<div id="event7details">
sdanlasdaasd
</div>
</div>
</body>
</html>