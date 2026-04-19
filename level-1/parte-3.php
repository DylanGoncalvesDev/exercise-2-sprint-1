<?php
//Variables: Integers //
$x = 12;
$y = 25;

//Doubles//
$n = 9.21;
$m = 5.35;

//variables programa calculador//
$num1 = 0;
$num2 = 0;
$op = 0;

//PARTE 3 Operaciones//
echo "<h2> Parte 3: Operaciones </h2>";
echo "<br>Valor de las Variables: Variable X = ". $x . " Variable Y = " . $y;
echo "<br>Suma: ". ($x + $y);
echo "<br>Resta: ". ($x - $y);
echo "<br>Multiplicacion: ". ($x * $y);
echo "<br>Division: ". ($x / $y);
echo "<br>Modulo: ". ($x % $y) . "<br>";

echo "<br>Valor de las Variables: Variable N = ". $n . " Variable M = " . $m;
echo "<br>Suma: ". ($n + $m);
echo "<br>Resta: ". ($n - $m);
echo "<br>Multiplicacion: ". ($n * $m);
echo "<br>Division: ". ($n / $m);
echo "<br>Modulo: ". ($n % $m);

//Doble de cada Variable//
echo "<br> Doble de x: " . ($x * 2);
echo "<br> Doble d y: " . ($y * 2);
echo "<br> Doble de n: " . ($n * 2);
echo "<br> Doble de m: " . ($m * 2);

//suma y producto de todas las variables//
$suma = ($x + $y + $n + $m);
$producto = ($x * $y * $n * $m);

echo "<br> Suma de todas las Variables: " . $suma;
echo "<br> Producto de todas las Variables: " . $producto . "<br>";

?> 

<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>Programa Calculador</title>
    </head>
    <body>
        <h1 style="color:green;">CALCULADOR</h1>
       <form method="GET"> 
         <h2>Introduzca un numero entero</h2>
        <input type="text" name="numero-1">
        <br><br>
         <h2>Introduzca un segundo numero</h2>
        <input type="text" name="numero-2">
         <h2>Elige una Operacion: </h2>
        <label for="suma">
          <input id="suma" type="radio" name="operacion"  value="1">suma
        </label>
        <label for="resta">
           <input id="resta" type="radio" name="operacion"  value="2"> resta
        </label>
         <label for="multiplicacion">
          <input id="multiplicacion" type="radio" name="operacion" value="3">multiplicacion
        </label>
        <label for="division">
           <input id="division" type="radio" name="operacion"  value="4"> division
        </label>
        <button type="submit">Calcular</button>
       </form>
    </body>
 </html>

<?php
  // PROGRAMA CALCULADOR //
if (isset($_GET["numero-1"], $_GET["numero-2"], $_GET["operacion"])) {
    $num1 = $_GET["numero-1"];
    $num2 = $_GET["numero-2"];
    $op = $_GET["operacion"];

    echo calculador($num1, $num2, $op);
}

function calculador ($num1 , $num2 , $op) { 
      switch ($op) {
        case 1 : 
            $resultado = "<h2> El resultado de la suma es: " . ($num1 + $num2) . "</h2>";
            break;
        case 2 :
            $resultado = "<h2> El resultado de la resta es: " . ($num1 - $num2) . "</h2>";
            break;
        case 3 :
            $resultado = "<h2> El resultado de la multiplicacion es: " . ($num1 * $num2) . "</h2>";
            break;
        case 4 :
            if ($num2 == 0) {
                $resultado = "Error: No se puede dividir por cero.";
            } else {
              $resultado = "<h2> El resultado de la division es: " . ($num1 / $num2) . "</h2>";
            } 
            break;
        default :
            $resultado = "Operacion no Valida";         
      }  
   return $resultado;
}

?> 