<?php
//Declaracion de las Variables: Integer, Double, String, Boolean y Float//
$numI = 1200;
$numD = 0.2000;
$greeting = "Hello";
$trueAndFalse = true;
$numF = 0.50;

//variables adicionales//
$age = 25;
$name = "Juan";
$country = "Colombia";

//strings//
$helloWorld = "Hello, World!";
$strInverso = "";
$php = "Este es el curso de PHP";

//Constante//
define( "MY_NAME" , "Dylan" );

//PARTE 1: Variables//
echo "<h2> PARTE 1: Variables </h2>";

echo "<br>HELLO WORLD<br>";
echo "String: ". $greeting  . "<br>Integer: " . $numI . "<br>Double: " . $numD . "<br>Float: " . $numF . "<br>";
var_dump($trueAndFalse);
printf ("<br>hello my name is %s, I am %d years old and I am from %s." , $name, $age, $country);

//Constante//
echo "<br>". MY_NAME;
echo "<br><h1>" . MY_NAME . "</h1>";

// PARTE 2: Strings //
echo "<h2> PARTE 2: Strings </h2>";

echo $helloWorld;
echo "<br> String en Mayusculas: " . strtoupper($helloWorld);
echo "<br> Longitud del String: " . strlen($helloWorld);

for ($i= strlen($helloWorld) - 1; $i >= 0; $i--) { 
     $strInverso .= $helloWorld[$i];
}
echo "<br> String Invertido: " . $strInverso;

$frase = $helloWorld . " " . $php;
echo "<br> Concatenacion de los Strings: " . $frase;

?> 
