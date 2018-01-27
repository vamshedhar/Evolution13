<?php
if(isset($_POST['submit']))
{
$to = "dpt.cognizance13@gmail.com";
$name = $_POST['name'];
$desc = $_POST['message'];
$email =$_POST['email'];
$sub = "EVOLUTION '13 QUERIES";
$headers = 'From:'.$email . "\r\n" .
    'Name: '.$name . "\r\n";
mail($to,$sub,$desc,$headers);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Evolution '13</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Enriqueta' rel='stylesheet' type='text/css'>

					<!--javascripts links-->
<script type="text/javascript" src="js/jquery1.7.1.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.flip.min.js"></script>
<script src="assets/countdown/jquery.countdown.js"></script>
<script src="assets/js/script.js"></script>
<script src="js/modernizr.custom.63321.js"></script>
					<!--css links-->
<link type="text/css" rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
<link rel="stylesheet" href="assets/countdown/jquery.countdown.css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39176729-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
$(document).ready(function(e) {
    
	$('#down').click(function(){
		$('body,html').animate({
			scrollTop: 680
			}, 800);
			return false;
	});
	
	
	$('#down').hover(function(){
		$('#down').animate({
			scrollTop: 30
			}, 300);
			return false;
	});
	
	
	$('#down').mouseleave(function(){
		$('#down').animate({
			scrollTop: -30
			}, 300);
			return false;
	});
	
	$('#scrol').click(function(){
		$('body,html').animate({
			scrollTop:5000
			}, 1000);
			return false;
	});
	
	
	$('#scrol').hover(function(){
		$('#scrol').animate({
			scrollTop: 30
			}, 300);
			return false;
	});
	
	
	$('#scrol').mouseleave(function(){
		$('#scrol').animate({
			scrollTop: -30
			}, 300);
			return false;
	});
	$('#close').click(function(){
		$('body,html').animate({
			scrollTop:3942
			}, 1000);
			return false;
	});
	
	
});
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<style type="text/css">
#fblike
{
	position:absolute;
	background:#FFF;
	opacity:0.7;
	top:550px;
	left:30px;
	padding:5px;
	border-radius:5px;
	
}
#eventsMain
{
	position:relative;
	top:25%; left:22%;
	height:60%;
	width:55%;
	background:url(images/blue%20back.jpg);
	border-radius:10px;

}
#eventsMain > div
{
	position:absolute;
	height:90%;
	color:#FFF;
	margin:15px;
	padding:10px;

	visibility:visible;
	font-family: 'Enriqueta', serif;

	font-size:15px;
}
#eventList > div
{
	cursor:pointer;
}
#slider{
	position:relative;
	top:20%;
	float:right;
	right:5%;	
}
#aboutevol
{
	position:relative;
	float:left;
	top:130px;
	left:30px;
	width:570px;
	height:480px;
	padding:20px;
	background:#000;
	opacity:0.7;	
	border-radius:10px;
	color:#FFF;
	
}
</style>
</head>


<body onload="MM_preloadImages('images/Logos/ir tech.png','images/Logos/ipma.png','images/Logos/shreyans.png','images/Logos/naini.png','images/Logos/elof.png','images/Logos/AMAZON.png','images/Logos/flytech.png','images/Logos/india papers.png','images/Logos/c &amp; c.png','images/Logos/hpmc.png')">
<div id="loading" class="demo-2" style="position:absolute; width:100%; height:100%; z-index:10000; background:#000;"><!--<div class="spinner" style="position:absolute; top:32%; left:47%;"></div>--><b style="color:#FFF; font-size:30px; font-family: 'Unica One'; color:#06C; position:absolute; top:65%; left:47%;">LOADING...</b></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
	<div class="menu">
		<!--<a class="button">Register</a>-->
		<ul class="nav">
			<li><a id="home" class="anchorLink">Welcome</a></li>
			<li><a id="about" class="anchorLink">About</a></li>
			<li><a id="events" class="anchorLink">Events </a></li>
            <li><div align="center" style="font-size:40px; color:#ffb504;">&nbsp;EVOLUTION'13</div></li>
			<li><a id="spon" class="anchorLink">Sponsors</a></li>
			<li><a id="team" class="anchorLink">Team</a></li>
			<li><a id="contact" class="anchorLink">Contact Us</a></li>
		</ul>
	</div>
</header>

<!--header ends-->

<div id="evolution">
	<div id="home" style="background-image:url(images/bg/back.jpg);">
    <div id="count" style="position:absolute; top:220px; right:30px;">
	<div id="countdown" style="float:left" ></div><div style="float:left; color:#FFF; font-size:30px; font-family: 'Unica One'; vertical-align:bottom; text-align:center">TO GO...</div></div>
    <div id="roorkee"> 
        <a href="http://www.iitr.ac.in/" target="_new"><img src="images/iitr/iitr logo.png" width="300" /></a>
    </div>
    <div id="cogni">
         <a href="http://www.cognizance.org.in/" target="_new"><img src="images/iitr/cogni logo.png" width="300" /></a>
    </div>
    
    
        <a href="http://goo.gl/pywqt" target="_blank" >
