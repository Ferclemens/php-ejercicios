<?php
//-----------------------------------------------------TP FINAL Modulo 1-------------------------------------------------------------------------
// Alumno: Clemens Fernando Oscar
/*
EJERCICIO 1:
Desarrollar una función en PHP que reciba un valor numérico, verifique que
el número es entero, mayor que 1 y retorne dos variables.
La primera variable debe indicar si el número recibido es primo y la segunda
variable debe informar si el número recibido es par o impar.

Instrucciones:
1. Nombre de la Función: La función debe llamarse verificarNumero.
2. Parámetros de Entrada:
▪ La función debe recibir un único parámetro: un número
cualquiera.
3. Validación:
▪ La función debe verificar que el número recibido es entero
mayor que 1. Si el número no cumple esta condición, la función
debe retornar false para ambas variables.
4. Salida:
▪ La función debe retornar dos variables:
▪ La primera variable debe ser un booleano que indique si
el número es primo (true si es primo, false si no lo es).
▪ La segunda variable debe ser un string que indique si el
número es “par” o “impar”.
5. Definiciones:
▪ Un número es primo si solo es divisible por 1 y por sí mismo.
▪ Un número es par si es divisible por 2, de lo contrario, es impar.
*/
//---------------------------------------------------------------------------------------------------------------------------------------------
function verificarNumero($numero){
    //iniciamos las variables en false, para evaluar si es entero y mayor a 1. Si no...quedan con ese valor (requerimiento)
    $esPrimo = false;
    $esPar = false;
    //evaluamos si cumple la condición de si es entero Y mayor a 1
    if(is_int($numero) && $numero > 1){
        //evaluamos si es par o impar
        if($numero % 2 == 0){
            $esPar = "par";
        } else {
            $esPar = "impar";
        }
        // hardcodeamos la variable $esPrimo a true para evaluar si el módulo por algún divisor desde 2 hasta $numero-1 es 0 (tiene divisor). 
        // En caso positivo cambiamos a false y cortamos el bucle con break. En caso negativo no tiene divisores entre 2 y $numero-1 (es primo).
        $esPrimo = true;
        for ($i = 2; $i <= ($numero-1); $i++) {
            // evaluamos si es primo
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
        //respuesta condicional segun si es primo o no
        /*
        if($esPrimo){
            echo "El número es $esPar y primo";
        } else {
            echo "El número es $esPar pero NO primo";
        }
        */
        return [$esPrimo, $esPar];
    } else {
        //echo "El número verificado NO es entero y TAMPOCO mayor a 1 <br>";
        return [$esPrimo, $esPar];
    }

}
//---------------------------------------------------------------------------------------------------------------------------------------------
/*
Ejercicio 2.
Desarrollar una solución en PHP que haga uso de la
función verificarNumero del ejercicio anterior para encontrar los números
primos que existen entre dos valores dados, incluyendo los propios valores
inicio/fin.
El código deberá generar tres arreglos: uno con todos los números primos,
otro con los números primos pares y otro con los números primos impares.
Finalmente, se deberá mostrar por pantalla la cantidad de números primos
encontrados, la cantidad de números primos pares y la cantidad de números
primos impares.
Instrucciones:
1. Función: utilizar la función del ejercicio 1.
2. Parámetros de Entrada:
▪ La solución debe recibir dos valores enteros, mayores que 1,
que representen el rango de búsqueda (por
ejemplo, inicio y fin).
3. Generación de Arreglos:
▪ Crea tres arreglos:
▪ Un arreglo con todos los números primos encontrados en
el rango.
▪ Un arreglo con los números primos pares.
▪ Un arreglo con los números primos impares.
4. Salida:
▪ Muestra por pantalla:
▪ La cantidad total de números primos encontrados.
▪ La cantidad de números primos pares.
▪ La cantidad de números primos impares.
*/
//---------------------------------------------------------------------------------------------------------------------------------------------
function verificarPrimos($inicio, $fin){
    //iniciamos arrays vacios para guardar los resultados de la iteración
    $primos = [];
    $primosPares = [];
    $primosImpares = [];
    //verificamos que los valores dados sean mayores a 1
    if($inicio > 1 && $fin > 1){   
        //verificamos usando la función verificarNumero() si cada número en la iteración es primo, primo par o primo impar y guardamos en el
        //array correspondiente 
        for ($i=$inicio; $i <= $fin; $i++) { 
            $resultado = verificarNumero($i);
            if($resultado[0] == true && $resultado[1] == "par"){
                array_push($primos, $i);
                array_push($primosPares, $i);
            } elseif ($resultado[0] == true && $resultado[1] == "impar"){
                array_push($primos, $i);
                array_push($primosImpares, $i);
            }        
        }
        //imprimimos los resultados
        echo "Números primos encontrados entre $inicio y $fin = " .implode(", ", $primos);
        echo "<br>Cantidad de números primos = " .count($primos);
        echo "<br>Cantidad de números primos pares = " .count($primosPares);
        echo "<br>Cantidad de números primos impares = " .count($primosImpares);
    } else {
        echo "La función debe recibir valores mayores a 1";
    }
}
//---------------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------------------EJECUCION DE FUNCIONES-----------------------------------------------------------------
verificarNumero(15);
verificarPrimos(2, 15);

//--------------------------------------------------------------CONSULTAS----------------------------------------------------------------------
//Se usaron las siguientes funciones de la documentación oficial de php: 
//https://www.php.net/manual/es/function.is-int.php (para saber si el número es un entero)
//https://www.php.net/manual/es/function.array-push.php (para guardar elementos en un array)
//https://www.php.net/manual/es/function.count.php (para contar los elementos de un array)
//https://www.php.net/manual/es/function.implode.php (para juntar e imprimir los elementos de un array)

?>