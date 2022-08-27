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
        $i = 1; #variable con una asignacion en 0

        do {
            echo "$i Manzana".'<br>'; #sentencia de impresion por pantalla
            $i++;
        } while ($i <= 5); #la condicion devolvera tru hasta que $i sea mayor o igal a 5
    ?>
    
</body>
</html>