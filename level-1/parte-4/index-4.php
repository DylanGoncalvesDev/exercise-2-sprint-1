<!DOCTYPE html>

  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>Programa Contador</title>
    </head>
    <body>
        <h2> PARTE 4: Contador </h2>
        <h1 style="color:blue;">CONTADOR</h1>
       <form method="GET"> 
         <h2>Introduce el número hasta el que quieres contar</h2>
        <input type="text" name="limite">
        <br><br>
         <h2>Indica de cuánto en cuánto quieres contar (de 1 en 1, de 2 en 2...)</h2>
        <input type="text" name="intervalo">
        <button type="submit">Contar</button>
       </form> 
    </body>
  </html>
<?php
//programa contador//
$countLimit = 0;
$countInterval = 0;

function contador($countInterval , $countLimit = 10) {
  $count = "";
  for ($i= $countInterval; $i <= $countLimit; $i += $countInterval) { 
       $count .=  $i . " ";
  }
  return $count;
}

if ($_GET ["intervalo"] == "" && $_GET ["limite"] == "") { 
    echo "<h2> Error no se han introducido los datos correctamente </h2>";

} elseif (!empty($_GET ["intervalo"]) && $_GET ["intervalo"] > 0 && empty($_GET ["limite"])) {
         $countInterval = (int) $_GET["intervalo"];
         echo "El Conteo es: " . contador($countInterval);

} elseif ((!empty($_GET ["intervalo"])) && !is_numeric($_GET ["intervalo"]) || (!empty($_GET["limite"])) && !is_numeric($_GET ["limite"])) {
          echo "<h2> Error no se permiten letras </h2>";

} elseif ($_GET ["intervalo"] <= 0 ) {
    echo "<h2> Error no se puede contar si el intervalo es 0 </h2>";

} else {
   $countInterval = (int) $_GET["intervalo"];
   $countLimit = (int) $_GET["limite"];
   echo "El Conteo es: " . contador($countInterval, $countLimit);
}

?> 

