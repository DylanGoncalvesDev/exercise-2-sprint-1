<!DOCTYPE html>

  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>Programa Verificador</title>
    </head>
    <body>
        <h1 style="color:blue;">VERIFICADOR</h1>
       <form method="GET">
         <h2> Introduce la nota final del Alumno</h2>
        <input type="text" name="notafinal">
        <br><br>
         <h2> Introduce la nota Maxima del Curso</h2>
        <input type="text" name="notamax">
        <button type="submit">enviar</button>
    </form>
    </body>
  </html>
<?php
$notaTotal = 0;
$notaMax = 0;
$porcentaje = 0;

function Verificador ( $porcentaje ) {
   $grado = "";
   if ($porcentaje >= 60) {
       $grado = "<h2>El Grado del Estudiante es: Primera Division </h2>";
   } elseif ($porcentaje >= 45 && $porcentaje <= 59) {
             $grado = "<h2> El Grado del Estudiante es: Segunda Division </h2>";
   } elseif ($porcentaje >= 33 && $porcentaje <= 44) {
             $grado = "<h2> El Grado del Estudiante es: Tercera Division </h2>";
   } else {
        $grado = "<h2> El Estudiante esta Reprobado</h2> ";
   }
   return $grado;
}

if(empty($_GET["notafinal"]) && empty($_GET["notamax"])) {
     echo "<h2>Error no se han introducido los datos </h2>";


} elseif (!is_numeric($_GET["notafinal"]) || !is_numeric($_GET["notamax"])) {
    echo "<h2>Error solo se admiten numeros </h2>";


} elseif (!empty($_GET["notafinal"]) && !empty($_GET["notamax"])) {
    $notaTotal = $_GET["notafinal"];
    $notaMax = $_GET["notamax"];
    $porcentaje = ($notaTotal / $notaMax) * 100;

    echo Verificador ( $porcentaje );
}

?> 
