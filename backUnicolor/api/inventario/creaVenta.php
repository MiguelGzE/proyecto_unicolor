<?php

    $array = array();
    foreach ($productos as $producto) {
        $query = FunctionsDB::query('CALL crea_venta('.$producto->id_producto.', '.$producto->cantidad.')');
        array_push($array, $query);
    }

    if($query){
        $json = array("status" => 1, "msg" => "Success", "data" => $array);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }
?>