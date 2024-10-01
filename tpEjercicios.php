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
    //si encuentra un número par en la iteración, lo sustituye por el string "PAR"
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
    //obtenemos los minutos (número entero sin coma)
    $minutos += floor($segundos / 60);
    //dejamos el resto de segundos que no completan el minuto (60 segundos)
    $segundos = $segundos % 60;
    //obtenemos las horas (entero sin coma)
    $horas += floor($minutos / 60);
    //dejamos los minutos que no completan la hora (60 minutos)
    $minutos = $minutos % 60;
    echo "Tiempo corregido = $horas hora/s, $minutos minuto/s y $segundos segundo/s";

}
//--------------------------------------------------------------------------------
/*
Ejercicio 5
Escriba un programa que muestre en pantalla todos los números primos
entre 1 y n, donde n es un número positivo que cargamos en una variable al
inicio.
*/
function esPrimo($numero) {
    // 0 y 1 no son primos
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= ($numero-1); $i++) {
        // No es primo
        if ($numero % $i == 0) {
            return false;
        }
    }
    // Es primo
    return true; 
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
        //resultado si la operación elegida no es "+", "-", "*", "/" o el divisor de esta última es 0
        echo "La operación no es válida";
    }
}
//--------------------------------------------------------------------------------
/*
Ejercicio 7
Crea una función llamada contarPalabras que tome una cadena de texto como
argumento y devuelva el número de palabras en esa cadena. Las palabras
están separadas por espacios.
*/
function contarPalabras($cadena){
    //No considera acentos, los toma como corte de palabra
    echo str_word_count($cadena);
}
//--------------------------------------------------------------------------------
/*
Ejercicio 8
Crea una función llamada generarContraseña que genere una contraseña
aleatoria de una longitud especificada. La contraseña debe contener letras
mayúsculas, letras minúsculas y números.
*/
function generarContrasenia($longitud){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $contraseñaGenerada = '';
    $longitudTotalCaracteres = strlen($caracteres);
    for ($i = 0; $i < $longitud; $i++) {
        $contraseñaGenerada .= $caracteres[rand(0, $longitudTotalCaracteres - 1)];
    }
    return $contraseñaGenerada;
}
//--------------------------------------------------------------------------------
/*
Ejercicio 9
Crea una función llamada validarCorreo que tome una dirección de correo
electrónico como argumento y determine si es una dirección de correo
electrónico válida
*/
function validarCorreo($correo){
    $arroba = "@";
    $extension = ".com";
    if(strpos($correo, $arroba) && strpos($correo, $extension) ){
        echo "Correo Válido";
    } else {
        echo "Correo NO válido";
    }
}
//--------------------------------------------------------------------------------
/*
Ejercicio 10
Crea una función llamada calcularPromedio que tome un array de números
como argumento y devuelva el promedio de esos números.
*/
function calcularPromedio($arrayDeNumeros){
    $longitudDelArray = count($arrayDeNumeros);
    $sumaTotal = 0;
    for ($i=0; $i < $longitudDelArray ; $i++) { 
        $sumaTotal += $arrayDeNumeros[$i];
    }
    $resultado = $sumaTotal / $longitudDelArray;
    return $resultado;
}
//--------------------------------------------------------------------------------

//************************EJECUCIONES DE EJERCICIOS*******************************

echo "Ejercicio Nº 1 <br>";
pares(2,12);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 2 <br>";
multiplos(42);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 3 <br>";
$arregloDeNumeros = [25, 33, 20, 10, 6, 11, 2, 7, 17 ,1000];
reemplazarPares($arregloDeNumeros);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 4 <br>";
$segundos = 195;
$minutos = 118;
$horas = 3;
tiempoCorrecto($horas, $minutos, $segundos);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 5 <br>";
mostrarPrimos(7);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 6 <br>";
$num1 = 10;
$num2 = 2;
$operacion = "/";
calculadora($num1, $num2, $operacion);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 7 <br>";
contarPalabras("Bootcamp PHP Full Stack organizado por Fundacion Telefonica Movistar");
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 8 <br>";
echo "Contraseña random generada = " .generarContrasenia(12);
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 9 <br>";
validarCorreo("fer@a.com");
echo "<br>";
validarCorreo("string");
echo "<br>";
echo "<br>";
//--------------------------------------------------------------------------------
echo "Ejercicio Nº 10 <br>";
$arrayDeNumeros = [1,2,3,4,5,6,7,8,9];
echo "El promedio del array de números es " .calcularPromedio($arrayDeNumeros);

/*
Consultas:
https://www.php.net/manual/es/function.count.php
https://www.php.net/manual/es/function.rsort.php
https://www.php.net/manual/es/function.implode.php
https://www.php.net/manual/es/function.str-word-count.php
https://www.php.net/manual/es/function.strlen.php
https://www.php.net/manual/es/function.strpos.php
*/
?>


