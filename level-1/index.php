<?php
//Declaracion de las Variables: Integer, Double, String, Boolean y Float//
$numI = 1200;
$numD = 0.2000;
$helloWorld = "hola mundo";
$trueAndFalse = true;
$numF = 0.50;

//variables adicionales//
$age = 25;
$name = "Juan";
$country = "Colombia";

//Integers//
$x = 12;
$y = 25;

//Doubles//
$n = 9.21;
$m = 5.35;

//variables programa calculador//
$num1 = 0;
$num2 = 0;
$operacion = 0;

//Constante//
define( "MY_NAME" , "Dylan" );

//Impresiones//
echo "<br>HELLO WORLD<br>";
echo "String: ". $helloWorld  . "<br>Integer: " . $numI . "<br>Double: " . $numD . "<br>Float: " . $numF . "<br>";
var_dump($trueAndFalse);
printf ("<br>hello my name is %s, I am %d years old and I am from %s." , $name, $age, $country);
echo "<br>". MY_NAME;

//Impresion en modo de titulo//
echo "<br><h1>" . MY_NAME . "</h1>";

//Impresiones + Operaciones X/Y//
echo "<br>Valor de las Variables: Variable X = ". $x . " Variable Y = " . $y;
echo "<br>Suma: ". ($x + $y);
echo "<br>Resta: ". ($x - $y);
echo "<br>Multiplicacion: ". ($x * $y);
echo "<br>Division: ". ($x / $y);
echo "<br>Modulo: ". ($x % $y) . "<br>";

//Impresiones + Operaciones N/M//
echo "<br>Valor de las Variables: Variable N = ". $n . " Variable M = " . $m;
echo "<br>Suma: ". ($n + $m);
echo "<br>Resta: ". ($n - $m);
echo "<br>Multiplicacion: ". ($n * $m);
echo "<br>Division: ". ($n / $m);
echo "<br>Modulo: ". ($n % $m);

//Doble de cada Variable//
echo "<br>" . ($x * 2);
echo "<br>" . ($y * 2);
echo "<br>" . ($n * 2);
echo "<br>" . ($m * 2);

//suma y producto de todas las variables//
$suma = ($x + $y + $n + $m);
$producto = ($x * $y * $n * $m);

echo "<br>" . $suma;
echo "<br>" . $producto;


// programa calculador //

$num1 = $_GET["numero-1"];
$num2 = $_GET["numero-2"];
$operacion = $_GET["operacion"];

echo $num1;
echo $num2;
echo $operacion;


function calculador ($num1 , $num2 , $operacion) { 
      switch ($operacion) {
        case 1 : 
            $resultado = "el resultado de la suma es: " . ($num1 + $num2);
            break;
        case 2 :
            $resultado = "el resultado de la resta es: " . ($num1 - $num2);
            break;
        case 3 :
            $resultado = "el resultado de la multiplicacion es: " . ($num1 * $num2);
            break;
        case 4 :
            if ($num2 == 0) {
                $resultado = "Error: No se puede dividir por cero.";
            } else {
              $resultado = "el resultado de la division es: " . ($num1 / $num2);
            } 
            break;     
      }  
   return $resultado;
}
?> 

<!DOCTYPE html>

  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>formulario ejercicio 2</title>
    </head>
    <body>
        <h1>CALCULADOR</h1>
       <form method="GET"> 
         <h2>Introduzca un numero entero</h2>
        <input type="text" name="numero-1">
        <br><br>
         <h2>Introduzca un segundo numero</h2>
        <input type="text" name="numero-2">
         <h2>Elige una Operacion: </h2>
        <label for="suma">
          <input id="suma" type="radio" name="operacion">suma
        </label>
        <label for="resta">
           <input id="resta" type="radio" name="operacion"> resta
        </label>
         <label for="multiplicacion">
          <input id="multiplicacion" type="radio" name="operacion">multiplicacion
        </label>
        <label for="division">
           <input id="division" type="radio" name="operacion"> division
        </label>
        <button type="submit">enviar</button>
       </form>
    </body>
 </html>