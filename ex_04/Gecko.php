<?php

class Gecko {

        public $Age = "";
        private $name = "";
               

        function __construct($param = null, $param2 = null){
            $this->Age = $param2;
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

        function getAge(){
            return $this->Age;
        }

        function setAge(int $int){
            if(is_numeric($int)){
                $this->Age = $int;
            }  
        }

        function status(){

            $i = $this->Age;

            switch (true) {
                case ($i == 0):
                    echo "Unborn Gecko".PHP_EOL;
                    break; 
                case ($i === 1  || $i === 2):
                    echo "Baby Gecko".PHP_EOL;
                    break;
                case ($i >=3  && $i <=10):
                    echo "Adult Gecko".PHP_EOL;
                    break;
                case ($i >=11  && $i <=13):
                    echo "Old Gecko".PHP_EOL;
                    break;
                default:
                    echo "Impossible Gecko".PHP_EOL;
            }
        }
       
}
