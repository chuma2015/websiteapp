<?php
//require_once("includes/config.php");

class MySQLDatabase{
	private $conn;
	public $last_query;
	private $magic_quotes_active;
	private $real_escape_string_exist;
	function __construct(){
		$this->connect();
		$this->magic_quotes_active = get_magic_quotes_gpc();
		$this->real_escape_string_exist = function_exists( "mysqli_real_escape_string" );
	}
	public function connect(){
		
		$this->conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);	
		if(!$this->conn){
			die("Connection to Database Failed!" .mysqli_error());
		}
		
	}
	
	public function db_close(){
		if(isset($this->conn)){
			mysqli_close($this->conn);
			unset($this->conn);	
		}
	}
	
	public function query($sql){
		$this->last_query = $sql;
		$give = mysqli_query($this->conn, $sql);
		$this->confirm_query($give);
		return $give;
	}
	
	public function fetch_array($set_output){
		return mysqli_fetch_array($set_output);	
	}
	
	private function confirm_query($give){
		if(!$give){
			$output = "Table query failed! " .mysqli_error(). "<br><br> Last sql Query: " .$this->last_query;
			die($output);
		}	
	}
	
	public function num_rows($set_output){
		return mysqli_num_rows($this->conn);
	}
	
	public function insert_id(){
		return mysqli_insert_id($this->conn);
	}
	
	public function affected_rows(){
		return mysqli_affected_rows($this->conn);
	}
	
	public function escape_value( $value ) {
		
		if( $this->real_escape_string_exist ) { 
			if( $this->magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysqli_real_escape_string( $this->conn, $value );
		} else { 
			if( !$this->magic_quotes_active ) { $value = addslashes( $value ); }
		}
		return $value;
	}
}

$db = new MySQLDatabase();

?>