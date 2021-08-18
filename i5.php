<?php

// $carsEmpty = [];

// $cars = array("Volvo", "BMW", "Toyota");
// array_push($cars,"blue","yellow");
// // print_r($cars);

// $carsEasy = ["Volvo", "BMW", "Toyota"];
// $carsEasy[] = "CAT";
// // print_r($carsEasy);
// // echo "<br>";
// // echo $carsEasy[4]."<br>";

// $asArr = ["car" => "Volvo", "pet" => "cat", 'food'=>'chocolate',1 => 7];
// // print_r($asArr);
// // echo "<br>";
// // echo $asArr[0]."<br>";

// $student = ["name" => "Jonas", "surname" => "Antanaitis","age" => 17];
// // print_r($student);
// // echo "<br>". $student['name'];

// for ($i=0; $i < count($cars); $i++) { 
//  echo $cars[$i].", ";
// }
// echo "<br>";
// foreach ($cars as  $key => $masina) {
//     echo $key.", ";
// }
// echo "<br>";
// foreach ($asArr as $key => $item) {
//    echo $key.", ";
// //    echo $item.", ";
// }


// $rndNums = [];

// for ($i=0; $i < 10; $i++) { 
//     $rndNums[$i] = rand(0,5);
// }
//     // print_r($rndNums);

//     $rndSmt = [];

//     for ($i=0; $i < 50; $i++) { 
//         $rndLetter = chr((rand(97,122)));
//         // echo $rndLetter;
//         $rndSmt[$rndLetter] = rand(0,50);
//     }
//     echo "<br>";
//     var_dump($rndSmt);
//     echo "<br>";

//     foreach ($rndSmt as $key => $value) {
//         $rndSmt[$key] = 0;
//     }

//     echo "<br>";
//     foreach ($rndSmt as $key => $value) {
//         echo $value." ";
//     }

$arr = [];
$klase = [[]];

$klase[0]['name'] = "Vladas";
$klase[0]['surname'] = "Nausėda";
$klase[0]['age'] = "67";
$klase[0]['location'] = "unknown";

$klase[1]['name'] = "Jokūbas";
$klase[1]['surname'] = "Valatka";

$klase[2]['name'] = "Liūtauras";
$klase[2]['surname'] = "Gruzdis";

$klase[3]['name'] = "Ona";
$klase[3]['surname'] = "Mažeikienė";
unset($klase[2]['name']);
print_r($klase);

foreach ($klase as $key => $mokinys) {
    foreach ($mokinys as $key => $domuo) {
       echo $domuo." ";
    }
    echo "<br>";
}


?>