<img id="robo" style="position:absolute; top:20%; left:-15px;" src="images/robo.png" /></a>
    
    
    
 	<div id="down" style="position:absolute; bottom:20px;">
<a><img style="" src = "images/down.png"/></a>
    </div>
    <div id="evol"><img src="images/iitr/EVOLUTION LOGO.png"  width="650px" /></div>
    <div id="fblike"><div class="fb-like" style="opacity:1" data-href="https://www.facebook.com/pages/Evolution-Cognizance13/408817539212485?ref=ts&amp;fref=ts" data-send="false" data-width="340" data-show-faces="true" data-font="arial" data-colorscheme="light"></div></div>
        
	</div>
    
    
    <div id="footer"><p style="position:relative; left:40px; bottom:5px;float:left; color:#FFF;">&copy; <span style="font-family: 'Unica One';">Evolution'13,IIT Roorkee,Saharanpur Campus</span></p>
    <p style="position:relative; float:right; right:35px; bottom:5px;"><a href="http://www.cognizance.org.in/" target="_blank" style="color:#a3b5db;">Cognizance'13</a></p>
  </div>
   
  <div id="about">
  <div id="aboutevol"> 
  <b style="font-family: 'Unica One', cursive, Helvetica, Arial, sans-serif;  font-size: 2em; color:#ffb504;">About Evolution'13</b>
  <hr />
  <p style=" font-size:15px">
  Evolution'13-the annual technical festival of Indian Institute of Technology Roorkee Saharanpur Campus is being held under the banner of Cognizance'13 during 22-24 March 2013.
