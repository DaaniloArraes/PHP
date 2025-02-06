<?php


$x = [0,"OI ", "<br>", 15 , "TUDO BEM?", 5, "<br>",20,"COM ",30,"VOCE?",150];

$y = 0;
while($y < 12){

    if(is_string($x[$y])){
       echo $x[$y];
    }

    $y++;
}

echo "<br> FIMMMM!";