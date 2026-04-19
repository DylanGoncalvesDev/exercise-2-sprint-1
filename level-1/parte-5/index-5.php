<!DOCTYPE html>

  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>Programa Verificador</title>
    </head>
    <body>
        <h1 style="color:blue;">VERIFICADOR</h1>
       <form method="GET">
        <input type="text" name="cantidad" >
        <br><br>
        <input type="text" name="maxima">
        <button type="submit">enviar</button>
    </form>
    </body>
  </html>
<?php
//if (isset($_GET["numero-1"], $_GET["numero-2"], $_GET["operacion"])) {
//}

function Verificador ( $porcentaje ) {
$grado = "";
   if ($porcentaje >= 60) {
       $grado = "El Grado del Estudiante es: Primera Division";
   } elseif ($porcentaje >= 45 && $porcentaje <= 59) {
             $grado = "El Grado del Estudiante es: Segunda Division";
   } elseif ($porcentaje >= 33 && $porcentaje <= 44) {
             $grado = "El Grado del Estudiante es: Tercera Division";
   } else {
        $grado = "El Estudiante esta Reprobado";
   }
   return $grado;
}



?> 