The IIT Roorkee Saharanpur Campus is now the host of three departments namely<br /> 
(i) Department of Paper Technology <br />(ii) Department of Polymer and Process Engineering<br /> 
(iii) Department of Applied Sciences and Engineering.<br /> Through Evolution, we assemble the best talent and expertise from all over the country at one forum and attempt to broaden the dimensions of understanding of our field. Over the years, our Technical festival has gotten bigger & better and this March it's going to be a congregation like never before. Involving a participation of over 1500 students, we promise you that this three day fiesta will provide a synergistic approach to students to demonstrate technical, analytical, innovative and imaginative aspects of their personality and shall lay the groundwork for a solid Industry-Students-Faculty interface.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aiming an all-inclusive growth that pervades the entire society and brings them out of the shadows into a bright light of fresh ideas and simple solutions, Cognizance evolves to a canopy of not just technical renaissance, but also emerges as a confluence of viable solutions to present socio-economic concerns and energy crisis. Ranging from Social Empowerment, to scrutinizing and cultivating viable alternatives to meet energy demands and rendering strategies for economic stability while preserving the technological-esque as its crux; Cognizance moves forward with a single dictum-AIM INCLUSION.<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With this emphatic sense of excitement, we welcome you all to indulge in our festival and help us make it grander and bigger than ever...
  </p>
   </div>
   <div id="slider">
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/main_poster_edited.jpg" alt="EVOLUTION 13" title="EVOLUTION 13" id="wows1_0"/></li>
<li><img src="data1/images/bulls_eye_lowsize.jpg" alt="BULL'S EYE" title="BULL'S EYE" id="wows1_1"/></li>
<li><img src="data1/images/ecopolis_low.jpg" alt="ECOPOLIS" title="ECOPOLIS" id="wows1_2"/></li>
<li><img src="data1/images/encipher.jpg" alt="ENCIPHER" title="ENCIPHER" id="wows1_3"/></li>
<li><img src="data1/images/i2_loswsize.jpg" alt="I^2" title="I^2" id="wows1_4"/></li>
<li><img src="data1/images/ideaz_lowsize.jpg" alt="IDEAZ" title="IDEAZ" id="wows1_5"/></li>
<li><img src="data1/images/illushun_low_size.jpg" alt="ILLUSHUN" title="ILLUSHUN" id="wows1_6"/></li>
<li><img src="data1/images/junkyard_wars_lowsize.jpg" alt="JUNKYARD WARS" title="JUNKYARD WARS" id="wows1_7"/></li>
<li><img src="data1/images/newtons_lowsize.jpg" alt="NEWTONS 1/3rd LAW" title="NEWTONS 1/3rd LAW" id="wows1_8"/></li>
<li><img src="data1/images/prototype.jpg" alt="PROTOTYPE" title="PROTOTYPE" id="wows1_9"/></li>
<li><img src="data1/images/ripples_low.jpg" alt="RIPPLES" title="RIPPLES" id="wows1_10"/></li>
<li><img src="data1/images/spotlight.jpg" alt="SPOTLIGHT" title="SPOTLIGHT" id="wows1_11"/></li>
<li><img src="data1/images/treasure_hunt.jpg" alt="TREASURE HUNT" title="TREASURE HUNT" id="wows1_12"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="EVOLUTION 13"><img src="data1/tooltips/main_poster_edited.jpg" alt="EVOLUTION 13"/>1</a>
<a href="#" title="BULl'S EYE"><img src="data1/tooltips/bulls_eye_lowsize.jpg" alt="BULL'S EYE"/>2</a>
<a href="#" title="ECOPOLIS"><img src="data1/tooltips/ecopolis_low.jpg" alt="ECOPOLIS"/>3</a>
<a href="#" title="ENCIPHER"><img src="data1/tooltips/encipher.jpg" alt="ENCIPHER"/>4</a>
<a href="#" title="I^2"><img src="data1/tooltips/i2_loswsize.jpg" alt="I^2"/>5</a>
<a href="#" title="IDEAZ"><img src="data1/tooltips/ideaz_lowsize.jpg" alt="IDEAZ"/>6</a>
<a href="#" title="ILLUSHUN"><img src="data1/tooltips/illushun_low_size.jpg" alt="ILLUSHUN"/>7</a>
<a href="#" title="JUNKYARD WARS"><img src="data1/tooltips/junkyard_wars_lowsize.jpg" alt="JUNKYARD WARS"/>8</a>
<a href="#" title="NEWTONS 1/3rd LAW"><img src="data1/tooltips/newtons_lowsize.jpg" alt="NEWTONS 1/3rd LAW"/>9</a>
<a href="#" title="PROTOTYPE"><img src="data1/tooltips/prototype.jpg" alt="PROTOTYPE"/>10</a>
<a href="#" title="RIPPLES"><img src="data1/tooltips/ripples_low.jpg" alt="RIPPLES"/>11</a>
<a href="#" title="SPOTLIGHT"><img src="data1/tooltips/spotlight.jpg" alt="SPOTLIGHT"/>12</a>
<a href="#" title="TREASURE HUNT"><img src="data1/tooltips/treasure_hunt.jpg" alt="TREASURE HUNT"/>13</a>
</div></div>
<a class="wsl" href="http://wowslider.com">How To Create Javascript Slideshow by WOWSlider.com v3.1</a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>

   
   </div>
   
   
   
	</div><!--home ends-->
    <div id="head" ><img src="images/line divide EVENTS.png"  width="1200px"/></div>
	<div id="events">
      <div id="eventList">
      			<div id="" class="test activeList" style="color:#09F;">(MAIN EVENTS)</div><br/>
               <div id="ideaz" class="test activeList">IDEAZ</div><br/>
               <div id="spotlight" class="test">SPOTLIGHT</div><br/>
               <div id="illushun" class="test">ILLUSHUN</div><br/>
               <div id="prototype" class="test">PROTOTYPE</div><br/>
               <div id="ceotalks" class="test">CEO TALKS</div><br/>
               <div id="worldrecord" class="test">WORLD RECORD</div><br/>
               <div id="irobotics" class="test">i-ROBOTICS</div><br/>
               <div id="guestlectures" class="test">GUEST LECTURES</div><br/>
               <div id="expo" class="test">POLYMER EXPO</div><br/>
    </div>
    	<div id="eventList" style="right:0%;float:right;">
        <div id="" class="test activeList" style="color:#09F;">(COMPETITIONS)</div><br/>
                        <div id="i2" class="test">I<sup>2</sup></div><br/>
						<div id="ripples" class="test">RIPPLES</div><br/>
                        <div id="ecopolis" class="test">ECOPOLIS</div><br/>
                        <div id="encipher" class="test">ENCIPHER</div><br/>
                        <div id="bullseye" class="test">BULL'S EYE</div><br/>
                        <div id="joyfest" class="test">JOY FEST</div><br/>   
                        <div id="junkyardwars" class="test">JUNKYARD WARS</div><br/>
                        <div id="newtons" class="test">NEWTONS 1/3<sup>rd</sup> LAW</div><br/>
                       	<div id="sherlock" class="test">TREASURE HUNT</div><br/>
    	</div>
        <div id="eventsMain" style="font-family: 'Enriqueta', serif;">
        <div id="iroboticsDetails">
        <div class="head">I-ROBOTICS</div>
        <hr/>
        "I am  designed to avoid inefficiency" -isaac asimov on ROBOTS.<br/> 
