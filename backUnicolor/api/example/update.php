<?php

    $update = FunctionsDB::update("usuarios", "usuario = 'usuarioUpdate', 
        email = 'usuarioUpdate@example.com'", "id_usuario = 6");

	if($update){
        $json = array("status" => 1, "msg" => "Success", "last_id" => $update);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }

?>