

<style>

.text1{

    overflow-wrap: break-word;
}
.redNum{
    color:red;
    font-weight:900;
    writing-mode: vertical-lr;
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
}
.sq{
    display:inline-block;
    line-height:40%;
}
.red{
    color:red;
    font-weight:900;
}
</style>

<?php
/*
Naršyklėje nupieškite linija iš 400 “*”. 
a.Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
b.Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/

// echo "<div class=\"text1\">";
// for ($i=0; $i < 400; $i++) { 
//     echo "*";
// }

// echo "</div><hr>";


// for ($i=1; $i < 401; $i++) {
//     echo "*"; 
//     if($i % 50 ==0){
//    echo "<br>";
//     }
// }


// /*Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais 
// ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti 
// raudonos spalvos.
// */
// $count = 0;
// for ($i=0; $i < 300; $i++) { 
//   $num = rand(0,300);
//   if($num > 275){
//   echo '<span class="redNum">'.$num." </span>";
//   }else{
//     echo "<span>".$num." </span>";
//   }

//   if($num > 150){
//       $count++;
//   }
// }
// echo "<br>didesniu uz 150 - ".$count."<hr>";
/*
Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus 
tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
*/

// $text = "";
// for ($i=77; $i < rand(3000,4000); $i+=77) { 
//     $text .=  $i.", ";
// }
// echo substr($text,0,-2)."<br>";
 


/*

Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”.
 Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
*/


// for ($i=0; $i < 50; $i++) { 
//     for ($a=0; $a < 50; $a++) { 
//         if($i == $a){
//             echo "<div class=\"sq red\">*</div>";
//         }elseif(50  - $i - 1 == $a){
//             echo "<div class=\"sq red\">*</div>";
//         }
//         else{
//             echo "<div class=\"sq\">*</div>";
//         }
//     }
//     echo "<br>";
// }


/*
Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami
 rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm.
 Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm,
 bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti)
 , kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/

for ($i=1; $i < 6; $i++) { 
    $nailLength = 85;
    $nailed = 0;
    $count = 0;
    while($nailed < $nailLength){
        $count++;
        $taukst = rand(5,20);
        $nailed += $taukst;
        echo "taukšt! Šiuo smūgiu ".$i."-asis vinis įlindo į medį ".$taukst
        ."mm. Dabar vinis yra ".$nailed."mm gylyje. <br>" ;
    }
    echo $i."-ąjį vinį įkalėme ".$count." smūgiais.<br><br>";
}
echo "<hr>";

for ($i=1; $i < 6; $i++) { 
    $nailLength = 85;
    $nailed = 0;
    $count = 0;
    while($nailed < $nailLength){
        $count++;
        if(rand(0,1)){
            echo "Auch! my finger!<br>";
            continue;
        }
        $taukst = rand(20,30);
        $nailed += $taukst;
        echo "taukšt! Šiuo smūgiu ".$i."-asis vinis įlindo į medį ".$taukst
        ."mm. Dabar vinis yra ".$nailed."mm gylyje. <br>" ;
    }
    echo $i."-ąjį vinį įkalėme ".$count." smūgiais.<br><br>";
}
?>