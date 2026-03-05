<?php require_once("headerall.php"); ?>
<div id="inner">
<div class="wrap">
<div id="content-sidebar-wrap">
<div id="productSlideshow">
<div class="wrap"></div></div>
<div id="content" class="hfeed">
<div class="breadcrumb" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList"><a href="index.php"><span>Home</span>
</a> <span aria-label="breadcrumb separator">/</span> All News</div><div class="post-35 page type-page status-publish hentry entry"><h1 class="entry-title">All News</h1> 
<div class="entry-content"><div id="pl-35">
<div class="panel-grid" id="pg-35-0">
<div class="panel-grid-cell" id="pgc-35-0-0">
<div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-35-0-0-0"><div class="textwidget">


	<div class="span10">
          
            <!-- Tabs -->
            <div class="tabbable">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">General News</a></li>
                <li><a href="#tab2" data-toggle="tab">Tenders</a></li>
                <li><a href="#tab3" data-toggle="tab">Job Vacancy</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                  <h3>All General news and Events</h3>
                   <?php
			    $news = news::find_by_type(11); 
				 foreach($news as $new){ 
                          echo "
			
				<li>
					<div>
					<span ><img src='img/new.gif'></span>
					<a href='read_news.php?news_type=".$new->id."' title='".$new->title."' class='title'>".substr($new->title, 0, 55)."</a>
					</div>
					<hr class='hnews'>
					<div class='news_date'>
					Posted On: ".$new->date_post."
					
					</div>
				</li>
				
				";
				}?>
                </div>
                <div class="tab-pane" id="tab2">
                  <h3>All Tenders</h3>
				     <?php
			    $news = news::find_by_type(22); 
				 foreach($news as $new){ 
                          echo "
			
				<li>
					<div>
					<span ><img src='img/new.gif'></span>
					<a href='read_news.php?news_type=".$new->id."' title='".$new->title."' class='title'>".substr($new->title, 0, 55)."</a>
					</div>
					<hr class='hnews'>
					<div class='news_date'>
					Posted On: ".$new->date_post."
					
					</div>
				</li>
				
				";
				}?>
                </div>
                <div class="tab-pane" id="tab3">
                  <h3>All Job Vacancy</h3>
                      <?php
			    $news = news::find_by_type(33); 
				 foreach($news as $new){ 
                          echo "
			
				<li>
					<div>
					<span ><img src='img/new.gif'></span>
					<a href='read_news.php?news_type=".$new->id."' title='".$new->title."' class='title'>".substr($new->title, 0, 55)."</a>
					</div>
					<hr class='hnews'>
					<div class='news_date'>
					Posted On: ".$new->date_post."
					
					</div>
				</li>
				
				";
				}?>
                </div>
              </div>
            </div>
            <!-- Tabs End -->
          
     </div>
	


</div>
</div>
</div>
</div>
</div>
</div></div></div></div></div></div></div>
<?php include("footer.php")?>