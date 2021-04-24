<?php echo "OPERADORES \n"?>

<?php
##Comparacion
$age='18';

echo var_dump($age===18)
/*
== Igual
=== Identico: compara valor y tipo de dato
!= o <> Distinto
!== No identico: Distinto valor o distinto tipo
> Mayor que
< Menor que  
>= MAyor o igual que
<= Menor o igual que
<=> Nave espacial : -1 menor que, 0 iguales, 1 mayor que
*/
?>

<?php
##Aritméticos
    $operando1=10;
    $operando2=5;

    $result=$operando1+$operando2; //suma
    $result=$operando1-$operando2;  //resta
    $result=$operando1*$operando2; //multiplicacion
    $result=$operando1/$operando2; //division 
    $result=$operando1%$operando2; //residuo
    $result=$operando1**$operando2;//Exponenciacion base**potencia
?>

<?php
##Asignacion
    $a=15; // = Asigna el valor a una variable
    $b=5;
    $c=&$a; // El operador & asigna el valor de la variable aunque esta cambie posteriormente en el codigo
    //operador combinado
    $a+=$b; // Lo mismo que $a = $a + $b

    echo "a = $a - c = $c"
?>
