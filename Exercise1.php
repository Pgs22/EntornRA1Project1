<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    $numero1 = 5;
    $numero2 = 4;
    
    //Exercise01.1  
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $division = $numero1 / $numero2;        
    echo "El número 1 és: " . $numero1 . "<br>";
    echo "El número 2 és: " . $numero2 . "<br>";
    echo "Suma: " . $suma . "<br>";
    echo "Resta: " . $resta . "<br>";
    echo "División: " . $division . "<br>";

    
    //Exercise01.2
    if ($numero1 > $numero2) {
    echo "El número 1 es mayor que el número 2.";
    } elseif ($numero1 < $numero2) {
    echo "El número 1 es menor que el número 2.";
    } else {
    echo "Los números son iguales.";
    }
    
    //Exercise01.3
    if (5 > 1 or $numero2 > 1) {
        $area = $numero1 * $numero2;
        echo "Have a good day!" . $area . "" ;
    }
        if (5 > 1) {
        echo "Have a good day!";
    }
    
    echo "the numbers are " . $numero1 . "and " . $numero2;
    ?>
    

</body>
</html>