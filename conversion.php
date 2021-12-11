<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mostrar valor RGB</title>
  </head>
  <body>
    <?php
      $introducido = $_POST["hex"];
      $red = substr($introducido, 1, 2);
      $green = substr($introducido, 3, 2);
      $blue = substr($introducido, 5, 2);
      $rgb = [
        "R" => hexdec($red),
        "G" => hexdec($green),
        "B" => hexdec($blue),
      ];
      echo "El valor hexadecimal introducido es: " . $introducido;
      echo "<br>";
      echo "Su correspondencia es: RGB({$rgb["R"]}, {$rgb["G"]},  {$rgb["B"]})";
     ?>
  </body>
</html>
