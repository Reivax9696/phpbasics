<?php

//NIVELL 1

$integerEjemplo = 24;
$doubleEjemplo = 2.19;
$stringEjemplo = "Hello, World!";
$booleanEjemplo = true;


echo "Integer: " . $integerEjemplo . "<br>";
echo "Double: " . $doubleEjemplo . "<br>";
echo "String: " . $stringEjemplo . "<br>";
echo "Boolean: " . ($booleanEjemplo ? "true" : "false") . "<br>";


define("MY_NAME", "Xavier Bigorra");


$nombreTitulo = ucwords(strtolower(MY_NAME));
echo "Mi nombre es : " . $nombreTitulo . "<br>";



$primerString = "Hello, World!";
$segondString = "Aquest es el curs de PHP.";


echo "Primer String: " . $primerString . "<br>";


$stringMayusculas = strtoupper($primerString);
echo "String en mayusculas: " . $stringMayusculas . "<br>";


$stringLongitud = strlen($primerString);
echo "Numero de letras del string: " . $stringLongitud . "<br>";


$stringAlReves = strrev($primerString);
echo "String al reves: " . $stringAlReves . "<br>";

$stringsConcatenados = $primerString . ' ' . $segondString;
echo "Strings concatenados: " . $stringsConcatenados . "<br>";

$x = 10;
$y = 15;

$n = 6.6;
$m = 2.4;

echo "Valor de la variable: X: " . $x . "<br>";
echo "Valor de la variable Y: " . $y . "<br>";
echo "Valor de la variable N: " . $n . "<br>";
echo "Valor de la variable M: " . $m . "<br>";

echo "La suma de X y Y es: " . $x + $y . "<br>";
echo "La resta de X y Y es " . $x - $y . "<br>";
echo "El producto de X y Y es: " . $x * $y . "<br>";
echo "El modulo de X y Y es: " . $x % $y . "<br>";

echo "La suma de N y M es: " . $n + $m . "<br>";
echo "La resta de N y M es " . $n - $m . "<br>";
echo "El producto de N y M es: " . $n * $m . "<br>";
echo "El modulo de N y M es: " . $n % $m . "<br>";

echo "El doble de X es " . $x*2 . ". El doble de Y es ". $y*2 .". <br>";
echo "El doble de N es " . $n*2 . ". El doble de M es ". $m*2 .". <br>";

echo "La suma de todas las variables es: " . $x + $y + $n + $m . ". <br>";
echo "El producto de todas las variables es: " . $x * $y * $n* $m . ". <br>";



function calculadora($num1, $num2, $operacion) {
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        case 'division':
            $resultado = $num1 / $num2;
            break;
        default:
            $resultado = "Operacion no valida.";
    }

    return $resultado;
}

$num1 = 10;
$num2 = 5;

echo "Suma: " . calculadora($num1, $num2, 'suma') . "<br>";
echo "Resta: " . calculadora($num1, $num2, 'resta') . "<br>";
echo "Multiplicacion: " . calculadora($num1, $num2, 'multiplicacion') . "<br>";
echo "Division: " . calculadora($num1, $num2, 'division') . "<br>";



function contarNumeros($start, $end, $step = 1) {
    if ($start <= $end && $step > 0) {
        for ($i = $start; $i <= $end; $i += $step) {
            echo $i . "<br>";
        }
    } elseif ($start >= $end && $step < 0) {
        for ($i = $start; $i >= $end; $i += $step) {
            echo $i . "<br>";
        }
    } else {
        echo "No se puede contar.";
    }
}


echo "Contar del 1 al 10 de 2 en 2:<br>";
contarNumeros(1, 10, 2);


function notas($nota) {
    if ($nota >= 60) {
        $nota = "Primera Divisio" . "<br>";
    } elseif ($nota >= 45 && $nota <= 59) {
        $nota = "Segona Divisio" . "<br>";
    } elseif ($nota >= 33 && $nota <= 44) {
        $nota = "Tercera Divisio" . "<br>";
    } else {
        $nota = "Suspes" . "<br>";
    }

    return $nota;
}


$nota = 55;
$resultat = notas($nota);
echo "El nivell del estudiant es: " . $resultat;

function isBitten() {
    
    $random = rand(0, 1);

    
    return ($random == 0);
}


$resultat = isBitten();

if ($resultat) {
    echo "Charlie m'ha mossegat el dit!" . "<br>";
} else {
    echo "Charlie no m'ha mossegat el dit". "<br>";
}

//NIVELL 2

function costTrucada($duracioTrucada) {
    
    $costBase = 0.10;

    $costAdicional = 0.05;

    if ($duracioTrucada < 3) {
        
        $costTotal = $costBase;
    } else {
        
        $minutsAdicionals = $duracioTrucada - 3;
        $costTotal = $costBase + ($minutsAdicionals * $costAdicional);
    }

    return $costTotal;
}


$duracioTrucada1 = 20; 
$costTrucada1 = costTrucada($duracioTrucada1);
echo "La duracio de la trucada es: " .$duracioTrucada1. " minuts, el cost total es: " . $costTrucada1 ."<br>";

$duracioTrucada2 = 5; 
$costTrucada2 = costTrucada($duracioTrucada2);
echo "La duracio de la trucada: " . $duracioTrucada2 . " minuts, el cost total es: " . $costTrucada2 . "<br>";




function calcularPreuXocolata($quantitatXocolata) {
    $preuPerXocolata = 1.0;
    return $quantitatXocolata * $preuPerXocolata;
}

function calcularPreuXiclets($quantitatXiclets) {
    $preuPerXiclets = 0.5;
    return $quantitatXiclets * $preuPerXiclets;
}

function calcularPreuCaramels($quantitatCaramels) {
    $preuPerCaramels = 1.5;
    return $quantitatCaramels * $preuPerCaramels;
}

function calcularTotal($quantitatXocolata, $quantitatXiclets, $quantitatCaramels) {
    $totalXocolata = calcularPreuXocolata($quantitatXocolata);
    $totalXiclets = calcularPreuXiclets($quantitatXiclets);
    $totalCaramels = calcularPreuCaramels($quantitatCaramels);

    $total = $totalXocolata + $totalXiclets + $totalCaramels;

    return $total;
}


$quantitatXocolata = 2;
$quantitatXiclets = 1;
$quantitatCaramels = 4;

$quantitatTotal = calcularTotal($quantitatXocolata, $quantitatXiclets, $quantitatCaramels);

echo "El total comprat es: " . $quantitatXocolata . " unitats de Xocolata, " . $quantitatXiclets. " unitats de Xiclets i " . $quantitatCaramels . " unitats de Caramels. El preu total es: " . $quantitatTotal . "€";










?>