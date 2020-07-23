<?php

class Executor {

	public static function doIt($sql){
		$connection = Database::getCon();
		$query = $connection->prepare($sql);
		$query->execute();
		return array($query, $connection->lastInsertId());
	}

}

?>