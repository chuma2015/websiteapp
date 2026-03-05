 <?php require_once("audit/required/config.php"); ?>
<?php require_once("audit/required/db.php"); ?>
<?php require_once("audit/required/pcgClasses.php");?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US" prefix="og: http://ogp.me/ns#">
<!-- Mirrored from www.plasco.co.tz/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2016 09:47:58 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="css/minify4471.css?file=315db/default.include.e88fcc.css" media="all" />
 <link href="css/styles.css" rel="stylesheet">
  
  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="assets/css/coasco.css"  rel="stylesheet">
  



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
			<i class="glyphicon glyphicon-user"></i> &nbsp;<a href="admin/index.php"> </a>&nbsp;||&nbsp;<a href="gallery.php">Photo Gallery</a>
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
<!---<h1 style="text-align:center; color:red; font-size:200%; font-style: oblique;" class="entry-title"><marquee><span ><img src='img/new.gif'></span>T A N Z I A : Uongozi wa Shirika (COASCO) unasikitika kutangaza kifo cha Mtumishi wake Ndugu SAAD A. WADAA kilichotokea tarehe 28.11.2018 katika Hospital ya Benjamini Mkapa iliyopo Jijini Dodoma Mazishi yatafanyika siku ya Alhamis tarehe 29.11.2018 majira ya saa saba mchana Jijini Dodoma. 
</marquee></h1>--> 
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
  		         <li class="active"><a href="https://sp.gepg.go.tz" title="">e- Payment Gateway </a></li>
               </li></ul></div></div>
               <?php include("notes.php");?>
              
        
			   <div id="home-slider"><div id="metaslider_widget-4" class="widget widget_metaslider_widget"><div class="widget-wrap"><!-- meta slider -->
<div style="width: 100%; margin: 0 auto;" class="metaslider metaslider-responsive metaslider-314 ml-slider">
    
    <div id="metaslider_container_314">
        
       
       
       
        <!--SLIDER-->
        <div class="slider-wrapper">
            <div class="cycle-slideshow" data-cycle-loader="wait" data-cycle-fx="fade" data-cycle-timeout="6000" data-cycle-loader="true" data-cycle-caption-plugin="caption2" data-cycle-pause-on-hover="true" data-cycle-carousel-fluid="true">
                <div class="cycle-overlay">
                </div>
 <img src="img/slider/katibu.jpg" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Katibu Mkuu wa Wizara ya Kilimo Bw Gerald M Kusaya wa pili kutoka kushoto kwa waliokaa akiwa katika kikao cha sitini na nane (68) cha Bodi ya Wakurugenzi COASCO Tarehe 22,Julai,2020 katika ukumbi wa jengo la  LAPF Dodoma</p></strong> ">
<img src="img/slider/rca.jpg" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Picha ya pamoja kati ya menejimenti na Wakaguzi wa UShirika COASCO katika kikao kazi kilichofanyika tarehe 15/07/2019 hadi 20/07/2019 katika ukumbi wa SUA mjini Morogoro</p></strong> ">
<img src="img/slider/staff2.jpg" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Wakaguzi wa Ushirika wa Mikoa na wasaidizi wao pamoja na Menejimenti ya COASCO wakiwa kwenye picha ya pamoja walipo kuwa kwenye kikao kazi kilichofanyika tarehe 15/07/2019 hadi 20/07/2019 katika ukumbi wa SUA mjini Morogoro</p></strong> ">
<img src="img/slider/staff.jpg" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Picha ya pamoja baada kikao kazi kati ya Menejimenti na wakaguzi Ushirika wa mikoa na wasaidizi wao kilichofanyika tarehe 15/07/2019 hadi 20/07/2019 katika ukumbi wa SUA mjin Morogoro</p></strong> ">
<img src="img/slider/gepg.jpg" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Wakaguzi wa Ushirika COASCO wakiwa katika mafunzo ya kufanya malipo kwa kutumia mfumo wa serikali wa kieletroniki (Government e-payment Gateway GEPG) kilichofanyika tarehe 22/04/2019 hadi 26/04/2019 katika ukumbi wa VETA Mjini Morogoro</p></strong> ">
<img src="img/slider/jengo.png" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Jengo la Makao Makuu ya Ofisi ya Shirika la Ukaguzi na Usimamizi wa Vyama Ushirika (COASCO) iliopo Jijini Dodoma</p></strong> ">
<img src="img/slider/bodi67.png" style="height: 450px width: 980px" data-cycle-title="" data-cycle-desc=" <srong><p>Katibu Mkuu wa Wizara ya Kilimo Bw Gerald M Kusaya watatu kutoka kushoto kwa waliokaa akiwa katika kikao cha sitini na saba (67) cha Bodi ya Wakurugenzi COASCO Tarehe 24,June,2020 katika ukumbi wa jengo la  LAPF Dodoma </p></strong> ">
            </div>

            <!--/cycle-slideshow-->
        </div>
        <!-- /.slider-wrapper -->
        <!--END SLIDER-->
       
       
       
       
       
       
       
       
       
       
       
       
       
       

       
    <script type="text/javascript">
        var metaslider_314 = function($) {
            $('#metaslider_314').responsiveSlides({ 
                timeout:3500,
                pager:false,
                nav:false,
                pause:true,
                speed:700,
                prevText:"&lt;",
                nextText:"&gt;",
                auto:true
            });
        };
        var timer_metaslider_314 = function() {
            var slider = !window.jQuery ? window.setTimeout(timer_metaslider_314, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_314, 1) : metaslider_314(window.jQuery);
        };
        timer_metaslider_314();
    </script>
</div>
<!--// meta slider--></div></div>
</div><!-- end #home-slider -->

