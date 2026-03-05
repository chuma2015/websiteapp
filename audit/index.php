<?php require_once("required/config.php"); ?>
<?php require_once("required/db.php"); ?>
<?php require_once("required/pcgClasses.php");?>
<?php if(isset($_POST['login'])){ $uname = trim($_POST['username']);
$pwdo = trim($_POST['password']);
$pwd = sha1($pwdo);
$found_user = User::authenticate($uname, $pwd);
if($found_user){
    $session->loggin($found_user);
    $act = new SystemActivities();
    $act->id= $session->uid;
    $act->act_name = "Loggin success";
    $act->date_performed = strtotime('now');
    $act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
    $act->user_perform = $session->name;
    $act->uname_perform = $session->uname;
    $act->save();
    redirect_to('home.php');
    
} else {
    $act = new SystemActivities();
    $act->act_name = "Attempt Loggin";
    $act->date_performed = strtotime('now');
    $act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
    $act->user_perform = $uname;
    $act->save();
    $msg = '<div class="col-md-4"></div>
							  <div class="col-md-4 alert alert-danger text-center" id="pacsal-fadeout" role="alert"><span class="glyphicon glyphicon-warning-sign">
							  </span> User Unknown</div>
							  <div class="col-md-4"></div>
						';	
					}
				
				} else {
					$uname = "";
					$pwd = "";
					$msg = "";	
				}	
			?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WELCOME TO THE COASCO STAFF LOGIN PANNEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
   <link href="../img/favicon.png" rel="icon" type="image/png">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>CoASCO Staff Management System</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post" name="login">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="Sign In">
	
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
