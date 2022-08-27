<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        $i = 1; #variable con una asignacion en 1

        while ($i <= 10) { #la condicion devolvera true hasta que $i sea mayor o igual a 10
            echo "$i Manzana ".'<br>'; #sentencia de impresion por pantalla
            $i++; #incremento del valor a 1
        }
    
    ?>
    
</body>
</html>