<?php
require_once("db.php");

//start Session class
class Session{
	private $login=false;
	public $uid;
	public $uname;
	public $name;
	public $level;
		function __construct(){
			session_start();
			$this->confirm_login();
			if($this->login){
				//do this one
			}
			else{
				//do this	
			}
		}
		
		public function check_login(){
			return $this->login;
		}
		
		public function loggin($user){
			if($user){
				$this->uid = $_SESSION['uid'] = $user->id;
				$this->name = $_SESSION['name'] = $user->full_name();
				$this->uname = $_SESSION['uname'] = $user->username;
				$this->level = $_SESSION['level'] = $user->level;
				$this->login = true;	
			}
		}
		
		public function logout(){
			unset($_SESSION['uid']);
			unset($this->uid);
			unset($this->name);
			unset($this->uname);
			unset($this->level);
			$this->login = false;	
		}
		
		private function confirm_login(){
			if(isset($_SESSION['uid'])){
				$this->uid = $_SESSION['uid'];
				$this->name = $_SESSION['name'];
				$this->uname = $_SESSION['uname'];
				$this->level = $_SESSION['level'];
				$this->login = true;	
			}
			else {
				unset($this->uid);	
				$this->login = false;
			}
		}
	}
	$session = new Session();
// end session

////////////////////////////////common functions/////////////////////////////
	function strip_zeros_from_date( $marked_string="" ) {
	  // first remove the marked zeros
	  $no_zeros = str_replace('*0', '', $marked_string);
	  // then remove any remaining marks
	  $cleaned_string = str_replace('*', '', $no_zeros);
	  return $cleaned_string;
	}
	
	function redirect_to( $location = NULL ) {
	  if ($location != NULL) {
		header("Location: {$location}");
		exit;
	  }
	}
	
	function output_message($msg="") {
	  if (!empty($msg)) { 
		return "<p class='message'>".$msg."</p>";
	  } else {
		return "";
	  }
	}
	
////////////////////////////// end common functions///////////////////////////

//start class user	
class User{
	public $id;
	public $first_name;
	public $surname;
	public $username;
	public $password;
	public $level;
	public $picture;
	public $last_login;
	protected static $tb_name = "users";
	protected static $tb_fields= array('id','first_name','surname','username','password','level','picture','last_login');
		
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name."");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }
	
	public function full_name() {
		if(isset($this->first_name) && isset($this->surname)) {
		  return $this->first_name . " " . $this->surname;
		} else {
		  return "";
		}
	  }
	  
	public static function authenticate($username="", $password=""){
		global $db;
		$username = $db->escape_value($username);
		$password = $db->escape_value($password);
		$sql = 	"SELECT * from ".self::$tb_name." WHERE username='{$username}' AND password='{$password}' LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function save(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
		
		$sql = "INSERT INTO ".self::$tb_name." (".$keys.") VALUES('".$values."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
}
//end class User
//start class society
class society{
	public $id;
	public $regno;
	public $name;
	public $stype;
	public $rdate;
	public $fdate;
	public $status;
	public $location;
	public $share;
	public $activities;
	protected static $tb_name = "cooperatives";
	protected static $tb_fields= array('id','regno','name','stype','rdate','fdate','status','location','share','activities');
		
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name."");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }
	
	public function full_name() {
		if(isset($this->first_name) && isset($this->surname)) {
		  return $this->first_name . " " . $this->surname;
		} else {
		  return "";
		}
	  }
	  
	public static function authenticate($username="", $password=""){
		global $db;
		$username = $db->escape_value($username);
		$password = $db->escape_value($password);
		$sql = 	"SELECT * from ".self::$tb_name." WHERE username='{$username}' AND password='{$password}' LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function save(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
		
		$sql = "INSERT INTO ".self::$tb_name." (".$keys.") VALUES('".$values."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
}
//end class society


//start class SystemActivities
class SystemActivities{
	public $id;
	public $act_name;
	public $date_performed;
	public $user_perform;
	public $uname_perform;
	protected static $tb_name = "system_activities";
	protected static $tb_fields = array('id','act_name','date_performed','user_perform','uname_perform');
		
    public static function find_null() {
		return self::find_by_sql("SELECT NULL FROM ".self::$tb_name."");
	  }
    
    public static function find_null_uname($s_uname=null) {
		return self::find_by_sql("SELECT NULL FROM ".self::$tb_name." WHERE uname_perform=".$s_uname."");
	  }
    
