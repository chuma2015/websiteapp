<?php include("headerall.php"); ?>
<div id="inner">
<div class="wrap">
<div id="content-sidebar-wrap">
<div id="productSlideshow">
<div class="wrap"></div></div>
<div id="content" class="hfeed">
<div class="breadcrumb" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<a href="index.php"><span>Home</span></a> <span aria-label="breadcrumb separator">/</span>Photo Gallery</div>
<div class="post-35 page type-page status-publish hentry entry"><h1 class="entry-title">Photo Gallery</h1> 
<div class="entry-content"><div id="pl-35">
<div class="panel-grid" id="pg-35-0">
<div class="panel-grid-cell" id="pgc-35-0-0">
<div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-35-0-0-0"><div class="textwidget">

 <div class="span12"> 
  	<ul id="portfolio-filter">
        			<li class="active"><a href="#" class="filter" data-filter="*">All</a></li>
        			<li><a href="#" class="filter" data-filter=".seminar">Seminars</a></li>
					<li><a href="#" class="filter" data-filter=".audit">Auditing Activities</a></li>
        			<li><a href="#" class="filter" data-filter=".training">Training</a></li>
					<li><a href="#" class="filter" data-filter=".events">Different Events</a></li>
        		</ul>
    
        	<section class="row" id="portfolio-items">
              <ul class="portfolio">
                
                 <?php
			    $photos = gallery::find_by_category(1); 
				 foreach($photos as $new){ 
                          echo "  
                <li>
                  <article class='span3 project' data-tags='training'>     
                    <a href='#'>
                      <div class='square-1'>
                        <div class='img-container'>
                          <img src='admin/gallery/".$new->file_name."' alt=''>
                          <div class='img-bg-icon'></div>
                        </div>
                        <h3>".$new->name."</h3>
                        ".$new->description." 
                      </div>
                    </a>
                  </article>
                </li> 
                 ";
				 } ?>
				  <?php
			    $photos = gallery::find_by_category(2); 
				 foreach($photos as $new){ 
                          echo "  
                <li>
                  <article class='span3 project' data-tags='audit'>     
                    <a href='#'>
                      <div class='square-1'>
                        <div class='img-container'>
                          <img src='admin/gallery/".$new->file_name."' alt=''>
                          <div class='img-bg-icon'></div>
                        </div>
                        <h3>".$new->name."</h3>
                       ".$new->description."  
                      </div>
                    </a>
                  </article>
                </li> 
                 ";
				 } ?>
				  <?php
			    $photos = gallery::find_by_category(3); 
				 foreach($photos as $new){ 
                          echo "  
                <li>
                  <article class='span3 project' data-tags='seminar'>     
                    <a href='#'>
                      <div class='square-1'>
                        <div class='img-container'>
                          <img src='admin/gallery/".$new->file_name."' alt=''>
                          <div class='img-bg-icon'></div>
                        </div>
                        <h3>".$new->name."</h3>
                        ".$new->description." 
                      </div>
                    </a>
                  </article>
                </li> 
                 ";
				 } ?>
				  <?php
			    $photos = gallery::find_by_category(4); 
				 foreach($photos as $new){ 
                          echo "  
                <li>
                  <article class='span3 project' data-tags='events'>     
                    <a href='#'>
                      <div class='square-1'>
                        <div class='img-container'>
                          <img src='admin/gallery/".$new->file_name."' alt=''>
                          <div class='img-bg-icon'></div>
                        </div>
                        <h3>".$new->name."</h3>
                         ".$new->description." 
                      </div>
                    </a>
                  </article>
                </li> 
                 ";
				 } ?>
                
               
                
              </ul> 
            </section>    
  
  </div>

</div>
</div>
</div>
</div>
</div>
</div></div></div></div></div></div></div>
<?php include("footer.php")?>
  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>