Get handy with the most prestigious arena of mechanics with ROBOSAPIEN TECHNOLOGY, a milestone in Mobile Robotics Education in India. <br/>PREDATORDRONE, AIBO,PLEO AND BIGDOG - the gladiators of the robo collosseum - if they  unleash the avenger in you and your quench for supreme robotics, this is the chance for you to succumb under the mech wings spreading  from modern warfare to autonomous robotics . This well planned session is to boost your obsession of the genration X to the new level. Beginning with raw rookie knowledge , it supplements with e-robo-tricks and i-robo-tricks which comprise the designing of a live robosapien.<br/>Join and bask in the spirit of engineering, ingenuity, innovation and rise of the ultimate terminator in you.
<br/><br/><div>EVENT CO-ORDINATORS : </div><br />
<div>
Utkarsh Shukla (+91 9756136308)<br />
Chintan Shah (+91 7830933061)
</div>
		</div>
        <div id="worldrecordDetails">
        <div class="head">WORLD RECORD</div>
        <hr/>
        Yet again ,IIT Roorkee plans to set the milestone in Limca Book of Records. With prior distinction of creating the Largest World Map on paper in Evolution 2011 , this year we plan to go a mile further, creating the largest foorprint depicting the social stigmas, like poverty, female child infoeticide etc,crippling the present society. enought of blemishing and shattering of the crystal silhoutte of the reminiscent india. its time the generation exfoliates the vintaged scars and set a new beginning. Showcasing the engineers role in bulding a reputed society along with a automated one , the event comprises huge participation and charisma.
                <br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
                Kapil Aggarwal (+91 9675409518)
                </div>

		</div>
        <div id="spotlightDetails">
        <div class="head">SPOTLIGHT</div>
        <hr/>
        "There is nothing in machinery, there is nothing in embankments and railways and iron bridges and engineering devices to oblige them to be ugly. Ugliness is the measure of imperfection". When some of the most conspicous and sharpest minds across the country come together , we take it as a chance to resolve ambiguities and problems obstructing the developements in  technological as well as social aspects thus predicating innovation.This event amalgamates the micro level thinking to macro resolution of the problems persisting in day to day lives of the global village.
                <br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
                Chirag Aggarwal (+91 9045008504)<br />
                Bhupinder Singh (+91 7895943963)
                </div>

		</div>
        <div id="ideazDetails" style="visibility:visible;">
        <div class="head">IDEAZ</div>
        <hr/>
        <p>"We shall not cease from exploration and the end of all our exploring will be to arrive where we started and know the place for the first time".India is one of the fast growing consumer and host of technology and science. Innumerable unfathomed arenas science remains unraveled which can change the face of new human thinking and technology. we give a chance for students to array there innovative ideas, potential and thinking where the most valuable , dynamic , competent work get published in this event radiates a plethora of knowledge and the most awaiting breakthroughs of the century.<br/><br/>
The topics for evolution 2013 to be worked on are : <br/>
I)   Polymers and environment<br/>
II)   Nature inspired optimization and their applications in chemical industry<br/>
III)   Green Processing and System Closure<br/>
		</p>
        
        <div>EVENT CO-ORDINATORS : <br /><br />
        Dishant Sagar (+91 9045732218)<br />
        Lakshay Tanwar (+91 9536530190)<br />
        Email: ideaz.dpt.cognizance13@gmail.com
        </div>
        </div>
        <div id="newtonsDetails">
        <div class="head">NEWTONS 1/3<sup>rd</sup>LAW</div>
        <hr/>
         Have you ever thought about how chemicals cannot just simply move a mechanical vehicle but also make it perform certain tasks..? <br/>Besides being a safer alternative source of energy chemicals can be used to do the wildest things! In this contest you need to design a vehicle that uses chemical energy for propulsion, projection and also poses no harm to our environment. With baking soda or fuel cells, from steam engines to pressurized carbon dioxide containers, we are going to do it all. The goal is to develop a chemically powered vehicle capable of travelling a precise distance over a wooden plank then on the water surface and shoot a projectile, all in the minimum possible time. The best design would win the jackpot!
         <br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
         Shailendra (+91 8650557007)<br />
         Neha Bansal (+91 8126173475)
         </div>
		</div>
        <div id="illushunDetails">
        <div class="head">ILLUSHUN</div>
        <hr/>
        One of the most successful events of the fest of all times, this online treasure hunt is not only the pride of Evolution, but of Cognizance on the whole. The event holds the distinction of being a departmental event that also features in the centre stage events, and is the biggest crowd puller in the range of online events in Cognizance. The hunt tests one's mental ability, IQ, instinct, power of perception, crypto-graphical skills and last but not the least, your imagination, the foremost weapon one should carry. Put your thinking caps on, gear up with all mental allies and buckle up for a bumpy ride filled with adrenaline rush.
        <br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
        Adam Muhammad (+91 7830931567)<br />
        Sanjay Krishna (+91 9761174643)
        </div>
		</div>
        <div id="bullseyeDetails">
        <div class="head">BULL'S EYE</div>
        <hr/>
        According to Chanakya ,"Trading is the best occupation". <br/>Trading helps to adopt new approaches to run your organisation and foster an entrepreneurial culture. This is a mock stock exchange event consisting of investors and companies fighting to have maximum profit.<br/> Each Investor will be given a fixed amount of money from which they will invest in a company of their choice after a round of presentations by the companies about their business plans. Depending on their presentation and demand of their share ,the analyst team will decide the share prices of the companies  at the end of every round. After 3 to 4 rounds, best company and best investor with maximum profit will be declared to have hit the Bull's Eye!
        <br/><br/><div>EVENT CO-ORDINATORS : <br />
        <br />
        Aman Chawla (+91 9458540725) <br />
        Aman Kejriwal (+91 8859512293)
        </div>
		</div>
        <div id="expoDetails">
        <div class="head">POLYMER EXPO</div>
        <hr/>
        The prodigious growth of plastics industry in India has ensured consolidation and capacity expansion. It has also brought along best management practices along with globally competitive quality consciousness. Up gradation of machinery, more than sufficient availability of raw materials and the never say die attitude of the Indian Entrepreneur makes India the preferred global source for plastics. Keeping in view, the upsurge in the demand of polymers in the marketplace, Indian Institute of Technology (IIT) Roorkee will be organising its National exhibition on Plastics, Rubbers and their impact on the environment. More than 10 exhibitors are expected and around 100 Business visitors will be participating in the event. Moreover, a dedicated team of IIT Roorkee, Polymer Science students will be putting in their diligent efforts to enrich the industry with their research models, projects as well as ideas in the upcoming arenas of Polymers.
        
        In its debut two years back, this expo was a great hit at the fest, with a great exhibit of posters and various polymer samples on the theme of "Innovations in Polymers in 21st century" created wholly through the joint efforts of students and the faculty. This year, we aim at a bigger, better and a larger Polymex, with solicited co-operation from Industry as well. 
        <br/><br/><div>EVENT CO-ORDINATORS : <br><br>
		Sachin Bhagchandani	
		</div>
		</div>
        <div id="i2Details">
        <div class="head" >I<sup>2</sup></div>
        <hr/>
        Innovate and Integrate, the two catchphrases that characterise I-Square is a competition testing the scientific temperament of the students. <br/>
