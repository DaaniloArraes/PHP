<?php
    $ranking = ["Danilo" => 900, "Dermival" => 800, "Elisangela" => 950] ;
 arsort($ranking);

?>
<h1>Ranking:</h1>
<ol>
<?php

foreach ($ranking as $key => $value) {
    echo "<li>". $key ." ". $value ."</li> <br>";  
    }  
?>
</ol>