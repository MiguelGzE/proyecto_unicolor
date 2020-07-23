<?php

    class Methods {

        function __construct(){
            $this->Method = $_SERVER['REQUEST_METHOD'];
            if ($this->Method == 'GET') {
                $this->Request = $_GET;
            }else if ($this->Method == 'POST') {
                $this->Request = $_POST;
            }
        }

        public function isJson($string) {
            $result = (is_null(json_decode($string, true)))? false : true;
            return $result;
        }

    }
	
	

?>