The first round of the event is an on line quiz which requires modest and conceptual thinking to be employed to qualitatively solve certain practical situations. Students successfully clearing this round, form teams of four and will be given a problem statement where every team is required to conceptualize, design and build from scratch a machine that solves the problem. The teams will be asked to visit our on-line store to choose and reserve the materials they would require to build the working model to solve the given problem in the third round, in the campus to finally implement the proposed idea to solve the problem in a limited amount of time and testing the machine to perform all the tasks for which it was designed to. <br/> <br/><br />
<a href="http://evolutioniitr.org/isquare/" target="_blank" style="color:#FFF; cursor:pointer;">PLAY Here</a>
<br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
K S Ganeshram (+91 9675579780)
</div>
		</div>
        <div id="spectrumDetails">
        <div class="head">SPECTRUM</div>
        <hr/>
        The sheer multitude of events that take place provide a challenging platform for the students to use their brains to provide practical and innovative on-the-spot solutions to different industry based problems.
        <br/><br/><div>EVENT CO-ORDINATORS : </div>
		</div>
        <div id="prototypeDetails">
        <div class="head">PROTOTYPE</div>
        <hr/>
Prototype is model making competition in which a participant is required to a prototype. This year a sonar based stick is required to make using a sonar concept. The same way a submarine works this stick will send information to mind which help him to make image of the surrounding  .        <br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
Hanshika Gupta (+91 9457428849)<br />
Ankit Saxena (+91 9675408816)<br />
Pooja Arya (+91 8954917542)
</div>
		</div>
        <div id="ceotalksDetails">
        <div class="head">CEO TALKS</div>
        <hr/>
An event which brings together inspiring and motivating personalities across the country to share their useful experiences of their journey to the bigger stage. It is one to which people with an ambition of becoming a successful entrepreneur can surely look for. Not only their ideas and views would surely help the individuals organize themselves properly but will also serve the purpose of personality development. This time we have a panel discussion on the theme – <b><i>"Potential of Conventional versus Renewable Energy Resources in India."</i></b><br /><br />
Come forward and experience the chance of meeting the best individuals in the business right throughout the country.
<br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
Mayank Gupta (+91 8859512199)<br />
Sahitya Movva (+91 9997260739)<br />
Rajat Agarwal (+91 9759710750)
</div>	</div>
        <div id="guestlecturesDetails">
        <div class="head">GUEST LECTURES</div>
        <hr/>
Once in a life time opportunity to the students to share a common platform with the most vivacious contemporary scientists and researchers who are pioneers in their respective fields. A chance to know them better, their success stories and future plans. Quench your thirst for knowledge and learn under the benign presence of veterans themselves! <b>Swasthika</b> is proud to play host to one of a kind experience that promises to increase your knowledge manifold.	
<br/><br/><div>EVENT CO-ORDINATORS :  <br /><br />
Mayank Gupta (+91 8859512199)<br />
Sahitya Movva (+91 9997260739)<br />
Rajat Agarwal (+91 9759710750)</div>	</div>
        <div id="ripplesDetails">
        <div class="head">RIPPLES</div>
        <hr/>
Unleash your wild creativity to design intricate devices that can perform a very simple task by a sequence of events, a “chain reaction”, in a very complex fashion. Armed with simple everyday machines and common household items you have to brainstorm and design complex, wacky and diabolically logical machines that can accomplish mundane and trivial tasks by roundabout means, what seemingly could be done simply. RIPPLES, a contest that seeks to be a way of helping students transcend traditional ways of looking at problems, by using a challenge that "must be completed in as creative a way as possible".<br/> SO GO CRAZY WITH YOUR INGENIOUS METHODS AND YOUR IMPECCABLE LOGIC TO DEMONSTRATE THAT UNNECESSARY CAN BE THE MOTHER OF INVENTION.		
<br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
Pankaj Sharma (+91 9675316031)<br />
Aashish Jindal (+91 8868090680)
</div></div>
        <div id="ecopolisDetails">
        <div class="head">ECOPOLIS</div>
        <hr/>
