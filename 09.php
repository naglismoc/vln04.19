<!-- 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
        reikšmės - skaičiai nuo 0 iki 9.
        3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).
        3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu -->
<?php

$arr = [];

// $arr[0] = 7;
// $arr[3] = 20;
// $arr[5] = [7,3,5];

// $arr[5][1] = 20 ;

// $arr[][] = 7;


for ($i=0; $i < 10; $i++) { 
    $tmpArr = [];
    for ($a=0; $a < 10; $a++) { 
       $tmpArr[] = rand(0,9);
    }
    $arr[] = $tmpArr;
}

//2d
for ($i=0; $i < 10; $i++) { 
    for ($a=0; $a < 10; $a++) { 
       $arr[$i][] = rand(0,9);
    }
}

//3d
for ($i=0; $i < 10; $i++) { 
    for ($a=0; $a < 10; $a++) { 
        for ($h=0; $h < 10; $h++) { 
            $arr[$i][$a][] = rand(0,9);
         }
    }
}
?>