<?php


sayHi();
sayHi();
sayHi();
sayHi();
sayHi();
sayHiYou('Vadimai');
sayHiYou('Juste');
sayHiYou();
sum();



$vardas = "Andrius";
sayHiYou($vardas);

function sayHiYou($name = "") 
{
    echo "labukas ".$name."<br>";
}

 function sayHi() 
{
    echo "labukas<br>";
}



function sum($a = 0,  $b = 0){
    //if paduota ne skaiciai 
    echo $a+$b."<br>";
}
 $trueNumber = 22;
  $pi = myPi()."<br>";
  echo $pi;
  echo $trueNumber * myPi()."<br>";

function myPi(){
    return 3.1428;
}

$suma = sumReal("kiaune",40);
echo $suma."<br>";

function sumReal($a = 0,  $b = 0)
{
    if( !is_numeric($a) || !is_numeric($b)){
        return false;
    }


   return $a + $b;
}


/*
funkcija kuri iškvietus atspausdina tekstą "šiandien yra labai graži diena";
funkcija kuri vadintusi sq, priimtų vieną kintamąjį ir gražintų jo kvadratą.
 su default reikšme 0;
*/
h1("Kiaunė");
h1("Voras");
h1("-");

function h1($text){
    echo "<h1>".$text."</h1>";
    
}
recursion(5);

function recursion ($num){
    echo $num." ";
    if($num > 0){
        recursion($num -1);
    }
}

print_r(rndNumArr(20));
echo "<hr>";
print_r(rndNumArr(20,40,60));
something();
function something(){
    for ($i=0; $i < 10; $i++) { 
        echo "labas";
        if($i == 7){
            break;
        }
        echo "rytas";
    }
    echo 'dar vienas tekstas';

}







function rndNumArr($length, $from = null, $to = null){
    $arr = [];
    for ($i=0; $i < $length ; $i++) { 
      if(is_numeric($from) && is_numeric($to)){
        $rnd =  rand($from, $to);
      }else{
          $rnd = rand();
      }
        $arr[] =$rnd;
    }
    
    return $arr;
}
















function a (){
    echo "labas";
    echo "labas";
    b();
    echo "labas";
    echo "labas";
}

function b (){
    echo "rytas";
    echo "rytas";
}



function make($product){
    if(hasIngredients($product)){
        boilWater(); //async
        prepareCup($product);
        fillCup($product);
        while(waterNotReady()){
            thread.Sleep(100);
        }
        addWater();
        returnCup();
    }
}





?>