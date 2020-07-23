<?php

	class FunctionsDB {
		
		public static function query($query) {
			return self::executor($query)[0]->fetchAll(\PDO::FETCH_ASSOC);
		}

		public static function select($fields, $table, $cond) {
			$query = "SELECT $fields FROM $table WHERE $cond";
			return self::executor($query)[0]->fetchAll(\PDO::FETCH_ASSOC);
		}

		public static function insert($table, $fields, $values) {
			$query = "INSERT INTO $table ($fields) VALUE ($values);";
			return self::executor($query)[1];
		}

		public static function update($table, $valor, $cond) {
			$query = "UPDATE $table SET $valor WHERE $cond;";
			return self::executor($query)[0]->rowCount();
		}

		public static function delete($table, $cond) {
			$query = "DELETE FROM $table WHERE $cond;";
			return self::executor($query)[0]->rowCount();
		}

		public static function executor($query){
			$result = Executor::doIt($query);
			Database::closeCon();
			return $result;
		}

		// public static function insert_last_id($table, $fields, $values) {
		// 	$query = "INSERT INTO $table ($fields) VALUE ($values);";
		// 	$result = Executor::doIt($query);
		// 	Database::closeCon();
		// 	return $result[1];
		// }		
	}
?>