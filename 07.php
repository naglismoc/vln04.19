<?php
//3

$letters = ['A','B','C','D'];
// print_r($letters);
// echo $letters[  rand(0 , count($letters) -1)   ];
$arr1 = [];
$arr2 = [];
$arr3 = [];

for ($i=0; $i < 200; $i++) { 
    $arr1[] = $letters[  rand(0 , count($letters) -1)   ];
    $arr2[] = $letters[  rand(0 , count($letters) -1)   ];
    $arr3[] = $letters[  rand(0 , count($letters) -1)   ];
}

echo "A" < "B";

//4

// for ($i=0; $i < count($arr1); $i++) { 
//     for ($a = $i + 1; $a < count($arr1); $a++) {
//         if($arr1[$i] > $arr1[$a]){
//             $tmp = $arr1[$i];
//             $arr1[$i] = $arr1[$a];
//             $arr1[$a] = $tmp;
//         }
//     }
// }



/*
Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami 
atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
reikšmių ir kiek unikalių kombinacijų gavote.

*/

$arr4 = [];
for ($i=0; $i < count($arr1); $i++) { 
   $arr4[] = $arr1[$i].$arr2[$i].$arr3[$i];
}
print_r($arr4);

$arr5 = [];
//  ( [0]=>'ABC',[1]=>'CCD',[2]=>'ABC')

$arr4[0];


for ($i=2; $i < count($arr4); $i++) { 
    $arr5['ABC'] = $arr4[$i];
}


$arr6 = [];
for ($i=0; $i < count($arr4); $i++) { 
  if(!isset( $arr6[$arr4[$i]])){
    $arr6[$arr4[$i]] = 1;
  }else{
    $arr6[$arr4[$i]]++;
  }
}


echo "<hr>";
print_r($arr6);
echo "<hr>";
foreach ($arr6 as $key => $value) {
    if($value == 1){
        echo $key.", ";
    }
}

?>

ruta muravjova https://github.com/RutaMurav/Uzduotis 1
ernestas kapustinskas https://github.com/ErnestasK760/Testas/blob/main/testas.php 10
rokas Jackunas https://github.com/rokasjmusic/htdocs/blob/main/Phppirmapaskaita/index_egz.php 1
aidas merlov https://github.com/Aidas777/Regr/blob/main/index.php 5 bet pasistenges gali.
rugile grikietyte https://github.com/RugileG/PHP/blob/main/patikrinimas08-02.php 2? nzn ka cia padarė
jekaterina mazrimaite https://github.com/Imperative101/BIT8/blob/main/php1/index2.php 2?..
vidas gaidelis https://github.com/Vidohubas/mokymosi-proektai/blob/main/eg1.php 2
dovydas kaubrys chate 1
laura murauskaite https://github.com/murlau/20210801/blob/main/index.php 5?..
andrius repecka chate 5
juste sivochinaite https://github.com/justeSi/patikrinimas08_02/blob/main/index.php 6?
vadim markov https://github.com/Vadim851/drivetest 2


ruta muravjova  1
ernestas kapustinskas 10
rokas Jackunas  1
aidas merlov  5 bet pasistenges gali geriau.
rugile grikietyte 2? nzn ka cia padarė
jekaterina mazrimaite  2?..
vidas gaidelis  2
dovydas kaubrys chate 1
laura murauskaite  5?..
andrius repecka chate 5
juste sivochinaite  6? keista kad tiek mazai
vadim markov  2

Marijus Ilaras	10	a
Mantas Garliauskas	6	a
Šarūnas Kazakauskas	2	
Martynas Zinkevičius	2	
Roman Šaltis	2	
Gražvydas Molotokas	7	a
Justas Margelis	2	
Mantas Petrauskas	1	
Greta Šufinskaitė	3	a
Ieva Mačiulienė	8	a