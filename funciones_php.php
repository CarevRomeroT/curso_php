<?php
    $cambiodelinea = "<br>";
    $color = array("rojo","verde","amarillo","azul");

    array_splice($color,2);
    echo "<pre>";
    var_dump($color);

    $numeros = array(1,2,3,4,5,6);
    echo count($numeros);

    $numeross = array(1,2,3,4,5,6);
    echo $cambiodelinea;
    echo array_search(5,$numeross);

    $nu1 = array(1,2,3);
    $nu2 = array(4,5,6);
    $nu3 = array(7,8,9);

    $final = array_merge($nu1,$nu2,$nu3);

    echo "<pre>";
    var_dump($final);

    //ORDENAR UN ARRAY 1-9

    $num1 = array(7,8,6);
    $num2 = array(2,3,9);
    $num3 = array(4,1,5);

    $finall = array_merge($num1,$num2,$num3);
    asort($finall);

    echo "<pre>";
    var_dump($finall);
    
    //ORDENAR UN ARRAY 9-1

    $nun1 = array(7,8,6);
    $nun2 = array(2,3,9);
    $nun3 = array(4,1,5);

    $finalll = array_merge($nun1,$nun2,$nun3);
    arsort($finalll);

    echo "<pre>";
    var_dump($finalll);

?>