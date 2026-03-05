<?php include("headerall.php");?>
		
<div id="inner">
<div class="wrap">
<div id="content-sidebar-wrap">
<div id="productSlideshow">
<div class="wrap"></div></div>
<div id="content" class="hfeed">
<div class="breadcrumb" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList"><a href="index.php"><span>Home</span></a> 
<span aria-label="breadcrumb separator">/</span> Reports</div><div class="post-35 page type-page status-publish hentry entry">
<h1 class="entry-title">Reports</h1> 
<div class="entry-content"><div id="pl-35">
<div class="panel-grid" id="pg-35-0">
<div class="panel-grid-cell" id="pgc-35-0-0">
<div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-35-0-0-0"><div class="textwidget">
<div class="span10">	

<?php	//to be converted to OOP
						$count = 0;
						if(isset($_GET['pagenation'])){
							$pagenation = preg_replace("#[^0-9]#","",$_GET['pagenation']);}
						else { $pagenation=1; }	
						$perPage=14;
						$lastPage = ceil($count / $perPage);
						if($pagenation < 1){ $pagenation = 1;} 
						elseif($pagenation > $lastPage){ $pagenation = $lastPage; }
						if($count>0){
						$limit = "LIMIT " . ($pagenation-1)*$perPage . ", $perPage";
						} else {$limit = "LIMIT 0, 0";}
					?>
                 <div class="table-responsive">
					<div class="col-sm-12 col-md-12">
						<div class="input-group">
						<span class="input-group-addon"><small>Search by keywords</small></span>
						<input type="text" class="form-control input-sm" placeholder="Type keyword" name="filter" value="" id="filter" />
						</div>
					</div>
					<br><br>
					<div class="span10">
								  <?php
						    $publications = publication::find_by_type(3); 
							 foreach($publications as $new){ 
			                          echo "
						<div class='span4 well'>
							<div id='pb'>
							<div id='pbtitle'>
								<p><b>".$new->title."</b></p>
								<hr>
							</div>
							<div id='pbdetails'>
								<blockquote>".$new->description."</blockquote>
							</div>
							<div id='pbauthor'>
							<p><b>Date:".$new->date_post."|Download</b></p>
							</div>
							</div>
						</div>
						
						";
						}?>
				  </div>
				  
                </div>
                
                <ul class="pagination pagination-sm">
						<?php
						if($lastPage != 1){
							if($pagenation == 1){
							echo "<li class='disabled'><a href='#'>&laquo;</a></li>"; }
							if($pagenation != 1){
								$prev = $pagenation - 1;
								echo "<li><a href='?livestock=logs&pagenation=".$prev."'>Prev</a></li>";
							}
							for($a=1; $a<=$lastPage; $a++){
								if($a==$pagenation){echo "<li class='active'><a href='#'>$a <span class='sr-only'>(current)</span></a></li>"; }
									else { echo "<li><a href='?livestock=logs&pagenation=".$a."'>$a</a></li>"; }
							}
								if($pagenation != $lastPage){
									$next = $pagenation + 1;
									echo "<li><a href='?livestock=logs&pagenation=".$next."'>Next</a></li>";
								}
								if($pagenation == $lastPage){
									$next = $pagenation + 1;
									echo "<li class='disabled'><a href='#'>&laquo;</a></li>";
								}
						}
						?>
					</ul>
			  

</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div></div></div></div></div>
<?php include("footer.php")?>