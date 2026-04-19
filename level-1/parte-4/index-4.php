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

if (isset($_GET["limite"], $_GET["intervalo"])) {
    $countLimit = $_GET["limite"];
    $countInterval = $_GET["intervalo"];
    
    echo "El Conteo es: " . contador ($countLimit , $countInterval);
}

function contador($countLimit = 10, $countInterval) {
  $count = 0;
  for ($i= $countInterval; $i <= $countLimit; $i += $countInterval) { 
       $count .=  $i . " ";
  }
  return $count;
}
?> 

