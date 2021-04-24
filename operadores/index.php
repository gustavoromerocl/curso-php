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

<?php
##Operadores lógicos
    $asistencia=10;
    $promedio=7;

    $resultado= ($asistencia >= 8 && $promedio >= 5); // Operador Y: ambas condiciones deben ser verdadera
    $resultado= ($asistencia >= 8 || $promedio >= 5); //Operador O: Al menos una condicion se debe cumplir para que se verdadera
    $resultado= !($asistencia >= 8); //OPERADOR NOT: invierte el resultado
    var_dump($resultado);

    /*
    AND es igual que &&
    OR es igual que ||
    XOR se cumple unicamente si una de las condiciones se cumple
    */ 

?>


<?php
##Incremento y decremento
    $a=5;
    //echo 'pre incremento '.++$a."\n";
    echo 'pos incremento '.$a++."\n";
    echo 'resultado '.$a;

    //Para realizar la operacion opuesta usar --
?>

<?php
##Ternario, Elvis y Fusión null

//Operador ternario: (Expression bool)?expression:expression
$age=18;
//echo ($age>=18)?'Eres mayor de edad':'Eres menor de edad';


//Operador Elvis: ?:
//Asina un valor en caso de que la variable este vacia
//echo $age?:'No hay edad';

//Fusión null: ??
//Funciona igual que elvis, también para casos en que la variable no haya sido inicializada
echo $age?:'No hay edad';
?>