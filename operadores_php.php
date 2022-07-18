<?php
    //arrays
    $cambiodelinea = "<br>";
    $a = 5 == 4.0;
    var_dump($a);
    //DESIGUAL
    echo "<br>";
    $b = 5 != 5;
    var_dump($b);
    //MAYOR QUE, MENOR QUE, MAYOR O IGUAL,MENOR O IGUAL
    echo "<br>";
    $c = 5 < 5;
    var_dump($c);

    //SPACESHIP(<=>)
    echo "<br>";
    $d = 5 <=> 5;
    var_dump($d);

    //OPERADORES LOGICOS

    //NOT
    echo "<br>";
    $e = !(5 > 10);
    var_dump($e);

    //AND
    echo "<br>";
    $f = 5 > 3 && 4 < 10;
    var_dump($f);

    //OR
    echo "<br>";
    $g = 5 > 3 || 4 < 10;
    var_dump($g);




?>