<!DOCTYPE html>
<html lang="es">
<body>
    
<?php

$array = array(1, 2, 3, 4, 5);

foreach ($array as $arr) {
    if(($arr%2) == 0){
        echo $arr .'<br>';
    }
}

?> 

</body>
</html>