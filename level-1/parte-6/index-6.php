<!DOCTYPE html>
  <html lang="es">
   <head>
    <meta charset="utf-8">
    <title>Charlie</title>
   </head>
   <body>
    <h1 style="color:blue;">Te Mordera Charlie?</h1>
    <form method="GET">
        <button type="submit">¡Meter el dedo!</button>
    </form>
   <body>
  </html>

<?php

 function isBitten () {
   $probabilidad = rand(0,1);
   return $probabilidad ? true : false ;

}

if (isBitten()) {
    echo "<h2 style='color:red;'> ¡Charlie te mordio!</h2>";

} else {
    echo "<h2 style='color:green;'> Charlie no te mordio esta vez.</h2>";
}


?> 