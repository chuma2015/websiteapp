
<?php include("header.php");?>

<div id="inner">
<div class="wrap">
<div id="content-sidebar-wrap">
<!-- <div id="productSlideshow">-->  
<div class="wrap">
</div>
</div>
<div id="content" class="hfeed" >
<div class="post-35 page type-page status-publish hentry entry">
<div class="entry-content" >
<div id="pl-35"><div class="panel-grid" id="pg-35-0">
<div class="panel-grid-cell" id="pgc-35-0-0">
<div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-35-0-0-0">



 <!--<hr>-->
<div class="home-left" style="margin-top:-7px">
	<div id="text-2" class="widget widget_text"  style="padding-top:-1px" >
		<div class="widget-wrap" style="   height: 220px ;">
			<h4 class="widget-title widgettitle" style="padding-top:25px ;">News &amp; Events</h4>
		
				<div class="news" id="marquee" style="padding:60px" >
			 	<div id="marqueecontainer" onmouseover="copyspeed=pausespeed" onmouseout="copyspeed=marqueespeed">
				<div id="vmarquee" style="position: absolute; left: 2px; right: 1px; top: 300px; height: 200px;">
				<?php  $newss = News::find_all(); 
				foreach($newss as $news){ 
				echo "
			
				<li>
				<div id='link2' >
					
					<span ><img src='img/new.gif'></span>
					 <a href='read_news.php?news_type=".$news->id."' title='".$news->title."' class='title'>".substr($news->title, 0, 55)."</a>
					<br> Posted On: ".$news->date_post."
					</div>
					
				</li>
				
				";
				}?>
				</div>
					
				</div>
			
				</div>
			
			</div>
		

		
				<div>
				
					<!-- Resources Container --> 
           	<div  id="service2" >
              <!-- Service Icon --> 
               <!-- Service Title --> 
             <div class="title-1" ><h4 style="padding-bottom:25px">Download Center</h4></div>
             <!-- Service Content --> 
              
			  
		 		<div id="resources">
				<?php  $resources = resource::find_all(); 
				foreach($resources as $resource){ 
		 	echo "	<div id='rs'>
							  
							<div id='rdetail'>
							<p id='link2'><b><a href='audit/resources/source/".$resource->file_name."'>".$resource->title."</a></b></p>
							<p>Uploaded on: <i>".$resource->date_post."</b></i></p>
							</div>
						</div>
						";
						}?>
					   </div>
				 
				  
            </div>
            <!--  Resources Container End --> 
			
				</div>
		
		</div>
	</div>
