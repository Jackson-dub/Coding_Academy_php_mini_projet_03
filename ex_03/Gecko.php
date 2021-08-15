<?php

class Gecko {

        private $name = "";

        function __construct($param = null){

          $this->name = $param;

            if($param){
                echo "Hello ".$param." !".PHP_EOL;
            }else{
                echo "Hello !".PHP_EOL;
            }

            
        } 
        
        function __destruct(){
            if($this->name){
                echo "Bye ".$this->name." !".PHP_EOL;
            }else{
                echo "Bye !".PHP_EOL;
            }
            
        }

        function getName(){
                return $this->name;
        }
       
}

// $thomas = new Gecko('Thomas');
// $anonymous = new Gecko();
// $serguei = new Gecko("Serguei");
// unset($serguei);
// echo $thomas->getName()."\n";
// echo $anonymous->getName()."\n";