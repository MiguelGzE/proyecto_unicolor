<?php
	class Database {

		public static $db;
		public static $connection;
		
		function __construct(){
			$this->type = 'mysql';
			$this->database = "inventario";
			$this->server = "localhost";
			$this->user = "root";
			$this->pass = "";
		}

		public static function getCon(){
			self::$db = new Database();
			self::$connection = self::$db->connect();
			return self::$connection;
		}

		public static function closeCon(){
			self::$connection = null;
		}

		function connect() {
			try{
				$con = new PDO("{$this->type}:host={$this->server}; dbname={$this->database};charset=utf8",
				 $this->user, $this->pass);
				 return $con;
			}catch(PDOException $e){
				echo 'Error al conectarse a la base de datos. Detalle: ' . $e->getMessage();
				exit;
			}
		}

	}
?>