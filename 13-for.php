<?php

echo "calcular  Exponente<br>";

$base=2;
$exp=5;

$result=1;
$i=1;

/*while ($i <= $exp) {
    $result=$result*$base;
    $i++;
}*/

for ($i=0; $i <=$exp ; $i++) { 
    $result=$result*$base;
}

echo "El valor  de $base elevado a la $exp es $result ";


?>
