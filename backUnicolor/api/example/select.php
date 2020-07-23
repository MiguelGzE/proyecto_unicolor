<?php

    // $query = FunctionsDB::select("*", "usuarios", "estatus = 1");
    $query = FunctionsDB::query("SELECT * FROM usuarios WHERE estatus = 1");

	// $data = array();
	// foreach ($query as $user) {
	// 	array_push($data, $user);
    // }
    
    // array_push($array_index, $data);

    // $json = response(count($query), $array_index);
    if(count($query)){
        $json = array("status" => 1, "msg" => "Success", "data" => $query);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }

?>