Are you curious to know what your mind can make you seem: a geek, playboy or maniac, etc.? Here is a chance to test your Logical Aptitude, General Knowledge and your Thinking Abilities including Imaginative Skills and discover other crazy facts about your mind you would find hard to believe . We would ask you several questions in various fields based on the mentioned topics and score you on its basis.<br/> The questions would be either in the written form or audio visuals or any other plausible type. The event would take place online as well as offline.<br/>So, Get ready for some heart-pounding & brain exhilarating action because this is Ecopolis where you wrestle with logic!!		
<br/><br/><div>EVENT CO-ORDINATORS : <br />
        <br />
        Sunit Arora (+91 9760082433) <br />
        Naveen Goyal (+91 8439003022)</div>
</div>
        <div id="encipherDetails">
         <div class="head">ENCIPHER</div>
        <hr/>
        Department of Paper Technology and Department of Polymer & Process Engineering presents one of the finest event of this year 'ENCIPHER'.
In which you will have to bid, have to try your luck & last but not the least have to perform... Raw Technical Tasks. Wanna test your skills like decision making, aptitude, technical general knowledge, IQ etc.. then consider yourselves lucky because we are providing an opportunity to compete with the best brains all over the globe....So get ready and , <b><i>"LET YOUR LUCK PLAY THE GAME WHILE U SOLVE THE RIDDLE"</i></b><br/><br />
<a href="https://docs.google.com/spreadsheet/viewform?formkey=dEgtbEpmbnZxbkZ2WXk4cnRxSDVYNkE6MQ" target="_blank" style="color:#FFF; cursor:pointer;">Register Here</a>
        <br/><br/><div>EVENT CO-ORDINATORS : <br />
        <br />
        Kanishk Jain (+91 8392883773) <br />
        Angesh Dhiman (+91 8650555351)<br />
        Shubham Dede(+91 8791223043)</div>
		</div>
        <div id="joyfestDetails">
        <div class="head">JOY FEST</div>
        <hr/>
Joyfest, the children expo to be exhibited is an attempt to integrate the vision of technology with high-school knowledge through a series of experiments and scientific models, to be shown to school - going children during the fest. The event will bring together professionals and school children on a common platform where the former will demonstrate interesting and insightful school – level experiments to the latter.
In aviskar there will be 5 different type competitions.<br/>
And this time in association of EDLOGIQ we are going to held a test based on a world acclaimed intelligence theory that not only test the aptitude and reasoning but also another six intelligence that a person have.

        <br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
        Piyush Dixit (+91 7830089774)<br />
        Deepak Dhalia (+91 9675410158)
        </div>
		</div>
        <div id="junkyardwarsDetails">
        <div class="head">JUNKYARD WARS</div>
        <hr/>
To create great inventions all you need is just some intellect and some junk. Come get your hands dirty engineer-style and witness wonders beings made out of virtually nothing!!<br/>
In Junkyard Wars, you’re going to have to bring out the beauty in the beast. This is the closest you could possibly get to actually performing magic. The contestants have to construct a working model from pile of trash and send their opponents back to scrapheap, as they take them on head-to-head.<br/>
Here you will have an opportunity to showcase all your engineering skills, as you work through to envisage and construct some of the most amazing things with nothing but junk.<br/>
It’s hard to make science any cooler than this! 
<br/><br/><div>EVENT CO-ORDINATORS : <br /><br />
Sahil Kumar (+91 8439550368)<br />
K S Ganeshram (+91 9675519180)
</div>		</div>
        <div id="sherlockDetails">
        <div class="head">TREASURE HUNT</div>
        <hr/>
Stage 1-<br />
Collection of clues based on photograph .On the basis of time and accuracy there will be eliminations to shortlist top 8 teams.<br />
Stage 2-<br />
Picking up the numbers/letters from different locations according to  map. Top 4 teams will be proceeding for further round.<br />
Stage 3-<br />
Each team have to go through set of clues to enter final stage.<br />
Stage 4-<br />
Final clue will be deciding and will eliminate the rest teams leaving behind the winner. On the basis of speed and accuracy winner will be decided.
<br /><br /><b>"JUST REVEAL THE ULTIMATE TRUTH BEHIND THE TIME"</b>
<br/><br/><div>EVENT CO-ORDINATORS : <br />
Chinmay Saraf (+91 8954912570) &nbsp;&nbsp;&nbsp; Sandeep Garrepally (+91 9761274026)
</div>		</div>
        </div>
    		
	</div><!--events ends-->
	<div id="spon">
