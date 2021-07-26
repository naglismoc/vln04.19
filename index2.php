
<style>
div{

}
</style>

<?php

/*
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir 
pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir
 pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir 
pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, 
sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.


Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir
 pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, 
 sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.


Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.


Sukurti kintamąjį su stringu: “An American in Paris”.
 Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais:
 “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

Stringe, kurį generuoja toks kodas: 'Star Wars: 
Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

Suskaičiuoti kiek stringe “Don't Be a Menace to South Central
 While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės.
  Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save
   kvartale”.


Parašyti kodą, kuris generuotų atsitiktinį stringą iš 
lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

Papildomas.
Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine 
tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje 
pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)


*/

//1
$name = "Leo";
$surname = "Dicaprio";

if(strlen($name) < strlen($surname)){
    echo $name."<br>";
}

if(strlen($name) > strlen($surname)){
    echo $surname."<br>";
}

//2
echo strtoupper($name)."<br>";

echo strtolower($surname)."<br>";


echo $name[0].$surname[0]."<br>";
echo substr($name,0,1).substr($surname,0,1)."<br>";

//4

echo $name[0].$name[1].$name[2].$surname[0].$surname[1].$surname[2]."<br>";


echo substr($name,0,3).substr($surname,0,3)."<br>";

/*
5
Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.


*/
$anAmerican = "An American in Paris";
$anAmerican = str_replace("a","*",$anAmerican);
$anAmerican = str_replace("A","*",$anAmerican);
echo $anAmerican."<br>";

//6 Sukurti kintamąjį su stringu: “An American in Paris”.
 //Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

 $anAmerican = "An American in Paris";
 $count = substr_count($anAmerican,'a');
 $count += substr_count($anAmerican,'A');
echo $count."<br>";


/*

Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais:
 “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.


*/

$anAmerican = "An American in Paris";
$anAmerican = str_replace("a","",$anAmerican);
$anAmerican = str_replace("A","",$anAmerican);
$anAmerican = str_replace("e","",$anAmerican);
$anAmerican = str_replace("i","",$anAmerican);
echo $anAmerican."<br>";



"An Americn in Pris";


/*7?
Stringe, kurį generuoja toks kodas: 'Star Wars: 
Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
*/
// echo str_repeat('A', rand(0,5))."<br>";
$text = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $text."<br>";
echo substr($text,-14,1)."<br>";



/*
Suskaičiuoti kiek stringe “Don't Be a Menace to South Central
 While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės.
  Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save
   kvartale”.


*/
$text = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$textArr = explode(' ',$text);
$count = 0;
for ($i=0; $i < count( $textArr ); $i++) { 
   if( strlen($textArr[$i]) <= 5   )
   $count++;
}
echo $count."<br>";

$text2 = "tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$textArr = explode(' ',$text2);
$count = 0;
for ($i=0; $i < count( $textArr ); $i++) { 
   if( mb_strlen($textArr[$i],'UTF-8') <= 5   )
   $count++;
}
echo $count."<br>";



/*
Parašyti kodą, kuris generuotų atsitiktinį stringą iš 
lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.


*/

$letters = ['a','b','c','d','e','f','g'];

echo   $letters[ rand(0, count($letters)-1)  ]
        .$letters[ rand(0, count($letters)-1)  ]
        .$letters[ rand(0, count($letters)-1)  ];


        // $randTxt=chr((rand(97,122)));
        // echo $randTxt;


//  if(true){}
//  else'(oposite)'{}
//  while(true){}
//  for(true){}

//  function(){}
//  switch(){}

//  for( ;true; ){
//      echo "labas";
//  }


//  for( $i=12; $i < 17; ){
//      echo "labas ".$i." ";
//      $i++;
// }



for( $i=0 ; $i < rand(5,15); $i++){
        echo $i;
}

$rnd = rand(1,6);
echo "<h{$rnd}>{$rnd}</{$rnd}h>";

echo "<span>span</span><span>span</span><span>span</span><br>";
echo "<p>p</p><p>p</p><p>p</p><p>p</p><p>p</p>";

$textArr = explode(" ", $text);

for ($i=0; $i < count($textArr); $i++) {
    if (strlen($textArr[$i]) <= 5){
        $count ++;
    }
}




/*
Any live cell with two or three live neighbours survives.
Any dead cell with three live neighbours becomes a live cell.
All other live cells die in the next generation. Similarly, all other dead cells stay dead.

*/
?>
<span>span</span>
<p>p</p>