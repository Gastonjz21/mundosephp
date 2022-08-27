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
    
    $var = "12";

    //echo gettype($var);

    //verifica que la variable $var sea entero y devuelve una leyenda es entero o no es entero
    if(is_int($var)){
        echo "es entero";
    }else {
        echo "no es entero";
    }
    
    ?>

</body>
</html>