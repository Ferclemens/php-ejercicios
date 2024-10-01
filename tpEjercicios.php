<?php
/*
Ejercicio 1
Escribir un programa que, a partir de dos números enteros, muestre por
pantalla todos los números pares que hay entre ambos números,
incluyendo, en caso de ser pares, los números originales.
*/

//iteramos entre los 2 números (num1 inicio, num2 final) y mostramos los pares
function pares($num1, $num2) {
    for ($i = $num1; $i <= $num2; $i++){
        if($i % 2 == 0) {
            echo "$i ";
        }
    }
}
//--------------------------------------------------------------------------------
/*
Ejercicio 2
Asignar un número cualquiera, entero mayor que cero a una variable.
Verificar si el número ingresado es múltiplo de 2, 3, 4, 5, 6, 7, 8 o 9.
Armar un arreglo con los números encontrados (por ejemplo, si el número
ingresado es múltiplo de 3,6 y 7, armamos un arreglo que contenga estos
tres números).
Mostrar el arreglo por pantalla, ordenado de mayor a menor.
En caso de que el número ingresado no sea múltiplo de estos números,
mostrar por pantalla el mensaje “No se encontraron divisores exactos”.
*/

$multiplos = [];
// iteramos entre los múltiplos a evaluar y si corresponde guardamos el múltiplo en el array 
function multiplos($numero){
    for ($i = 2; $i <= 9; $i++) {
        if ($numero % $i == 0) {
            $multiplos[] = $i; 
        }
    }

    // Si encontramos multiplos ordenamos el array e imprimimos el resultado. Si no, imprimimos un aviso
    if ($multiplos == []) {
        echo "No se encontraron divisores exactos.\n";
    } else {
        rsort($multiplos);
        echo "Múltiplos de $numero encontrados: " . implode(", ", $multiplos) . "\n";
    }

}
//--------------------------------------------------------------------------------
/*
Ejercicio 3
Crear un arreglo con 10 números enteros y mostrarlos por pantalla.
Luego reemplazar todos los números pares por la palabra PAR usando una
estructura FOR y volver a mostrar el arreglo por pantalla.
*/

function reemplazarPares($arregloDeNumeros){
    echo "Array de números = " . implode(", ", $arregloDeNumeros)."\n";
    for ($i=0; $i < count($arregloDeNumeros); $i++) { 
        if($arregloDeNumeros[$i] % 2 == 0){
            $arregloDeNumeros[$i] = "PAR";
        }
    }
    echo "<br>Array de números con pares reemplazados = " . implode(", ", $arregloDeNumeros)."\n";
}
//--------------------------------------------------------------------------------
/*
Ejercicio 4
Dada una medida de tiempo expresada en horas, minutos y segundos con
valores arbitrarios, elabore un programa que transforme dicha medida en
una expresión correcta.
Por ejemplo, dada la medida 3h 118m 195s, el programa deberá obtener
como resultado 5h 1m 15s.
*/

function tiempoCorrecto($horas, $minutos, $segundos){
    echo "Tiempo inicio = $horas hora/s, $minutos minuto/s y $segundos segundo/s <br>";
    $minutos += floor($segundos / 60);
    $segundos = $segundos % 60;
    $horas += floor($minutos / 60);
    $minutos = $minutos % 60;
    echo "Tiempo corregido = $horas hora/s, $minutos minuto/s y $segundos segundo/s <br>";

}
//--------------------------------------------------------------------------------
/*
Ejercicio 5
Escriba un programa que muestre en pantalla todos los números primos
entre 1 y n, donde n es un número positivo que cargamos en una variable al
inicio.
*/
function esPrimo($numero) {
    if ($numero <= 1) {
        return false; // 0 y 1 no son primos
    }
    for ($i = 2; $i <= ($numero-1); $i++) {
        if ($numero % $i == 0) {
            return false; // No es primo
        }
    }
    return true; // Es primo
}

// Mostrar números primos entre 1 y n
function mostrarPrimos($tope){
    echo "Números primos entre 1 y $tope:\n";
    for ($i = 1; $i <= $tope; $i++) {
        if (esPrimo($i)) {
            echo $i . " ";
        }
    }
}   
//--------------------------------------------------------------------------------
/*
Ejercicio 6
Crea una función llamada calculadora que tome tres argumentos: dos
números y una cadena que represente una operación (por ejemplo, "+", "-",
"*", "/"). La función debe realizar la operación y devolver el resultado.
*/
function calculadora($num1, $num2, $operacion){
    echo "1º dato = $num1, 2º dato = $num2, operacion elegida = '$operacion' <br>";
    $resultado=0;
    if($operacion == "+"){
        $resultado = $num1 + $num2;
        echo "resultado = " . $resultado;
    } elseif($operacion == "-"){
        $resultado = $num1 - $num2;
        echo "resultado = " . $resultado;
    } elseif($operacion == "*"){
        $resultado = $num1 * $num2;
        echo "resultado = " . $resultado;
    } elseif($operacion == "/" && $num2 != 0){
        $resultado = $num1 / $num2;
        echo "resultado = " . $resultado;
    } else {
        echo "La operación no es válida";
    }
}
//--------------------------------------------------------------------------------

//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 1 <br>";
pares(2,12);
echo "<br>";
echo "Ejercicio Nº 2 <br>";
multiplos(42);
echo "<br>";
echo "Ejercicio Nº 3 <br>";
$arregloDeNumeros = [25, 33, 20, 10, 6, 11, 2, 7, 17 ,1000];
reemplazarPares($arregloDeNumeros);
echo "<br>";
echo "Ejercicio Nº 4 <br>";
$segundos = 195;
$minutos = 118;
$horas = 3;
tiempoCorrecto($horas, $minutos, $segundos);
echo "<br>";
echo "Ejercicio Nº 5 <br>";
mostrarPrimos(7);
echo "<br>";
echo "Ejercicio Nº 6 <br>";
$num1 = 10;
$num2 = 2;
$operacion = "/";
calculadora($num1, $num2, $operacion);
echo "<br>";
echo "Ejercicio Nº 7 <br>";

echo "<br>";
echo "Ejercicio Nº 8 <br>";

echo "<br>";
echo "Ejercicio Nº 9 <br>";

echo "<br>";
echo "Ejercicio Nº 10 <br>";

echo "<br>";
/*
Consultas:
https://www.php.net/manual/es/function.count.php
https://www.php.net/manual/es/function.rsort.php
https://www.php.net/manual/es/function.implode.php
*/
?>


