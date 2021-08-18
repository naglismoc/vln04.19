<?php



$letters = ['A','B','C','D','E','F'];
// print_r($letters);
// echo $letters[  rand(0 , count($letters) -1)   ];

for ($i=0; $i < 10; $i++) { 
    $arr[] = $letters[  rand(0 , count($letters) -1)   ];
}

foreach ($arr as $letter) {
   echo $letter." ";
}
echo "<br>";


for ($i=0; $i < 30; $i++) { 
    $arr[] = $letters[  rand(0 , count($letters) -1)   ];
}

//$arr
for ($i=0; $i < count($arr) ; $i++) { 
   echo $arr[$i]." ";
}
echo "<br>";

for ($i=0; $i < count($arr) ; $i++) { 
 
    if($arr[$i] == 'A'){
        echo $i.' ';
    }

 }


?>