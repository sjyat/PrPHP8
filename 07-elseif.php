<?php
echo "<hr>";
    echo "Estructura anidado elseif (permite agregar más condiciones) <br>";
    
    $a=10;
    $b=10;
    echo "<hr>";

    if ($a>$b) {
        echo "el valor de a es mayor que el valor de b <br>";
    }elseif ($a<$b) {
        echo "el valor de a es menor que el valor de b <br>";
    }else{
        echo "el valor de a es igual que el valor de b <br>";
    }
?>