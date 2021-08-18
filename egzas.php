$masyvas = [];
$count = 0;
 
for ($i=0; $i <30 ; $i++) { 
    $masyvas[] = rand(5, 25);
    if ($masyvas[$i] > 10) {
       $count++;  
    }
}
echo "<pre>";
echo "<br>";
print_r($masyvas);
echo "<hr>";
echo $count . " Skaičių, kurie daugiau už dešimt ";



 
// b.   Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli; 
echo "<br>";
echo "<hr>";
for ($i=0; $i < count($masyvas); $i++) { 
    if(max($masyvas) == $i){
      $count++;   
    }
}
 print_r($count);
//  array_count_values($masyvas);
 echo max($masyvas) . " Didžiausia reikšmė";