<?php

    $insert = FunctionsDB::insert("usuarios", "usuario, email, fecha, estatus", "'".$usuario."', '".$email."',
        now(), '1'");

	if($insert){
        $json = array("status" => 1, "msg" => "Success", "last_id" => $insert);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }

?>