</div> 
<!---Start two-->

			<div id="flexipages-6" class="home-middle">
				<div class="widget-wrap">

					
					<div  id="service">
				<div class="ic-1"></div>
				 <div class="ic-1"><i class="icon-lightbulb"></i></div>
				<div class="title-1"><h3>Our Services</h3></div>
					<!-- List -->
				  <div class="text-1"> 
					<ul class="list-a">
					  <!-- List Items -->
					  <li>Audit of  financial statements</li>
					  <li>Conducting Investigations </li>
					  <li>Provide consultancy  services  </li>
					  <li>Conducting on job training </li>
					</ul>     
				  </div>
				  <!-- List End -->
			</div>
					
				</div>
			</div>
			
			<div id="flexipages-6" class="home-right">
				<div class="widget-wrap">

					
					<div id="service" style=" height:231px; position:relative;" >
              <div class="ic-1"><i class="icon-eye-open"></i></div>
              <div class="title-1"><h3>Our Key Stakeholder  </h3></div>
              <div class="text-1">
			  <?php include("s-holder.php");?>
              
            </div>
				</div>	
				</div>
			</div>


			
			
			<!--<div id="flexipages-6" class="home-right">
				<div class="widget-wrap"><h3 class="widget-title widgettitle">Recent Videos</h3>
					<div class="slider2 flexslider"> 
						<div style="overflow: hidden; position: relative;" class="flex-viewport">
				
						</div>
						<ol class="flex-control-nav flex-control-paging">
							<li><a class="flex-active">1</a></li><li><a class="">2</a>
							</li><li><a class="">3</a></li>
						</ol>
						<ul class="flex-direction-nav">
							<li><a class="flex-prev flex-disabled" href="#">Previous</a></li>
							<li><a class="flex-next" href="#">Next</a></li>
						</ul>
						<div style="overflow: hidden; position: relative;" class="flex-viewport">
							<ul style="width: 600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);" class="slides">
							  <li class="flex-active-slide" style="width: 370px; float: left; display: block;">
								<iframe src="https://www.youtube.com/embed/ahzMIF7ojOU" allowfullscreen="" frameborder="0" width="333"></iframe>                	</li>
								<li class="" style="width: 370px; float: left; display: block;">
								<iframe src="https://www.youtube.com/embed/ahzMIF7ojOU" allowfullscreen="" frameborder="0" width="333"></iframe>
								</li>
								<li class="" style="width: 370px; float: left; display: block;">
								<iframe src="https://www.youtube.com/embed/ahzMIF7ojOU" allowfullscreen="" frameborder="0"  width="333"></iframe>
							  </li>
							</ul>
						</div>
						<ol class="flex-control-nav flex-control-paging">
							<li><a>1</a></li>
							<li><a>2</a></li>
							<li><a>3</a></li>
						</ol>
					<ul class="flex-direction-nav">
						<li><a class="flex-prev flex-disabled" href="#">Previous</a></li>
						<li><a class="flex-next" href="#">Next</a></li>
					</ul>
				</div>
					
				</div>
			</div> -->
			
			<div id="flexipages-6" class="home-middle">
				<div class="widget-wrap">

					<div id="service">
              <div class="ic-1"><i class="icon-resize-small"></i></div>
              <div class="title-1"><h3>Our Clients</h3></div>
              <div class="text-1">         
				 <ul class="list-a">
              <!-- List Items -->
               <li> Cooperatives</li>
              <li> NGO's</li>
              <li> Public Coorporation</li>
			  <li> Financial Institutions and Banks</li>
			  <li> Other Companies</li>   
              </ul></div>
            </div>
			
				</div>
			</div>
			
			
		 	<div id="flexipages-6" class="home-right">
				<div class="widget-wrap">
					<div id="service" style=" height:270px; position:relative;">
              <div class="ic-1"><i class="icon-eye-open"></i></div>
              <div class="title-1"><h3>Audit &amp; Consultancy Services  </h3></div>
              <div class="text-1">
			  <ul class="list-a">
               <li>Audit Services to non Cooperative clients</li>
               <li>Audit Service to Cooperatives</li>
               <li>Consultancy Services</li>
			   </ul>
              </div>
            </div>
					
				</div>
			</div>



<!---End two-->

				

</div>
</div>




</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


  <script src="assets/js/cycle2.min.js"></script>
     
     <script src="assets/js/jquery.cycle2.tile.js"></script>
     <script src="assets/js/cycle2.shuffle.min.js"></script>    
<script>
jQuery(document).ready(function() {
    jQuery('.video-content').magnificPopup({
        type: 'iframe',


        iframe: {
            markup: '<div class="mfp-iframe-scaler ">' +
                '<div class="mfp-close "></div>' +
                '<iframe class="mfp-iframe " frameborder="0 " allowfullscreen></iframe>' +
                '<div class="mfp-title ">Some caption</div>' +
                '</div>'
        },
        callbacks: {
            markupParse: function(template, values, item) {
                values.title = item.el.attr('title');
            }
        }


    });
});
</script>

    <!--END PAGES JS-->
    <!--CUSTOM JS-->
  <script src="assets/js/custom.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

       
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
<?php include("footer.php");?>
</body>
</html>

