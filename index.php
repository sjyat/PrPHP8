<?php 
    define("CURSO", "PHP 8"); //declarar constante
    define("animales", [
        "Tigre", 
        "Oso", 
        "Perro",
    ]);                     //declar constante tipo array

    $nombre="Sergio Yat";  //Declarar variable
    $cadena='Comillas Dobles "Jeremías"';   //Imprimir una cadena que contiene comillas

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP V8</title>
</head>
<body>
    <h1><?php echo "Aprender Php: 80 videos/5 diarios=20 dias, Mi nombre es: " .$nombre;?></h1>
    <h1><?php echo " (interpolado) $cadena";?></h1>
    <h2><?php echo CURSO;?></h2>
    <h2><?php echo animales[0];?></h2>
    
    <?php 
    if(defined("CURSO")){
        echo  "la constante CURSO si se ha definido";
    }
    echo "<br>";
    echo "Mi versión de php es: ".PHP_VERSION;
    echo "<br>";
    echo "Mi versión de WINDOWS es: ".PHP_OS;
    echo "<br>";
    echo "Mi directorio es: ".__FILE__;
    echo "<br>";

    echo "Jerarquia de operaciones ". 4*5-6+4*2+1*0;
    echo "<br>";

    echo "Operadores de Comparación";
    echo "<br>";

    $a=10;
    $b=20;

    //echo $a==$b;
    //Operadores de comparación
    var_dump($a==$b);
    //Comparador  diferente
    var_dump($a!=$b);
    //Mayor
    var_dump($a>$b);
    //Menor
    var_dump($a<$b);
    
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
    echo "Operadores  asignación combinado";
    echo "<br>";
    $a=5;
    
    $b=$a++;
    
    echo "<br>";
    echo "el valor de a es: $a";
    echo "<br>";
    echo "el valor de a es: $b";

    echo "<br>";
    $a=5;
    $b=6;
    
    echo "<br>";
    echo "la suma de a y b es :", $a + $b;
    echo "<br>";
    echo "el valor de a es:", $a+=$b;

    ?>
    <hr>

    <?php 
      echo "Estructura IF";
      echo "<br>";
    $a=10;
    $b=5;

    echo "primer parrafo <br>";
    echo "<hr>";

    if ($a>$b) {
        echo "segundo parrafo <br>";
    }else{
        echo "segundo parrafo editado <br>";
    }
  
    echo "tercer parrafo <br>";

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

    echo "<hr>";
    echo "Operadores Ternarios <br>";
    
    $a=10;
    $b=1;
    echo "<hr>";

    $valor=$a>$b ? 'mayor' :($a<$b? 'menor':'igual');
    echo "el valor de a es $valor que el valor de b <br>";

    echo "<hr>";
    echo "elif, anidación <br>";

    $a=13;

    /*if ($a==1) {
        echo "lunes <br>";
    }elseif ($a==2) {
        echo "Martes <br>";
    }elseif ($a==3) {
        echo "Miércoles <br>";
    }elseif ($a==4) {
        echo "Jueves <br>";
    }elseif ($a==5) {
        echo "Vierenes <br>";
    }elseif ($a==6) {
        echo "Sábado <br>";
    }elseif ($a==7) {
        echo "Domingo <br>";
    }*/
    
    echo "<hr>";
    echo "Estructura de Selección Multiple, SWITCH-MATCH <br>";
   /* switch ($a) {
        case '1':
            echo "lunes <br>";
            break;
        case '2':
            echo "Martes <br>";
            break;
        case '3':
            echo "Miércoles <br>";
            break;
        case '4':
            echo "Jueves <br>";
            break;
        case '5':
            echo "viernes <br>";
            break;
        case '6':
            echo "Sábado <br>";
            break;
        case '7':
            echo "Domingo <br>";
            break;
                
        default:
            echo "El número que ingreso es invalido <br>";
            break;
    }*/

    echo match ($a) {
         1=> "Lunes",
         2=> "Martes",
         3=> "Miércoles",
         4=> "Jueves",
         4=> "Viernes",
         6=> "Sábado",
         7=> "Domingo",
         default => "Número invalido"
    };
    ?>

<?php
    echo "<hr>";
    echo "Estructura While<br>";

    $i=1;
    while ($i <= 10) {
        echo "Hola Mundo $i <br>";
        $i++;
    
    }
    echo "Has salido del bucle while";
       
    ?>

    <?php

    echo "<hr>";
    echo "Estructura DO While<br>";

    $j=9;

    do {
        echo "Hola Mundo <br>";
        $j++;

    } while ($j < 8);{
        
    }
    echo "Has salido del bucle Do while";

    ?>

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

<?php
echo "<hr>";

echo "Arbolito Navideño<br>";
//*
//*
//*** */
$filas=10;

for ($i = 1; $i <= $filas; $i++) {
    for ($j = 0; $j <= $i; $j++) {
       echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo "for each /arrays<br>";
$nombres=["juan", "Maria", 200];

foreach ($nombres as $indice => $nombre) {
    echo $nombre . " se encuentra en el indice $indice <br>";
}

?>



</body>
</html>