	public static function find_all($limit=0) {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." ORDER by id DESC {$limit}");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  
	public static function find_by_name($uname_perform=null, $limit=0) {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE uname_perform='".$uname_perform."' ORDER by id DESC {$limit}");
	  }
	  
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }
	
	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function save(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
	
		$sql = "INSERT INTO ".self::$tb_name." (".$keys.") VALUES('".$values."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
 
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
}
//end class SystemActivities
//start class News
class news{
	public $id;
	public $type;
	public $title;
	public $details;
	public $file_name;
	public $file_type;
	public $file_size;
	public $user_post;
	public $date_post;
	public $views;
	protected static $tb_name = "news";
	protected static $tb_fields= array('id','type','title','details','file_name','file_type','file_size','user_post','date_post','views');
	
	private $temp_path;
	protected $upload_dir="./news";
	public $errors=array();
  
	protected $upload_errors = array(
		UPLOAD_ERR_OK 			=> "No errors.",
		UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
		UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
		UPLOAD_ERR_NO_FILE 		=> "No file.",
		UPLOAD_ERR_NO_TMP_DIR 	=> "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE 	=> "Can't write to disk.",
		UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
	);

	// Pass in $_FILE(['uploaded_file']) as an argument
	public function attach_file($file) {
		// Perform error checking on the form parameters
		if(!$file || empty($file) || !is_array($file)) {
		  // error: nothing uploaded or wrong argument usage
		  $this->errors[] = "No file was uploaded.";
		  return false;
		} elseif($file['error'] != 0) {
		  // error: report what PHP says went wrong
		  $this->errors[] = $this->upload_errors[$file['error']];
		  return false;
		} else {
			// Set object attributes to the form parameters.
		  $this->temp_path  = $file['tmp_name'];
		  $this->file_name   = basename($file['name']);
		  $this->file_type       = $file['type'];
		  $this->file_size       = $file['size'];
			// Don't worry about saving anything to the database yet.
			return true;

		}
	}
  
	public function save() {
		if(isset($this->id)) {
			$this->update();
		} else {
		    $this->create();
			// Make sure there are no errors
		  if(!empty($this->errors)) { return false; }
			// Can't save without filename and temp location
		  if(empty($this->file_name) || empty($this->temp_path)) {
		    $this->errors[] = "The file location was not available.";
		    return false;
		  }
			
			// Determine the target_path
		  $target_path = $this->upload_dir."/".$this->file_name;
		  
		  // Make sure a file doesn't already exist in the target location
		  if(file_exists($target_path)) {
		    $this->errors[] = "The file {$this->file_name} already exists.";
		    return false;
		  }
			// Attempt to move the file 
			if(move_uploaded_file($this->temp_path, $target_path)) {
		  	// Success
		  	 
				// Save a corresponding entry to the database
				if($this->create()) {
					unset($this->temp_path);
					return true;
				}
			} else {
				// File was not moved.
		    $this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
		    return false;
			}
		}
	}
	
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." ORDER by id DESC");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  public static function find_by_type($type=0) {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE type ={$type} ORDER by id DESC");
	  }
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }

	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function saveUpdate(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
		$keys1 = substr($keys,3);
		$values1 = substr($values,2);
		$sql = "INSERT INTO ".self::$tb_name." (".$keys1.") VALUES(".$values1."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
	
}
//end class news
//start class Publication
class publication{
	public $id;
	public $type;
	public $title;
	public $description;
	public $file_name;
	public $file_type;
	public $file_size;
	public $user_post;
	public $date_post;
	public $views;
	protected static $tb_name = "publications";
	protected static $tb_fields= array('id','type','title','description','file_name','file_type','file_size','user_post','date_post','views');
	
	private $temp_path;
	protected $upload_dir="./publications";
	public $errors=array();
  
	protected $upload_errors = array(
		UPLOAD_ERR_OK 			=> "No errors.",
		UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
		UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
		UPLOAD_ERR_NO_FILE 		=> "No file.",
		UPLOAD_ERR_NO_TMP_DIR 	=> "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE 	=> "Can't write to disk.",
		UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
	);

	// Pass in $_FILE(['uploaded_file']) as an argument
	public function attach_file($file) {
		// Perform error checking on the form parameters
		if(!$file || empty($file) || !is_array($file)) {
		  // error: nothing uploaded or wrong argument usage
		  $this->errors[] = "No file was uploaded.";
		  return false;
		} elseif($file['error'] != 0) {
		  // error: report what PHP says went wrong
		  $this->errors[] = $this->upload_errors[$file['error']];
		  return false;
		} else {
			// Set object attributes to the form parameters.
		  $this->temp_path  = $file['tmp_name'];
		  $this->file_name   = basename($file['name']);
		  $this->file_type       = $file['type'];
		  $this->file_size       = $file['size'];
			// Don't worry about saving anything to the database yet.
			return true;

		}
	}
  
