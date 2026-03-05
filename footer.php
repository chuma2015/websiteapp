<div id="footer" class="footer">
<div class="wrap">
<div <div id="col" class="span3">
	 <div class="footer-column-title ">Get In Touch</div>
		<div class="mot_margin"><div class="fix"><!-- (IE6 fix) -->
			<div class="stack">
					<p><b>CO-OPERATIVE AUDIT AND SUPERVISION CORPORATION (COASCO)</b></p>                                                                      
					<p>HEAD OFFICE<br>
					P. O.  BOX  761<br>
					DODOMA<br>
					Telephone:		<br>
					General Line:			026  2323265/2321485<br>
					Fax:				026  2321486<br>
					Email:	info@coasco.go.tz </p>
					  
            </div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="col" class="span3">
	<div class="footer-column-title ">Quick Access</div>
        <div class="mot_margin">
			<div class="fix"><!-- (IE6 fix) --><div class="stack">
						<ul>
						<li><a href="https://mail.coasco.go.tz">Staff Mail</a></li>
							<li><a href="https://www.gepg.go.tz">GePG</a></li>
								<li><a href="">Publications</a></li>
											<li><a href="">Tenders</a></li>
												<li><a href="">Frequently Asked Questions</a></li>
													<li><a href="">Photo Gallery</a></li>
														<li><a href="https://www.coasco.go.tz/sitemap.php">Sitemap</a></li>
														<li><a href="">Job Vacancy</a></li>
														<li><a href="https://www.coasco.go.tz/admin/resources">Download Center</a></li>

						</ul>
            </div>
		</div>
        <div class="clear"></div>
	</div>
</div>

<div id="col col-last" class="span3">
				<div class="footer-column-title ">Useful Links</div>
				
                    <div class="mot_margin"><div class="fix"><!-- (IE6 fix) --><div class="stack">
					<ul>
					 <li><a href="https://sp.gepg.go.tz">Government e-Payment Gateway</a></li>
					<li><a href="https://mail.coasco.go.tz">Government Mailing system<a></li>
					<li><a href="ushirika.coop">Tanzania Federation of Cooperatives Limited</a></li>
					<li><a href="kncutanzania.com">Kilimanjaro Native Co-operative Union 1984 - LTD<a></li>
					<li><a href="http://www.kilimo.go.tz/">Ministry of Agriculture Food Security and Cooperatives</a></li>
					</ul>
                    </div></div>
                    <div class="clear"></div></div>
                </div>
       
        <div class="span9">
		<hr>
         <center>
		 <p> &copy; 2019.CO-OPERATIVE AUDIT AND SUPERVISION CORPORATION (COASCO). All rights reserved. </p>
		
		 </center>
        <center><p><?php

			/* counter */

			//opens countlog.txt to read the number of hits
			$datei = fopen("countlog.txt","r");
			$count = fgets($datei,1000);
			fclose($datei);
			$count=$count + 1 ;
			echo " Visitors Counter: " ;
			echo "$count" ;
			echo "\n" ;

			// opens countlog.txt to change new hit number
			$datei = fopen("countlog.txt","w");
			fwrite($datei, $count);
			fclose($datei);

		?></p></center>
		</div> 

</div>
</div>
<link rel='stylesheet' id='metaslider-responsive-slider-css'  href='content/plugins/ml-slider/assets/sliders/responsiveslides/responsiveslides.css' type='text/css' media='all' property='stylesheet' />
<link rel='stylesheet' id='metaslider-public-css'  href='content/plugins/ml-slider/assets/metaslider/public.css' type='text/css' media='all' property='stylesheet' />
   <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>
  <!-- JavaScripts -->

<script type='text/javascript' src='content/themes/Plasco/lib/js/responsive-menu.js'></script>
<script type='text/javascript' src='includes/js/wp-embed.min.js'></script>
<script type='text/javascript' src='content/plugins/ml-slider/assets/sliders/responsiveslides/responsiveslides.min.js'></script>
