<?php

class Gecko {

        public $name = "";

        function __construct($param = null){

          $this->name = $param;

            if($param){
                echo "Hello ".$param." !".PHP_EOL;
            }else{
                echo "Hello !".PHP_EOL;
            }

            
        }   
       
}
