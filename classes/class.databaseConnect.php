<?php
define('DB_NAME','id8851772_softwen');
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','mutillidae');
	class databaseConnect{

		protected $db_conn;
		public $db_name = DB_NAME;
		public $db_host = DB_SERVER;
		public $db_pass = DB_PASSWORD;
		public $db_user = DB_USERNAME;

		function connect(){
			try{
				$this->db_conn= new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	// Set the PDO error mode to exception
	$this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
	die("ERROR: Could not connect. " . $e->getMessage());
	}
	return $this->db_conn;
		}
	}
//check if running or not
// 	$databaseConnect = new databaseConnect;
// 	$databaseConnect->connect();

?>
