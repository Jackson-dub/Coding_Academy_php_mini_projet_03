<?php

    class Gecko {

            public $Age = "";
            private $name = "";
            private $energy = 100;
            private $succes = false;
            private $resultDice = "";


            

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
                if($this ->resultDice !== 1){
                    return $this->name;
                }else{
                    echo "I'm too drunk for that... hic!".PHP_EOL;
                }
                    
            }

            function getAge(){
                if($this ->resultDice !== 1){
                return $this->Age;
                }else{
                    echo "I'm too drunk for that... hic!".PHP_EOL;
                }
            }

            function setAge(int $int){
                if($this ->resultDice !== 1){
                    if(is_numeric($int)){
                        $this->Age = $int;
                    } 
                }else{
                    echo "I'm too drunk for that... hic!".PHP_EOL; 
                } 
            }

            function status(){

            if($this ->resultDice !== 1){
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
            }else{
                    echo "I'm too drunk for that... hic!".PHP_EOL;
                }
            }
                


        function hello($param1 = null){

            switch(true){

                case ($param1 && !is_numeric($param1) && $this->name):
                    if($this ->resultDice !== 1){
                        echo "Hello ".$param1.", I'm ".$this->name."!".PHP_EOL;
                    }else{
                        echo "I'm too drunk for that... hic!".PHP_EOL;
                    }
                    break;
                case(!is_numeric($param1) && $this->name == false):
                    if($this ->resultDice !== 1){
                        echo "Hello ".$param1."!".PHP_EOL;
                    }else{
                        echo "I'm too drunk for that... hic!".PHP_EOL;
                    }
                    break;
                case (is_numeric($param1)&& $this->name):
                    if($this ->resultDice !== 1){
                        for($i=1; $i<= $param1; $i++){
                            echo "Hello, I'm ".$this->name."!".PHP_EOL;
                        }
                    }else{
                        echo "I'm too drunk for that... hic!".PHP_EOL; 
                    }
                    break;
                case (is_numeric($param1) && $this->name == false):
                    if($this ->resultDice !== 1){
                        for($i=1; $i<= $param1; $i++){
                            echo "Hello !".PHP_EOL;
                        }
                    }else{
                        echo "I'm too drunk for that... hic!".PHP_EOL;
                    }
                    break;
            }

        }

        function eat(string $foodType) {

            switch(true){
                case(ucwords(strtolower($foodType)) === "Meat"):

                    if($this ->resultDice !== 1){

                        echo "Yummy!".PHP_EOL;
                        if($this -> energy <= 90){
                            $this->energy = $this->energy + 10;
                        } 
                    }else{
                        echo "I'm too drunk for that... hic!".PHP_EOL;
                    }
                break;
                case(ucwords(strtolower($foodType)) === "Vegetable"):
                    if($this ->resultDice !== 1){
                        echo "Erk!".PHP_EOL;
                        if($this -> energy >= 10){
                            $this->energy = $this->energy - 10;
                        }
                    }else{
                        echo "I'm too drunk for that... hic!".PHP_EOL; 
                    } 
                break;
                default:
                if($this ->resultDice !== 1){
                    echo "I can't eat this.".PHP_EOL;
                }else{
                    echo "I'm too drunk for that... hic!".PHP_EOL; 
                } 
               
            }

    }


    function setEnergy(int $int){
        if($this ->resultDice !== 1){
            $this->energy = $int;

            switch(true){
                case($this->energy <= 0):
                    $this->energy = 0;
                    break;
                case($this -> energy >= 100):
                    $this->energy = 100;
                    break;
            }

            return $this->energy;
        }else{
            echo "I'm too drunk for that... hic!".PHP_EOL;
        }
    }

    function getEnergy(){

        if($this -> resultDice !== 1){
         return $this->energy;
        }else{
            echo "I'm too drunk for that... hic!".PHP_EOL;
        }
    }
   

    function work(){ 
       
        if($this -> energy >= 0 && $this -> energy <= 100){
 
            if($this -> energy >= 25){

                if($this -> resultDice !== 1){
                    echo "I'm working T.T".PHP_EOL;
                    $this -> energy = $this -> energy - 9;
                }else{
                    echo "I'm too drunk for that... hic!".PHP_EOL;
                } 
            }
            elseif($this -> energy < 25 || $this ->resultDice == 1){
                echo "Heyyy... I'm too sleepy, better take a nap!".PHP_EOL;
                $this -> energy = $this -> energy + 50;
            }
        }
        
     }
      
        
    function fraternize($param1){

            $typeFriend = gettype($param1);
            $friendName;
            
            if ($typeFriend == 'object'){
                $friendName = get_class($param1);
            };

            if(ucwords(strtolower($friendName)) === "Gecko"){
                switch(true){
                    case($this->energy <= 30):
                        echo "Sorry ".$param1 -> getName().", I'm too tired for going out tonight...".PHP_EOL;
                        echo "Oh ! That's too bad, another time then !".PHP_EOL;
                        break;
                    case($param1 -> energy <= 30):
                        echo "Sorry ".$this->name.", I'm too tired for going out tonight...".PHP_EOL;
                        echo "Oh ! That's too bad, another time then !".PHP_EOL;
                        break;
                    case($this->energy >= 30 && $param1 -> energy >= 30):
                        $this->energy = $this->energy - 30;
                        $param1 -> energy = $param1 -> energy - 30;
                        echo "I'm going to drink with ".$this->name." !".PHP_EOL;
                        echo "I'm going to drink with ".$param1->name." !".PHP_EOL;
                        $this -> resultDice = rand(1,6);
                        break;
                    case($this->energy < 30 && $param1 -> energy < 30):
                        echo "Not today !".PHP_EOL;
                        echo "Not today !".PHP_EOL;
                        break;
                    }
            }elseif(ucwords(strtolower($friendName)) === "Snake"){

                switch(true){
                    case($this->energy >=10):
                        $this->energy = 0;
                        echo "LET'S RUN AWAY !!!".PHP_EOL;
                        break;
                    case($this->energy < 10):
                        echo "...".PHP_EOL;
                        break;
                }

            }else
            {
                echo "No way".PHP_EOL;
            };
 
        }      
}
  


 // $dylan = new Gecko("Dylan");
 // $virginie = new Gecko("Lola");
// // $dylan -> hello("Teddy");
// // $dylan -> hello(2);
// // echo $dylan -> eat("string");
// // $dylan -> setEnergy("VEGETABLE");
// // $dylan -> setEnergy("VEGETABLE");
// // $dylan -> setEnergy("VEGETABLE");
//  $dylan -> setEnergy("VEGETABLE");
//  $dylan -> setEnergy("VEGETABLE");

//  $dylan -> setEnergy("VEGETABLE");
//  $dylan -> setEnergy("VEGETABLE");
//  $dylan -> setEnergy("VEGETABLE");

//   $dylan -> work();
//  echo $dylan -> getEnergy();
//  $dylan -> fraternize($virginie);
//  $dylan -> work();
//  echo $dylan -> getEnergy();
//  $dylan -> setEnergy(15);
//  $dylan -> fraternize($virginie);
//  $dylan -> hello("Teddy");

