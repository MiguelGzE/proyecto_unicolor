<?php
    $update = FunctionsDB::update('productos', 'cantidad = cantidad +'.$cantidad, 'id_producto ='.$id_producto); 

    if($update){
        $json = array("status" => 1, "msg" => "Success", "data" => $update);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }

?>