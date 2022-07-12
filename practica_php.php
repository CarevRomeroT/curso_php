<?php 

    echo 'Hola Carev<br>';

    //* MANEJO DE VARIABLES*//

    $cambiodelinea = "<br>";
    $nombre = "Lorena<br>";
    echo $nombre;
    $numeros = 12345;
    echo $numeros;

    //*CONSTANTES*//
    define("codigo",3182595685);
    echo $cambiodelinea;
    echo codigo;

    //*OPERADORES*//
    $n = 0;
    $nn = 2.6;
    $nnn = true;
    echo $n;
    echo $cambiodelinea;
    echo $nn;
    echo $cambiodelinea;
    echo gettype ($n);
    echo $cambiodelinea;
    echo gettype ($nn);
    echo $cambiodelinea;
    echo gettype ($nnn);
    echo $cambiodelinea;

    //**OPERADORES ARITMETICOS */
    $n1 = 5;
    $n2 = 2;
    $suma = $n1 + $n2;
    echo $suma;
    echo $cambiodelinea;
    echo $n1 + $n2;
    echo $cambiodelinea;
    echo $n1 ** $n2;

    //**OPERADORES DE ASIGNACION */
    $x = 2;
    echo $cambiodelinea;
    echo $x + 6;
    echo $cambiodelinea;
    $x+=6;
    echo$x;
    echo $cambiodelinea;
    $z = 'buenas ';
    $z.= 'noches';
    echo $z;


    

?>
