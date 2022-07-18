<?php
//**ARRAYS */
$cambiodelinea = "<br>";
$numeros[0] = 1;
$numeros[1] = 2;
$numeros[2] = 3;
$numeros[3] = 4;


$letras[0] = 'uno';
$letras[1] = 'dos';
$letras[2] = 'tres';
$letras[3] = 'cuatro';

echo $numeros[3];
echo $cambiodelinea;
echo $letras[1];
echo $cambiodelinea;

$numero = array(1,2,3,4,5);

echo $numero[4];

//ARRAYS OPERATIVAS
$edad = array(
    'juan' => 11,
    'pedro' => 20,
    'david' => 35
);

echo $cambiodelinea;
echo $edad['pedro'];

$numeross = [1,2,3,4,5,6,7,8];
    $suma = array_sum($numeross);
    echo $cambiodelinea;
    echo $suma;

//ARRAYS ASOCIATIVAS

$numerosss = array(1,2,3,4,5,6);
$numerosss[] = 100;

echo "<pre>";
var_dump($numerosss);
echo "</prev";


$asociativo = array(
    'juan' => 12,
    'pedro' => 33,
    'maria' => 22
);

$asociativo['jeremias'] = 100;

echo "<pre>";
var_dump($asociativo);
echo "</prev";



?>