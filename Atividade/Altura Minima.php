<?php

 // Altura Minima

$H = 120;
$Am = [100, 120, 110, 121 ]; 

$C = 0;
foreach ($Am as $altura_minima) { 
    if ($H >= $altura_minima) { 
        $C++; 
    }
}

echo "Poderá ir em: $C brinquedos";
?>