<!--		    <div id="head" ><img src=""width="1200px"/></div>
-->
            <div style="position:relative; font-size:20px; float:left; left:360px; top:180px;"><b style="font-family: 'Unica One', cursive, Helvetica, Arial, sans-serif;  font-size: 1.6em; color:#000">TITLE SPONSOR:</b></div>
    <div class="sponsorListHolder">
	  <div class="sponsor1" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/india papers.png" alt="More about INDIA PAPERS" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image37','','images/Logos/india papers.png',1)"><img src="images/Logos/india papers bw.png" width="140" height="140" id="Image37" /></a>
				  </div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.indiapaper.com/">http://www.indiapaper.com/</a>
						</div>
					</div>
				</div>
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/ir tech.png" alt="More about IR TECH" /><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image27','','images/Logos/ir tech.png',1)"><img src="images/Logos/ir tech BW.png" width="140" height="140" id="Image27" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.irtech.in/">http://www.irtech.in/</a>
						</div>
					</div>
				</div>
				
				
				
				
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image29','','images/Logos/shreyans.png',1)"><img src="images/Logos/shreyans BW.png" width="140" height="140" id="Image29" /></a><img src="images/Logos/shreyans.png" alt="More about SHREYANS" /><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image34','','images/Logos/shreyans.png',1)"><img src="images/Logos/shreyans BW.png" width="140" height="140" id="Image34" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
						
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.shreyansgroup.com/">http://www.shreyans<br>group.com/</a>
						</div>
					</div>
				</div>
				
	  <div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/ipma.png" alt="More about IPMA" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image28','','images/Logos/ipma.png',1)"><img src="images/Logos/ipma BW.png" width="140" height="140" id="Image28" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
					
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.ipma.co.in/">http://www.ipma.co.in/</a>
						</div>
					</div>
				</div>
				
				
				
				
	  <div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/naini.png" alt="More about NAINI" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image30','','images/Logos/naini.png',1)"><img src="images/Logos/naini BW.png" width="140" height="140" id="Image30" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.nainigroup.com/">http://www.nainigroup.com/</a>
						</div>
					</div>
				</div>
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/c & c.png" alt="More about ebay" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image38','','images/Logos/c &amp; c.png',1)"><img src="images/Logos/c &amp; c bw.png" width="140" height="140" id="Image38" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
						
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.candcinfrastructure.com/">http://www.candc<br>infrastructure.com/</a>
						</div>
					</div>
				</div><div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/elof.png" alt="More about ELOF" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image31','','images/Logos/elof.png',1)"><img src="images/Logos/elof BW.png" width="140" height="140" id="Image31" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.elofhansson.com/">http://www.elofhansson.com</a>
						</div>
					</div>
				</div>
				
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/hpmc.png" alt="More about HMPC" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image39','','images/Logos/hpmc.png',1)"><img src="images/Logos/hpmc BW.png" width="140" height="140" id="Image39" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.hpmc.nic.in/">http://www.hpmc.nic.in/</a>
						</div>
					</div>
				</div>
			
            
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/AMAZON.png" alt="More about AMAZON" /><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image32','','images/Logos/AMAZON.png',1)"><img src="images/Logos/AMAZON BW.png" width="140" height="140" id="Image32" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.amazon-paprous.com/">http://www.amazon-paprous.com/</a>
						</div>
					</div>
				</div>
                
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/flytech.png" alt="More about FLYTECH" /><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image33','','images/Logos/flytech.png',1)"><img src="images/Logos/flytech BW.png" width="140" height="140" id="Image33" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.flextrude.com/">http://www.flextrude.com/</a>
						</div>
					</div>
				</div>
				
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/itc.png" alt="More about ITC" /><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image40','','images/Logos/itc.png',1)"><img src="images/Logos/itc BW.png" width="140" height="140" id="Image40" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.itcportal.com/">http://www.itcportal.com/</a>
						</div>
					</div>
				</div>
                
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="images/Logos/robo.png" alt="More about Robosapiens" /><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image41','','images/Logos/robo.png',1)"><img src="images/Logos/robo BW.png" width="140" height="140" id="Image41" /></a>
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							
						</div>
						<div class="sponsorURL">
							<a target="_blank" href="http://www.robosapiensindia.com/">http://www.robosapiens<br>india.com/</a>
						</div>
					</div>
				</div>
				
                <div class="sponsor" title="Click to flip">
					<div class="sponsorFlip"><p align="center">This could be you</p><br/>
					  <img src="images/plus.png" alt="This could be you" style="position:relative; top:80px; left:120px;" />
					</div>
                    
					
					<div class="sponsorData">
					  <div class="sponsorFlip"><p align="center">This could be you</p><br/>
						<img src="images/plus.png" alt="This could be you" style="position:relative; top:80px; left:120px;" />
					</div>
					</div>
				</div>
    </div>
        
	</div><!--spon ends-->
    
