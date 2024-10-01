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


echo "Ejercicio Nº 1 <br>";
pares(2,12);
echo "<br>";
echo "Ejercicio Nº 2 <br>";
multiplos(42);
echo "<br>";
?>


