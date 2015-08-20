<!DOCTYPE HTML>
<?php
$site=$_GET['site'];
$topic=$_GET['topic'];
$active=False;
$rnum=0;
?>
<!-- Copyright Christoph Sachse June 2015. All rights reserved -->
<html>
<head>
<title>Broward Plastic Surgery</title>

<!--links; technical shit-->
<!--Font:open sans+open sans condensed-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<!--Site-wide stylesheet for convenience and cacheing-->
<link rel="stylesheet" type="text/css" href="stylesheetmain.css"/>

<!--Icon-->
<link rel="icon" type="image/vnd.microsoft.icon" href="resources/favicon.ico" />

<!--metas-->
<meta name="Description" content="Dr. Sachse - Broward Plastic Surgery" />
<meta name="Keywords" content="Broward plastic surgery, cosmetic surgeon, cosmetic surgery, dr sachse, florida plastic surgery, 	" />
<meta name="copyright" content="" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="14 days" />
<meta name="rating" content="general" />
<meta http-equiv="Expires" content="0" />
<meta name="distribution" content="global" />
<meta name="verify-v1" content="SjN/+N+1dvovBYnaOFvCHIT3Hpt5o97e0Xv0xcZ+pH0=" />

<!--Google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66388483-1', 'auto');
  ga('send', 'pageview');
</script>

<!--back to normal stuff-->
<style type="text/CSS">
#menu{
	top:135px;
}
.menuoptional{
	top:185px;
	box-shadow:0px 0px 2px 1px #333333;
}
#main{
	padding:0px;
	margin:0px;
	position:absolute;
	top: 215px;
	left:0px;
	width:100%;
	height:auto;
	-webkit-linear-gradient(90deg,#555555,#aaaaaa,#555555); /* For Safari 5.1 to 6.0 */
	background: -o-linear-gradient(90deg,#555555,#aaaaaa,#555555); /* For Opera 11.1 to 12.0 */
	background: -moz-linear-gradient(90deg,#555555,#aaaaaa,#555555); /* For Firefox 3.6 to 15 */
	background: linear-gradient(90deg,#555555,#aaaaaa,#555555); /* Standard syntax */
	background-color:#666666;
	z-index:-3;
}
</style>
<script type="text/javascript">

//ensure page dimensions fit the screen and look nice, begins main scroller, etc.
var scrwidth,scrheight;
function initpage(){
	//get dimensions for later calculations
	scrwidth = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
	scrheight = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;
	document.getElementById("main").style.height=Math.max(scrheight-215,document.getElementById("centerdisp").offsetHeight+40)+"px";
}

//show selection display
function sdisplay(i){
	//IF format is changed away from a towards just divs, should animate class change here as well
	for(j=0;j<i;j++){
		document.getElementById("subdisp"+j).style.visibility="hidden";
	}
	for(j=i+1;j<=5;j++){
		document.getElementById("subdisp"+j).style.visibility="hidden";
	}
	document.getElementById('subdisp'+i).style.visibility="visible";
} 
</script>
</head>
<body onload="initpage()">
<div id="header">
	<a href="http://www.drsachse.com/"><img src="resources/logo_cursive.png" height="130" style="position:relative; left:3px;top:3px;"/></a>
	<span style="position:absolute;left:350px;top:15px;font-size:40px">954 202 9898</span>
	<span title="Find us!" style="position:absolute;left:350px;top:80px;font-size:20px;"><a href="http://www.drsachse.com/location" style="color:black;text-decoration:none;">2818 East Oakland Park Blvd. Ft. Lauderdale</a> </span>
	<div class="social">
		<a href="https://www.facebook.com/pages/Broward-Plastic-Surgery-PA-Rainer-Sachse-MD-FACS/511930418902673?fref=ts"><img src="resources/facebook.png" title="Facebook"/></a>
		<a href="http://www.plus.google.com"><img src="resources/googleplus.png" title="G+"/></a>
		<a href="mailto:Browardplastics@bellsouth.net?Subject=Hello%20there"><img src="resources/mail.png" title="Email"/></a>
		<a href="https://www.linkedin.com/pub/rainer-sachse-md-facs/77/8aa/606"><img src="resources/linkedin.png" title="LinkedIn"/></a>
	</div>
</div>

<div id="menu">
	<div class="menuoption">
	</div>
	<div class="menuoption " onmouseover="sdisplay(0);">
		<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com';">Home</span>
	</div>
	<?php if($site==="about"){$active="active";$rnum=1;}else{$active="";}
		echo '<div class="menuoption '.$active.'" onmouseover="sdisplay(1);">'; ?>
		<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/about';">About us</span>
	</div>
	<?php if($site==="procedures"){$active="active";$rnum=2;}else{$active="";}
		echo '<div class="menuoption '.$active.'" onmouseover="sdisplay(2);">'; ?>
		<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures';">Procedures</span>
	</div>
	<?php if($site==="cosmetics"){$active="active";$rnum=3;}else{$active="";}
		echo '<div class="menuoption '.$active.'" onmouseover="sdisplay(3);">'; ?>
		<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/cosmetics';">Non-Surgical</span>
	</div>
	<?php if($site==="testimonials"){$active="active";$rnum=4;}else{$active="";}
	echo '<div class="menuoption '.$active.'" onmouseover="sdisplay(4);">'; ?>
		<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/testimonials';">Photos & Testimonials</span>
	</div>
	<?php if($site==="contact"){$active="active";$rnum=5;}else{$active="";}
	echo '<div class="menuoption '.$active.'" onmouseover="sdisplay(5);">'; ?>
		<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/contact';">Contact Us!</span>
	</div>
</div>

<div id="subdisp0" class="menuoptional"></div>
<div id="subdisp1" class="menuoptional "><!-- -->
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/about#drsachse';">Dr. Sachse, MD FACS</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/about#cosmetician';">Martina Fici, cosmetician</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/about#staff';">Our staff</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/about#office';">Office & Facilities</span>
</div>
<div id="subdisp2" class="menuoptional"><!-- -->
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#abdominoplasty';">Abdominoplasty</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#blepharoplasty';">Blepharoplasty</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#breastaugmentation';">Breast augmentation</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#breastreduction';">Breast reduction</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#breastlift';">Breast lift</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#brachioplasty';">Brachioplasty</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#mohs';">Mohs surgery</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#facelift';">Face lift</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#liposuction';">Liposuction</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#otoplasty';">Otoplasty</span>
	<span class="pseudolink" onclick="window.location.href='http://www.drsachse.com/procedures#rhinoplasty';">Rhinoplasty</span>
</div>
<div id="subdisp3" class="menuoptional"><!-- -->
	<span class="pseudolink" onclick="window.location.href='#';"></span>
</div>
<div id="subdisp4" class="menuoptional"><!-- -->
	
</div>
<div id="subdisp5" class="menuoptional"><!-- -->
</div>

<!--JS/PHP selector for approbriate subdisp-->
<script type="text/javascript">
	sdisplay(<?php echo $rnum; ?>);
</script>

<div id="main">
	<?php 
	if($site==='location'){
		include 'location.php';
	}
	else{
		echo '<div id="centerdisp">';
		if($site==='about'){
			include 'about.php';
		}else if($site==='contact'){
			include 'contact.php';
		}else if($site==='procedures'){
			include 'procedures.php';
		}else if($site==='cosmetics'){
			include 'cosmetics.php';
		}else if($site==='testimonials'){
			include 'testimonials.php';
		}else{
			echo "Unfortunately, this site is not currently available. Go <a href='http://www.drsachse.com'>back</a>?";
		}
		echo "</div>";
	}
	?>
</div>
</body>
</html>