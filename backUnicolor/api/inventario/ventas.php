<?php

    // $query = FunctionsDB::query("SELECT rv.id_venta, rv.id_producto, rv.cantidad, rv.fecha_venta, p.id_modelo, cm.id_marca, clave, modelo,
    // precio, nombre_marca
    // FROM registro_ventas rv
    // JOIN productos p ON rv.id_producto = p.id_producto
    // JOIN cat_modelos cm ON p.id_modelo = cm.id_modelo
    // JOIN cat_marcas cma WHERE cm.id_marca = cma.id_marca");
    $query = FunctionsDB::query("SELECT * FROM ventas_view"); 

    if(count($query)){
        $json = array("status" => 1, "msg" => "Success", "data" => $query);
    }else{
        $json = array("status" => 0, "msg" => "Error");
    }

?>