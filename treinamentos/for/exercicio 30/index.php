<?php

/*$y = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($x = 0; $x < count($y); $x++){
    if ($y[$x] % 2 == 0){
        echo $y[$x] . "<br>";
    }
}*/

/*$array = [];

for($x = 1; $x < 11; $x++){
    
    array_push($array, $x);

}
print_r($array);
*/


$array = [];

for($x = 10; $x < 21; $x++){
    
    array_push($array, $x);
}

for($x = 0; $x < count($array); $x++){
    if ($array[$x] % 2 != 0){
        echo $array[$x] . "<br>";
    }
}

