
<?php require_once("required/config.php"); ?>
<?php require_once("required/db.php"); ?>
<?php require_once("required/pcgClasses.php");?>
<?php include("admin_header.php")?>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php include("admin_menu.php")?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Manage Photo Gallery</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="col-xs-12">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Photos in Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
			  
			  <div class="row">
			  <div class="col-sm-12">
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
					<div class="col-sm-12 col-md-12 well">
					  <table class="table table-hover">
						<tr><th><small>Name</small></th><th><small>Category</small></th><th><small>Date Posted</small></th>
						<?php echo "<th><small>Action</small></th>"; ?></tr>
						<?php 
						$news = Gallery::find_all(); 
						foreach($news as $new){ 
						echo "<tr class='record'>
						<td><small>".substr($new->name, 0, 100)."</small></td>
						<td><small>".$new->description."</small></td>
						<td><small>".$new->date_post."</small></td>";
						echo "
						<td><a href='#' class='editbutton' title='Edit' id='ge".$new->id."' data-toggle='modal' data-target='#editRow'>
							  <span class='glyphicon glyphicon-edit'></span></a></td>
						<td><small><a href='#' class='delbutton' title='Delete' id='gd".$new->id."'>
						<span class='glyphicon glyphicon-trash'></span></a></small></td>"; echo "</tr>";
						} ?>
					  </table>
					  <!-- Modal -->
					<div style="margin-top: 50px;" class="modal fade" id="editRow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
					  <div class="modal-dialog model-sm">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Edit News Information</h4>
						  </div>
						  <div class="modal-body">
												
	
						</div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
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
			  
            <!-- /.box-body -->
          </div>
		   </div>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Designed and Constructed by</b> <a href="http://www.mocu.ac.tz/"> Moshi Cooperative Univrsity ICT Department</a>
    </div>
    <strong>Copyright &copy; 2016 <a href="http://coasco.go.tz">CoASCO</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<script type="text/javascript" src="dist/js/pacsal_subEngine.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
