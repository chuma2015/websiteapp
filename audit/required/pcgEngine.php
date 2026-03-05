<?php require_once("config.php"); ?>
<?php require_once("db.php"); ?>
<?php require_once("pcgClasses.php");?>
<?php
if(isset($_GET['action'])){
$action=$_GET['action'];
$className=$_GET['className'];
$id=$_GET['id'];
switch($action){
	case "del":
	switch($className){
		case "News":
			$user = News::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete News with id: ".$user->id."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$user->delete();
		break;
		case "Report":
			$user = publication::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete User with username: ".$user->id."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$user->delete();
		break;
		case "Resource":
			$lst = Resource::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Cattle with name: ".$lst->id."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Research":
			$lst = publication::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Order with name: ".$lst->name."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Journals":
			$lst = publication::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->act_name = "Delete Order with name: ".$lst->name."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Resource":
			$lst = resource::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Order with name: ".$lst->name."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Gallery":
			$lst = gallery::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Order with name: ".$lst->name."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Breed":
			$lst = Breed::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Breed with animal ID: ".$lst->animal_id."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Medical":
			$lst = Medical::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Medical with animal ID: ".$lst->animal_id."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "Sales":
			$lst = Sales::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->id = $session->uid;
				$act->act_name = "Delete Revenue and Expenses with name: ".$lst->name."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$lst->delete();
		break;
		case "SystemActivities":
			$act = SystemActivities::find_by_id($id);
			$act->delete();
		break;
		default:
		
		break;
	} 
	break;
	
	case "res":
	switch($className){
		case "User":
			$user = User::find_by_id($id);
			//save info to system activities
				$act = new SystemActivities();
				$act->act_name = "Reset User Password with username: ".$user->uname."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			$user->pwd = md5(sha1(strtoupper($user->lname)));
			$user->save();
		break;
		case "Orders":
			$order = Orders::find_by_id($id);
			//save info to system activities
			$st=0;
			if($order->payment != ""){ $st = 1;} else {$st = 0;}
				$act = new SystemActivities();
				$act->act_name = "Issue order with name: ".$order->name." and Order: ".$order->orders."";
				$act->date_performed = strtotime('now');
				$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
				$act->user_perform = $session->name;
				$act->uname_perform = $session->uname;
				$act->save();
			    $add = new Sales();
			    $add->name = $order->orders;
			    $add->category = "";
			    $add->groups = "Revenue";
			    $add->quantity = $order->quantity;
			    $add->amount = $order->payment;
			    $add->user_reg = $session->uname;
			    $add->date_performed = strtotime('now');
			    $add->date_reg = strftime("%B %d, %Y at %I:%M %p", $add->date_performed);
			    $add->save();
			$order->status = $st;
			$order->save();
		break;
		default:
		
		break;
	}
	break;

	case "edit":
	switch($className){
		case "News":
			$lis = News::find_by_id($id);
				echo "<form  class='form-horizontal' id='editform' action='required/pcgEngine.php?action=saveEdit&className=News&id=".$id."' method='post' enctype='multipart/form-data'>	
					<div class='modal-body'>
					<input name='id' type='hidden' value='".$id."'>
					  <div class='row'>
					    <div class='col-md-6'>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='title' type='text' value='".$lis->title."' required>
					      </div><br><br><br>
					      <div class='input-group'>
						      <span class='input-group-addon'>Details</span>
						      <input class='form-control' name='details' type='text' value='".$lis->details."' required>
					      </div><br><br><br>
						  <div class='input-group'>
						      <span class='input-group-addon'>Type</span>
						      <select class='form-control' name='type' required>
			                    <option selected value='' >Select Type</option>
			                    <option value='11'>General News</option>
			                    <option value='22'>Tenders</option>
			                    <option value='33'>Job Vacance</option>
			                  </select>
					      </div><br><br><br>
					      <div class='input-group'>
						      <span class='input-group-addon'>File</span>
						      <input  name='pic_name' type='file' id='file'>
					      </div><br>
					     
					    </div>
					  </div>
					      <hr class='dashed' />
					</div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
						<button type='submit' name='update' class='btn btn-primary btn-sm'>Save Updates</button>
					  </div>
					</form>";
		
		break;
		case "Report":
			$lis = Publication::find_by_id($id);
				echo "<form  class='form-horizontal' id='editform' action='required/pcgEngine.php?action=saveEdit&className=Report&id=".$id."' method='post' enctype='multipart/form-data'>	
					<div class='modal-body'>
					<input name='id' type='hidden' value='".$id."'>
					  <div class='row'>
					    <div class='col-md-6'>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='title' type='text' value='".$lis->title."' required>
					      </div><br><br><br>
					      <div class='input-group'>
						      <span class='input-group-addon'>Details</span>
						      <input class='form-control' name='description' type='text' value='".$lis->description."' required>
					      </div><br><br><br> 
					    </div>
					  </div>
					      <hr class='dashed' />
					</div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
						<button type='submit' name='update' class='btn btn-primary btn-sm'>Save Updates</button>
					  </div>
					</form>";
		
		break;
		case "Research":
			$lis = Publication::find_by_id($id);
				echo "<form  class='form-horizontal' id='editform' action='required/pcgEngine.php?action=saveEdit&className=Research&id=".$id."' method='post' enctype='multipart/form-data'>	
					<div class='modal-body'>
					<input name='id' type='hidden' value='".$id."'>
					  <div class='row'>
					    <div class='col-md-6'>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='title' type='text' value='".$lis->title."' required>
					      </div><br><br><br>
					      <div class='input-group'>
						      <span class='input-group-addon'>Details</span>
						      <input class='form-control' name='description' type='text' value='".$lis->description."' required>
					      </div><br><br><br> 
					    </div>
					  </div>
					      <hr class='dashed' />
					</div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
						<button type='submit' name='update' class='btn btn-primary btn-sm'>Save Updates</button>
					  </div>
					</form>";
		
		break;
		case "Journals":
			$lis = Publication::find_by_id($id);
				echo "<form  class='form-horizontal' id='editform' action='required/pcgEngine.php?action=saveEdit&className=Journals&id=".$id."' method='post' enctype='multipart/form-data'>	
					<div class='modal-body'>
					<input name='id' type='hidden' value='".$id."'>
					  <div class='row'>
					    <div class='col-md-6'>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='title' type='text' value='".$lis->title."' required>
					      </div><br><br><br>
					      <div class='input-group'>
						      <span class='input-group-addon'>Details</span>
						      <input class='form-control' name='description' type='text' value='".$lis->description."' required>
					      </div><br><br><br> 
					    </div>
					  </div>
					      <hr class='dashed' />
					</div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
						<button type='submit' name='update' class='btn btn-primary btn-sm'>Save Updates</button>
					  </div>
					</form>";
		
		break;
		case "Resource":
			$lis = Resource::find_by_id($id);
				echo "<form  class='form-horizontal' id='editform' action='required/pcgEngine.php?action=saveEdit&className=Resource&id=".$id."' method='post' enctype='multipart/form-data'>	
					<div class='modal-body'>
					<input name='id' type='hidden' value='".$id."'>
					  <div class='row'>
					    <div class='col-md-6'>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='title' type='text' value='".$lis->title."' required>
					      </div><br><br><br>
					    
					    </div>
					  </div>
					      <hr class='dashed' />
					</div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
						<button type='submit' name='update' class='btn btn-primary btn-sm'>Save Updates</button>
					  </div>
					</form>";
		
		break;
			case "Gallery":
			$lis = Gallery::find_by_id($id);
				echo "<form  class='form-horizontal' id='editform' action='required/pcgEngine.php?action=saveEdit&className=Gallery&id=".$id."' method='post' enctype='multipart/form-data'>	
					<div class='modal-body'>
					<input name='id' type='hidden' value='".$id."'>
					  <div class='row'>
					    <div class='col-md-6'>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='name' type='text' value='".$lis->name."' required>
					      </div><br><br><br>
					      <div class='input-group'>
						      <span class='input-group-addon'>Title</span>
						      <input class='form-control' name='description' type='text' value='".$lis->description."' required>
					      </div><br><br><br>
					    </div>
					  </div>
					      <hr class='dashed' />
					</div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
						<button type='submit' name='update' class='btn btn-primary btn-sm'>Save Updates</button>
					  </div>
					</form>";
		
		break;
		
		default:
		
		break;
	}
	break;
	
	case "saveEdit":
		switch($className){
			case "News":
				$f=$_FILES['pic_name'];
				$list = News::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Cattles with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
				$list->title = trim($_POST['title']);
				$list->details = trim($_POST['details']);
				$list->type = trim($_POST['type']);
				if($f==""){}else{
				$list->attach_file($f);}
				$list->save();
				redirect_to('../manage_news.php');
			break;
			case "Report":
				$f=$_FILES['pic_name'];
				$list = publication::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Poetry with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
					$list->title = trim($_POST['title']);
					$list->description = trim($_POST['description']);
					if($f==""){}else{
					$list->attach_file($f);}
					$list->save();
					redirect_to('../manage_reports.php');
			break;
			case "Research":
				$f=$_FILES['pic_name'];
				$list = publication::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Poetry with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
					$list->title = trim($_POST['title']);
					$list->description = trim($_POST['description']);
					if($f==""){}else{
					$list->attach_file($f);}
					$list->save();
					redirect_to('../manage_research.php');
			break;
			case "Journals":
				$f=$_FILES['pic_name'];
				$list = publication::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Poetry with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
					$list->title = trim($_POST['title']);
					$list->description = trim($_POST['description']);
					if($f==""){}else{
					$list->attach_file($f);}
					$list->save();
					redirect_to('../manage_journals.php');
			break;
			case "Resource":
				$f=$_FILES['pic_name'];
				$list = resource::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Poetry with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
					$list->title = trim($_POST['title']);
					$list->description = trim($_POST['description']);
					if($f==""){}else{
					$list->attach_file($f);}
					$list->save();
					redirect_to('../manage_resource.php');
			break;
			case "Gallery":
				$f=$_FILES['pic_name'];
				$list = Gallery::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Poetry with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
					$list->name = trim($_POST['name']);
					$list->description = trim($_POST['description']);
					if($f==""){}else{
					$list->attach_file($f);}
					$list->save();
					redirect_to('../manage_gallery.php');
			break;
			
			case "Orders":
				$list = Orders::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Order with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
				$list->name = trim($_POST['name']);
				$list->phone = trim($_POST['phone']);
				$list->email = trim($_POST['email']);
				$list->address = trim($_POST['address']);
				$list->orders = trim($_POST['orders']);
				$list->quantity = trim($_POST['quantity']);
				$list->transport = trim($_POST['transport']);
				$list->pickup_date = trim($_POST['pickup_date']);
				$list->payment = trim($_POST['payment']);
				$list->save();
				redirect_to('../?livestock=orders');
			break;
			case "Sales":
				$list = Sales::find_by_id($id);
				//save info to system activities
					$act = new SystemActivities();
					$act->act_name = "Update Sales with name: ".$list->name."";
					$act->date_performed = strtotime('now');
					$act->date_performed = strftime("%B %d, %Y at %I:%M %p", $act->date_performed);
					$act->user_perform = $session->name;
					$act->uname_perform = $session->uname;
					$act->save();
				$list->name = trim($_POST['name']);
				$list->groups = trim($_POST['groups']);
				$list->quantity = trim($_POST['quantity']);
				$list->amount = trim($_POST['amount']);
				$list->save();
				redirect_to('../?livestock=finance');
			break;
			default:
			
			break;
		}
	break;
	default:
	
	break;
 }

}
?>
  
		  <script>
		  $(function() {
			$( "#datepicker" ).datepicker({
			  changeMonth: true,
			  changeYear: true
			});
		  });
		  </script>
