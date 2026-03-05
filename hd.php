 <?php require_once("admin/required/config.php"); ?>
<?php require_once("admin/required/db.php"); ?>
<?php require_once("admin/required/pcgClasses.php");?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US" prefix="og: http://ogp.me/ns#">
<!-- Mirrored from www.plasco.co.tz/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2016 09:47:58 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="css/minify4471.css?file=315db/default.include.e88fcc.css" media="all" />
 <link href="css/styles.css" rel="stylesheet">
  
  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">


<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- This site is optimized with the Yoast SEO plugin v3.0.7 - https://yoast.com/wordpress/plugins/seo/ -->
<title>COASCO</title>
<meta name="description" content="COASCO"/>



<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' id='dashicons-css'  href='includes/css/dashicons.min.css' type='text/css' media='all' />
<script type='text/javascript' src='includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='includes/js/jquery/jquery-migrate.min.js'></script>
<script type="text/javascript">

			/***********************************************
			* Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
			* This notice MUST stay intact for legal use
			* Visit http://www.dynamicdrive.com/ for this script and 100s more.
			***********************************************/

			var delayb4scroll=5000 //Specify initial delay before marquee starts to scroll on page (5000=5 seconds)
			var marqueespeed=1 //Specify marquee scroll speed (larger is faster 1-10)
			var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

			////NO NEED TO EDIT BELOW THIS LINE////////////

			var copyspeed=marqueespeed
			var pausespeed=(pauseit==0)? copyspeed: 0
			var actualheight=''

			function scrollmarquee(){
			if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
			cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
			else
			cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
			}

			function initializemarquee(){
			cross_marquee=document.getElementById("vmarquee")
			cross_marquee.style.top=0
			marqueeheight=document.getElementById("marqueecontainer").offsetHeight
			actualheight=cross_marquee.offsetHeight
			if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
			cross_marquee.style.height=marqueeheight+"px"
			cross_marquee.style.overflow="scroll"
			return
			}
			setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
			}

			if (window.addEventListener)
			window.addEventListener("load", initializemarquee, false)
			else if (window.attachEvent)
			window.attachEvent("onload", initializemarquee)
			else if (document.getElementById)
			window.onload=initializemarquee


			</script>

<link href="img/favicon.png" rel="icon" type="image/png">
</head>
<body class="home blog header-full-width full-width-content agency">
<div id="nav2">
<div class="wrap">
<ul id="menu-plasco" class="menu genesis-nav-menu menu-primary" style="a color:white;">
<i class="list layout icon"></i>&nbsp; <a href="sitemap.php"> Site Map </a>||&nbsp; <a href="https://mail.coasco.go.tz"><i class="icon-envelope"></i> Staff Mail</a>||&nbsp;
			<i class="glyphicon glyphicon-user"></i> &nbsp;<a href="admin/index.php"> Admin Login</a>&nbsp;||&nbsp;<a href="gallery.php">Photo Gallery</a>
			&nbsp;|| &nbsp;<i class="icon-comment"></i> &nbsp;FAQs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
			<?php
		// prints something like: Wednesday the 15th
		echo date('l F j, Y');   
		?>
</ul>
</div>
</div>

<div id="wrap">
<div id="header">
<div class="wrap">
<div id="title-area">
<img src="img/header.png">
</div>
</div>
</div>

<div id="nav"><div class="wrap">
<ul id="menu-plasco" class="menu genesis-nav-menu menu-primary">
<li class="active"><a href="index.php" title="">Home</a></li>
                <li><a href="#" title=""><span>About Us</span></a>
  			      <ul> <!-- Submenu -->
                      <li><a href="background.php" title="">Background</a></li>
                      <li><a href="missionvision.php" title="">Mission &amp; Vision</a></li>
                      <li><a href="org_structure.php" title="">Organisation Structure</a></li>
                      <li><a href="objectives.php" title="">Objectives</a></li>
					  <li><a href="corporatemandate.php" title="">Corporate Mandate</a></li>
					   <li><a href="co_values.php" title="">Core Values</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>  
			   <li><a href="#" title=""><span>Directories</span></a>
  			      <ul> <!-- Submenu -->
                      <li><a href="d_audit.php" title="">Directorate of Audit</a></li>
                      <li><a href="drcb.php" title="">Directorate of Research and Consultancy Bureau </a></li>
                      <li><a href="dfa.php" title="">Directorate of Finance and Administration</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>  
				<li><a href="#" title=""><span>Services</span></a>
  			      <ul> <!-- Submenu -->
                      <li><a href="corpo_services.php" title="">Services offered by the Corporation</a></li>
                      <li><a href="service_to_clents.php" title="">Services to the Different Clients</a></li>
                      <li><a href="consultancy_services.php" title="">Consultancy Services</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>
				<li><a href="#" title=""><span>Regional Offices</span></a>
  			      <ul> <!-- Submenu -->
                   <li><a href="arusha.php" title=""> Arusha</a></li>
					<li><a href="dar.php" title=""> Dar Es Salaam</a></li>
					<li><a href="dodoma.php" title=""> Dodoma</a></li>
					<li><a href="iringa.php" title=""> Iringa</a></li>
					<li><a href="kagera.php" title=""> Kagera</a></li>
					<li><a href="kilimanjaro.php" title=""> Kilimanjaro</a></li>
					<li><a href="mbeya.php" title=""> Mbeya</a></li>
					<li><a href="morogoro.php" title=""> Morogoro</a></li>
					<li><a href="mtwara.php" title=""> Mtwara</a></li>
					<li><a href="mwanza.php" title=""> Mwanza</a></li>
					<li><a href="ruvuma.php" title=""> Ruvuma</a></li>
					<li><a href="shinyanga.php" title=""> Shinyanga</a></li>
					<li><a href="tabora.php" title=""> Tabora </a></li>
					<li><a href="tanga.php" title=""> Tanga</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>
                <li><a href="#" title=""><span>Publications</span></a>
  			      <ul> <!-- Submenu -->
                       <li><a href="jounals.php" title="">Journals</a></li>
                      <li><a href="research.php" title="">Researches &amp; Papers</a></li>
                      <li><a href="report.php" title="">Reports</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>
               <li><a href="#" title=""><span>Contacts</span></a>
  			      <ul> <!-- Submenu -->
                      <li><a href="contact.php" title="">Head Office</a></li>
                      <li><a href="r_offices.php" title="">Reginal Offices</a></li>
  		         </ul> <!-- End Submenu -->      
               </li>
               <!--  <li><a href="admin/index.php" title=""><span>Staff Information System</span></a>  </li>-->
               </ul>
               </div></div>
              
             
			