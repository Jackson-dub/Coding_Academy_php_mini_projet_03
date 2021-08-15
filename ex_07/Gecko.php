<?php

            class Gecko {

            public $energy = 100;
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
                


        function hello($param1 = null){

            switch(true){
                case ($param1 && !is_numeric($param1) && $this->name):
                    echo "Hello ".$param1.", I'm ".$this->name."!".PHP_EOL;
                    break;
                case(!is_numeric($param1) && $this->name == false):
                    echo "Hello ".$param1."!".PHP_EOL;
                    break;
                case (is_numeric($param1)&& $this->name):
                    for($i=1; $i<= $param1; $i++){
                        echo "Hello, I'm ".$this->name."!".PHP_EOL;
                    }
                    break;
                case (is_numeric($param1) && $this->name == false):
                    for($i=1; $i<= $param1; $i++){
                        echo "Hello !".PHP_EOL;
                    }
                    break;
            }

        }

        function eat(string $foodType) {

                switch(true){
                    case(ucwords(strtolower($foodType)) === "Meat"):
                        echo "Yummy!".PHP_EOL;
                        
                        if($this -> energy <= 90){
                            $this->energy = $this->energy + 10;
                        } 
                          
                    break;
                    case(ucwords(strtolower($foodType)) === "Vegetable"):
                        echo "Erk!".PHP_EOL;
                        if($this -> energy >= 10){
                            $this->energy = $this->energy - 10;
                        } 
                    break;
                default:
                    echo "I can't eat this.".PHP_EOL;
                    $this->energy = $this->energy;
                    }
        }


        function setEnergy(int $int){

            $this->energy = $int;

            switch(true){
                case($this->energy <= 0):
                    $this->energy = 0;
                    break;
                case($this -> energy >= 100):
                    $this->energy = 100;
                    break;
            }

        }

        function getEnergy(){
            return $this->energy;
        }
       

    function work(){ 
       
       if($this -> energy >= 0 && $this -> energy <= 100){

        if($this -> energy >= 25){
            echo "I'm working T.T".PHP_EOL;
           return $this -> energy = ($this -> energy - 9);
        }elseif($this -> energy < 25){
            echo "Heyyy... I'm too sleepy, better take a nap!".PHP_EOL;
           return $this -> energy = ($this -> energy + 50);
        }

       } 
       
    }
      
}



  //$dylan = new Gecko("Dylan");
// // // $dylan -> hello("Teddy");
// // // $dylan -> hello(2);
// // // echo $dylan -> eat("string");
   //$dylan -> setEnergy("VEGETABLE");
   //echo $dylan -> getEnergy();
  // $dylan -> setEnergy("15");
 // echo $dylan -> getEnergy();
//   $dylan -> setEnergy("VEGETABLE");
//   echo $dylan -> getEnergy();
//   $dylan -> setEnergy("VEGETABLE");
//   echo $dylan -> getEnergy();
//   $dylan -> setEnergy("meat");
//   echo $dylan -> getEnergy();
//   $dylan -> setEnergy("meat");
  // echo $dylan -> getEnergy();
//   $dylan -> setEnergy("meat");
//   echo $dylan -> getEnergy();
// //  $dylan -> setEnergy("VEGETABLE");
// //  echo $dylan -> getEnergy();
// //  $dylan -> setEnergy("meat");
// //  echo $dylan -> getEnergy();
// //  $dylan -> setEnergy("meat");
// //  $dylan -> setEnergy("VEGETABLE");
 // $dylan -> work();
// echo $dylan -> getEnergy();
  //$dylan -> setEnergy("meat");
 


