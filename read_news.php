<?php require_once("headerall.php"); ?>
<div id="inner">
<div class="wrap">
<div id="content-sidebar-wrap">
<div id="productSlideshow">
<div class="wrap"></div></div>
<div id="content" class="hfeed">
<div class="breadcrumb" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList"><a href="index.php"><span>Home</span></a>
 <span aria-label="breadcrumb separator">/</span> News In Detail</div><div class="post-35 page type-page status-publish hentry entry"><h1 class="entry-title">News In Detail</h1> 
<div class="entry-content"><div id="pl-35">
<div class="panel-grid" id="pg-35-0">
<div class="panel-grid-cell" id="pgc-35-0-0">
<div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-35-0-0-0"><div class="textwidget">


<div class="span8 well">
			<?php 
						if(isset($_GET['news_type'])){
						$news_id = $_GET['news_type'];
						$news = News::find_by_id($news_id);
						$news->views = $news->views+1;
						$news->save();
						?>
						<h4>Title: <span><?php echo $news->title; ?></span></h4>
						
						<?php echo "<p><br>".strip_tags(nl2br($news->details), '<b><br><p><a><i><u><ol><ul><li>')."</p>
						<hr>
								<p><small><span class='date'> Date Posted: ".$news->date_post."</span></small>
							</p>
							<p class='btn btn-blue'><a href='audit/news/original/".$news->file_name."' class='icon-signin hidden-tablet'> Download news here </a></p>";
							echo '
							<p><a class="more-button more-button-rtl" href="allnews.php" title="Back">View all News<span class="icon arrow-left">&nbsp;</span></a></p>
							';
						
						}?>
		</div>

</div>
</div>
</div>
</div>
</div>
</div></div></div></div></div></div></div>
<?php include("footer.php")?>