	public function save() {
		if(isset($this->id)) {
			$this->update();
		} else {
			// Make sure there are no errors
		  if(!empty($this->errors)) { return false; }
			// Can't save without filename and temp location
		  if(empty($this->file_name) || empty($this->temp_path)) {
		    $this->errors[] = "The file location was not available.";
		    return false;
		  }
			
			// Determine the target_path
		  $target_path = $this->upload_dir."/".$this->file_name;
		  
		  // Make sure a file doesn't already exist in the target location
		  if(file_exists($target_path)) {
		    $this->errors[] = "The file {$this->file_name} already exists.";
		    return false;
		  }
			// Attempt to move the file 
			if(move_uploaded_file($this->temp_path, $target_path)) {
		  	// Success
				// Save a corresponding entry to the database
				if($this->create()) {
					unset($this->temp_path);
					return true;
				}
			} else {
				// File was not moved.
		    $this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
		    return false;
			}
		}
	}
	
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." ORDER by id DESC");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  public static function find_by_type($type=0) {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE type ={$type} ORDER by id DESC");
	  }
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }

	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function saveUpdate(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
		
		$sql = "INSERT INTO ".self::$tb_name." (".$keys.") VALUES('".$values."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
	
}
//end class publication

//start class resource
class resource{
	public $id;
	public $title;
	public $file_name;
	public $file_type;
	public $file_size;
	public $date_post;
	protected static $tb_name = "resources";
	protected static $tb_fields= array('id','title','file_name','file_type','file_size','date_post');
	
	private $temp_path;
	protected $upload_dir="./resources";
	public $errors=array();
  
	protected $upload_errors = array(
		UPLOAD_ERR_OK 			=> "No errors.",
		UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
		UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
		UPLOAD_ERR_NO_FILE 		=> "No file.",
		UPLOAD_ERR_NO_TMP_DIR 	=> "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE 	=> "Can't write to disk.",
		UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
	);

	// Pass in $_FILE(['uploaded_file']) as an argument
	public function attach_file($file) {
		// Perform error checking on the form parameters
		if(!$file || empty($file) || !is_array($file)) {
		  // error: nothing uploaded or wrong argument usage
		  $this->errors[] = "No file was uploaded.";
		  return false;
		} elseif($file['error'] != 0) {
		  // error: report what PHP says went wrong
		  $this->errors[] = $this->upload_errors[$file['error']];
		  return false;
		} else {
			// Set object attributes to the form parameters.
		  $this->temp_path  = $file['tmp_name'];
		  $this->file_name   = basename($file['name']);
		  $this->file_type       = $file['type'];
		  $this->file_size       = $file['size'];
			// Don't worry about saving anything to the database yet.
			return true;

		}
	}
  
	public function save() {
		if(isset($this->id)) {
			$this->update();
		} else {
		    $this->create();
			// Make sure there are no errors
		  if(!empty($this->errors)) { return false; }
			// Can't save without filename and temp location
		  if(empty($this->file_name) || empty($this->temp_path)) {
		    $this->errors[] = "The file location was not available.";
		    return false;
		  }
			
			// Determine the target_path
		  $target_path = $this->upload_dir."/".$this->file_name;
		  
		  // Make sure a file doesn't already exist in the target location
		  if(file_exists($target_path)) {
		    $this->errors[] = "The file {$this->file_name} already exists.";
		    return false;
		  }
			// Attempt to move the file 
			if(move_uploaded_file($this->temp_path, $target_path)) {
		  	// Success
				// Save a corresponding entry to the database
				if($this->create()) {
					unset($this->temp_path);
					return true;
				}
			} else {
				// File was not moved.
		    $this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
		    return false;
			}
		}
	}
	
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." ORDER by id DESC");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  public static function find_by_type($type=0) {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE cattype ={$type} ORDER by id DESC");
	  }
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }

	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function saveUpdate(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
		
		$keys1 = substr($keys,3);
		$values1 = substr($values,2);
		
		$sql = "INSERT INTO ".self::$tb_name." (".$keys1.") VALUES(".$values1."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
	
}
//end class news


