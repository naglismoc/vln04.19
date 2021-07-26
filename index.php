<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cia HTML</h1>
    <script>
        console.log("cia js");
    </script>

<?php
 /*Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
 Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
 Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. 
 Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po 
 sekundžių pridėjimo ir pridedamų sekundžių skaičių.

*/

$h = rand(0,23);
$m = rand(0,59);
$s = rand(0,59);
$extraTime = rand(0,300);

echo "Time is:".
    substr("0".$h,-2).':'.
    substr("0".$m,-2).':'.
    substr("0".$s,-2).'<br>';
    
echo "Extra time is:".$extraTime.'<br>';

$newH = 0;
$newM = 0;
$newS = 0;

$newS = $s+$extraTime;

$newM =  $m + (int)($newS/60);
$newS = $newS%60;

$newH =  $h + (int)($newM/60);
$newM = $newM%60;

$days = "";
if($newH>23){
    $days = "01:"; 
    $newH = 0;
}

echo "Time is:".
    $days.
    substr("0".$newH,-2).':'.
    substr("0".$newM,-2).':'.
    substr("0".$newS,-2).'<br>';

    echo  strtoupper("gazelė").'<br>';
    echo  strtolower("GAZELĖ").'<br>';
    echo strlen('barsukas').'<br>';
    echo mb_strlen('gazelė','UTF-8').'<br>';
?>