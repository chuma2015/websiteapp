
<?php include("header.php");?>
<div id="inner">
<div class="wrap">
<div id="content-sidebar-wrap">
<div id="productSlideshow">
<div class="wrap">
</div>
</div>
<div id="content" class="hfeed">
<div class="post-35 page type-page status-publish hentry entry">
<div class="entry-content">
<div id="pl-35"><div class="panel-grid" id="pg-35-0">
<div class="panel-grid-cell" id="pgc-35-0-0">
<div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-35-0-0-0">

<hr>
<div class="home-left">
	<div id="text-2" class="widget widget_text">
		<div class="widget-wrap">
			<h4 class="widget-title widgettitle">News &amp; Events</h4>
			<div class="textwidget">
				<div class="news" id="marquee">
				<div id="marqueecontainer" onmouseover="copyspeed=pausespeed" onmouseout="copyspeed=marqueespeed">
				<div id="vmarquee" style="position: absolute; left: 2px; right: 1px; top: 550px; height: 400px;">
				<?php  $newss = News::find_all(); 
				foreach($newss as $news){ 
				echo "
			
				<li>
					<div id='link2'>
					<span ><img src='img/new.gif'></span>
					 <a href='read_news.php?news_type=".$news->id."' title='".$news->title."' class='title'>".substr($news->title, 0, 55)."</a>
					</div>
					<hr class='hnews'>
					<div class='news_date'>
					Posted On: ".$news->date_post."
					
					</div>
				</li>
				
				";
				}?>
				</div>
				</div>
				</div>
				<p align="center" id='link2'><a href="allnews.php">Read all news <i class="icon-retweet"></i></a></p>
			<hr>
			</div>
		
				<div>
				
					<!-- Resources Container --> 
            <div  id="service2">
              <!-- Service Icon --> 
               <!-- Service Title --> 
              <div class="title-1"><h4>Download Center</h4></div>
              <!-- Service Content --> 
              <div class="text-1">
			  
					<div id="resources">
					<?php  $resources = resource::find_all(); 
				foreach($resources as $resource){ 
				echo "	<div id='rs'>
							<div id='rthumb'>
							<i class='icon-pushpin'></i>
							</div>
							<div id='rdetail'>
							<p id='link2'><b><a href='admin/resources/".$resource->file_name."'>".$resource->title."</a></b></p>
							<p>Uploaded on: <i>".$resource->date_post."</b></i></p>
							</div>
						</div><hr>
						";
						}?>
					   </div>
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
			</div>
			
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
			
			
			<div id="flexipages-6" class="home-right" height="200px">
				<div class="widget-wrap">

					
					<div id="service">
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
<div class="post-31 page type-page status-publish hentry entry">
<h1 class="entry-title">....................................................................................</h1> 
<div class="entry-content">
    

<div class="widget-wrap"><h3 class="widget-title widgettitle">KEY STAKEHOLDE</h>
                   
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
							<ul class="slides">
							  <li class="flex-active-slide" style=" float: left; display: block;">
							<div class="row">
              <div class="span2">
                <a href="http://www.ushirika.go.tz/en/" rel="external">
                    <img src="img/tcdc.jpeg">
                </a>
              </div>
              <div class="span2">
                <a href="http://mocu.ac.tz" rel="external">
                    <img src="img/mocu.png">
                </a>
              </div>
               <div class="span2">
                <a href="http://tanzania.go.tz" rel="external">
                   <img src="img/tanzania.png">
                </a>
              </div>
			</div>	
							</li>
								<li> 
			 <div class="row">
              <div class="span2">
                <a href="http://sccult.com" rel="external">
                    <img src="img/scult.gif">
                </a>
              </div>
              <div class="span2">
                <a href="http://www.bot-tz.org" rel="external">
                     <img src="img/bot.jpg">
                </a>
              </div>
              <div class="span2">
                <a href="http://www.nbaa.go.tz" rel="external">
                    <img src="img/nbaa.jpg">
                </a>
              </div>
            </div>  
          </li>
          <li>
            <div class="row">
              <div class="span2">
                <a href="http://mivarf.go.tz" rel="external">
                  <h3>MIVARF</h2>
                </a>
              </div>
			  <div class="span2">
                <a href="http://www.ushirika.go.tz" rel="external">
                    <h3>TFC</h2>
                </a>
              </div>
              <div class="span2">
                <a href="#" rel="external">
                     <h3>GENERAL PUBLIC</h2>
                </a>
              </div>
            </div>  
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


<?php include("footer.php");?>
</body>


</html>