<!-- code for team starts here
-->	<div id="team">
		<div class="container1">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="">
							<img src="images/team/ankit.jpg" />
							<div><span>Convener Evolution'13</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Ankit Jain</div>
					</li>
					<li>
						<a href="">
							<img src="images/team/nirav.jpg" />
							<div><span>Co-Convener Evolution'13</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Nirav Gupta</div>
					</li>
				</ul>
			</section>
        </div>
        <div class="container2">
			<section>
				<ul id="da-thumbs" class="da-thumbs" style="width:1200px">
					<li>
						<a href="">
							<img src="images/team/ameya.jpg" />
							<div><span>Manager Finance</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Ameya Patkar</div>
					</li>
					<li>
						<a href="">
							<img src="images/team/tanmay.jpg" />
							<div><span>Manager Sponsors</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Tanmay Purohit</div>
					</li>
                    <li>
						<a href="">
							<img src="images/team/rajesh.jpg" />
							<div><span>Manager Marketing</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Rajesh Ranjan</div>
					</li>
					<li>
						<a href="">
							<img src="images/team/priya.jpg" />
							<div><span>General Organising Secretary</span></div>
						</a>
                        <div style="text-align:center; font-size:16px;">Priyadershita Singh</div>
					</li>
				</ul>
			</section>
        </div>
        <div class="container3">
			<section>
				<ul id="da-thumbs" class="da-thumbs" style="width:1200px">
					<li>
						<a href="">
							<img src="images/team/mohar.jpg" />
							<div><span>Manager Public Relations</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Mohar Singh</div>
					</li>
					<li>
						<a href="">
							<img src="images/team/yash.jpg" />
							<div><span>Manager Events - Department of Paper Technology</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Yash Singhvi</div>
					</li>
                    <li>
						<a href="">
							<img src="images/team/chinthan.jpg" />
							<div><span>Manager Events - Department of Polymer and Process Engineering</span></div>
						</a>
                        <div style="text-align:center; font-size:16px">Chintan Shah</div>
					</li>
				</ul>
			</section>
        </div>
		<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
		
		<script type="text/javascript">
			$(function() {
			
				$('#da-thumbs > li').hoverdir( {
					hoverDelay	: 30
				} );

			});
		</script>
        
        
        
	</div><!--
    
 code for team ends   
-->    
	<div id="contact">
    <div id="scrol">
<a><img src = "images/down.png"/></a>
    </div>

	<div id="wrap">
		<div id='form_wrap'>
			<form action="index.php" method="post">
				<p>Contact us</p>
				<label for="email">Your Message : </label>
				<textarea  name="message" value="Your Message" id="message" ></textarea>
				<label for="name">Name: </label>
				<input type="text" name="name" placeholder="your name"id="name" />
				<label for="email">Email: </label>
				<input type="text" name="email" placeholder="Email ID" id="email" />
				<input type="submit" name ="submit" value="Send us the message" />
			</form>
		</div>
	</div>
    <div id="contactRight">
    <table width="100%" height="100%" border="0" cellpadding="5" cellspacing="0" style="color:#000;">
    <tr><td colspan="2" align="center"><b style="font-family: 'Unica One', cursive, Helvetica, Arial, sans-serif;  font-size: 1.6em; color:#000">FACULTY ADVISORS</b></td></tr>
    <tr align="center"><td><b>Dr. Y.S. Negi<br />
    ynegifpt@iitr.ernet.in</b></td>
    <td><b>Dr. Millie Pant <br />millifpt@iitr.ernet.in</b>
    </td></tr>
    <tr><td colspan="2" align="center"><b style="font-family: 'Unica One', cursive, Helvetica, Arial, sans-serif;  font-size: 1.6em; color:#000">CONVENER</b></td></tr>
    <tr><td colspan="2" align="center"><b>Ankit Jain<br /> ankitjain.iitr@gmail.com <br />91-9536025909 </td></tr>
    <tr><td colspan="2" align="center"><b style="font-family: 'Unica One', cursive, Helvetica, Arial, sans-serif;  font-size: 1.6em; color:#000">CO-CONVENER</b></td></tr>
    <tr><td colspan="2" align="center"> <b>Nirav Gupta<br />gupta.nirav1@gmail.com<br />91-8650080308</b></td></tr>
    <tr><td colspan="2" align="center"><b style="font-family: 'Unica One', cursive, Helvetica, Arial, sans-serif;  font-size: 1.6em; color:#000">MANAGER FINANCE</b></td></tr>
    <tr><td colspan="2" align="center"><b> Ameya Patkar<br />ameya1991.iitr@gmail.com<br />91-7895799320</b> 
</td></tr>
    </table>
    
    </div>
  </div><!--contacts ends-->
    
    <div id="mainFoot" style="background-image:url(images/bg/black.jpeg); width:100%; height:200px;">
    <div style="position:relative; float:right; top:5px;" id="close"><img  src="images/close.png"/></div>
    <div style="position:relative; top:45%; left:40%; color:#CCC; font-size:18px;">All Rights Reserved | EVOLUTION '13</div>
    <div style="position:relative; top:7%; left:80%; color:#fff; font-size:20px;">
    Designer<br/>
    <a  target="_blank" href="htttp://www.facebook.com/kumarchitresh.sinha">KUMAR CHITRESH</a> <br/><br/>
    Programmers<br/>
    <a  target="_blank" href="http://www.facebook.com/deeps.sandy">Hari Sai</a> & <a  target="_blank"  href="http://www.facebook.com/vamshedhar">Vamshe</a>
    
    
    
    </div>
        </div>
</div><!--evolution-->
<script type="text/javascript">
jQuery(window).load(function() {
jQuery('#loading').fadeOut(2000);

window.setTimeout(function(){
						$('#robo').stop().animate({
                        left: -270
                    }, 1000
                    );
					},5000);


});


</script>
</body>

</html>