<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $diasDeLaSemana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

        foreach($diasDeLaSemana as $key => $dia) {
            echo "El valor de la posicion [$key] es [$dia] <br>";
        }
    ?>

</body>
</html>