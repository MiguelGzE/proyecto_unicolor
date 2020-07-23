<?php

    // $query = FunctionsDB::query("SELECT id_producto, p.id_modelo, clave, cantidad, cm.id_marca, 
    // nombre_marca, modelo, precio, url_imagen
    // FROM productos p
    // JOIN cat_modelos cm ON p.id_modelo = cm.id_modelo
    // JOIN cat_marcas cma WHERE cm.id_marca = cma.id_marca");
    $query = FunctionsDB::query("SELECT * FROM punto_venta_view"); 

    if(count($query)){
        $json = array("status" => 1, "msg" => "Success", "data" => $query);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }

?>