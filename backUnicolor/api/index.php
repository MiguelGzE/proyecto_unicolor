<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
	include "../core/autoload.php";
	
	$Methods = new Methods();

	// function print_var_name($var) {
	// 	foreach($var as $var_name => $value) {
	// 		if ($value === $var) {
	// 			return $var_name;
	// 		}
	// 	}
	
	// 	return false;
	// }
	// function response($cond, $array) {
	// 	// $prueba = print_var_name($array);

	// 	if($cond){
	// 		$json = array("status" => 1, "msg" => "Success", "data" => $array);
	// 	}else{
	// 		$json = array("status" => 0, "msg" => "Error");
	// 	}
	// 	return $json;
	// }

    if ( $Methods->Method == 'GET' || $Methods->Method == 'POST' ) {
		if ( isset($Methods->Request['api']) ) {

			try{
				foreach( $Methods->Request as $param => $value ){
					${$param} = $value;
					if ( $Methods->isJson(${$param}) ) {
						${$param} = json_decode(${$param});
					}
				}
				$array_index = array();
				include $api.'.php';
				echo json_encode($json);
			}catch (Exception $e) {
				$json = array("status" => 0, "msg" =>  $e->getMessage());
				echo json_encode($json);
			}

		}else{
			$json = array("status" => 0, "msg" => "Error al cargar api");
			echo json_encode($json);
		}
	}else{
		$json = array("status" => 0, "msg" => "Método no aceptado");
	}