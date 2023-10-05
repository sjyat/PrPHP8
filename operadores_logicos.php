<?php
    echo "Jerarquia de operaciones ". 4*5-6+4*2+1*0;
    echo "<br>";

    echo "Operadores  Lógicos";
    echo "<br>";
    //Operadores Lógicos
    $a=true;
    $b=true;
    
    var_dump($a && $b);

    echo "<br>";
    $a=true;
    $b=false;
    var_dump($a || $b);   
    
    echo "<br>";
    $a=5;
    $b=10;
    var_dump($a>$b || $a>11);   

    echo "<br>";

    ?>