//start class Gallery
class Gallery{
	public $id;
	public $name;
	public $description;
	public $category;
	public $catno;
	public $file_name;
	public $file_type;
	public $file_size;
	public $user_post;
	public $date_post;
	protected static $tb_name = "gallery";
	protected static $tb_fields= array('id','name','description','category','catno','file_name','file_type','file_size','date_post','user_post');
	private $temp_path;
	protected $upload_dir="./gallery";
	public $errors=array();
	
	protected $upload_errors = array(
		UPLOAD_ERR_OK 			=> "No errors.",
		UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
		UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
		UPLOAD_ERR_NO_FILE 		=> "No file.",
		UPLOAD_ERR_NO_TMP_DIR 	=> "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE 	=> "Can't write to disk.",
		UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
	);

	// Pass in $_FILE(['uploaded_file']) as an argument
	public function attach_file($file) {
		// Perform error checking on the form parameters
		if(!$file || empty($file) || !is_array($file)) {
		  // error: nothing uploaded or wrong argument usage
		  $this->errors[] = "No file was uploaded.";
		  return false;
		} elseif($file['error'] != 0) {
		  // error: report what PHP says went wrong
		  $this->errors[] = $this->upload_errors[$file['error']];
		  return false;
		} else {
			// Set object attributes to the form parameters.
		  $this->temp_path  = $file['tmp_name'];
		  $this->file_name   = basename($file['name']);
		  $this->file_type       = $file['type'];
		  $this->file_size       = $file['size'];
			// Don't worry about saving anything to the database yet.
			return true;

		}
	}
  
	public function save() {
		if(isset($this->id)) {
			$this->update();
		} else {
			// Make sure there are no errors
		  if(!empty($this->errors)) { return false; }
			// Can't save without filename and temp location
		  if(empty($this->file_name) || empty($this->temp_path)) {
		    $this->errors[] = "The file location was not available.";
		    return false;
		  }
			
			// Determine the target_path
		  $target_path = $this->upload_dir."/".$this->file_name;
		  
		  // Make sure a file doesn't already exist in the target location
		  if(file_exists($target_path)) {
		    $this->errors[] = "The file {$this->file_name} already exists.";
		    return false;
		  }
			// Attempt to move the file 
			if(move_uploaded_file($this->temp_path, $target_path)) {
		  	// Success
				// Save a corresponding entry to the database
				if($this->create()) {
					unset($this->temp_path);
					return true;
				}
			} else {
				// File was not moved.
		    $this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
		    return false;
			}
		}
	}
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." ORDER by id DESC");
	  }
	  
	public static function find_by_id($id=0) {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
	  }
	  
	public static function find_by_category($cat=0) {
		return self::find_by_sql("SELECT * FROM ".self::$tb_name." WHERE catno={$cat} ORDER by id DESC");
			
	  }
	public static function find_by_sql($sql="") {
		global $db;
		$result_set = $db->query($sql);
		$object_array = array();
		while ($row = $db->fetch_array($result_set)) {
		  $object_array[] = self::instantiate($row);
		}
		return $object_array;
	  }

	
	private static function instantiate($record) {
		// Could check that $record exists and is an array
    	$object = new self;
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  $object_vars = $this->attributes();
	  return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes(){
		$attributes = array();
		foreach(self::$tb_fields as $field ){
			if(property_exists($this, $field)){
				$attributes[$field] = $this->$field;	
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes(){
		global $db;
		$clean_attribute = array();
		foreach($this->attributes() as $key => $value ){
			$clean_attribute[$key] = $db->escape_value($value);	
		}
		return $clean_attribute;
	}
	
	public function saveUpdate(){
		return isset($this->id) ? $this->update() : $this->create();	
	}
	
	public function create(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$keys = join(", ", array_keys($attributes));
		$values = join("', '", array_values($attributes));
		
		$sql = "INSERT INTO ".self::$tb_name." (".$keys.") VALUES('".$values."')";
		if($db->query($sql)){
			$db->id = $db->insert_id();
			return true;	
		} else { return false; }
		
	}
	
	public function update(){
		global $db;
		$attributes = $this->sanitized_attributes();
		$attribute = array();
		foreach($attributes as $key => $value){
			$attribute[] = "{$key}='{$value}'";	
		}
		$attribute_join = join(", ", $attribute);
		$id = $db->escape_value($this->id);
		
		$sql = "UPDATE ".self::$tb_name." SET ".$attribute_join." WHERE id='".$id."'";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$id = $db->escape_value($this->id);
		$sql = "DELETE FROM ".self::$tb_name." WHERE id='".$id."' LIMIT 1";
		$db->query($sql);
		return ($db->affected_rows() == 1) ? true : false;
	}	
	
}
//end class Gallery


//author PCG ink.
?>