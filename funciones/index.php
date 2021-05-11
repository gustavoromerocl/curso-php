<?php echo "FUNCIONES \n";?>

<?php
    echo "FUNCIONES \n";

    function subjects(){
        echo "Matematicas, Biologia, Español, Ciencias, Geografia \n";
    }

    echo "Jose, tus materias son: ";
    subjects();
    echo "Karla, tus materias son: ";
    subjects();
?>

<?php
    echo "ARGUMENTOS DE FUNCIONES \n";

    function divideBy($divisor, $dividend=1){
        $result=$divisor/$dividend;
        echo "El resultado de la división es: $result \n";
    }

    divideBy(10,2);
    divideBy(5);

    ##Pasar valores por referencia usando &

    function plus(&$param1, $param2){
        $param1=$param1+$param2;
        echo 'El resultado es '.$param1;
    }

    $arg1=20;
    $arg2=5;

    plus($arg1,$arg2);

    echo "\nEl argumento 1 es $arg1 \n";


    ##Funciones recursivas

    function call($value){
        if($value <= 10){
            echo "$value \n";
            call(++$value);
        }
    }

    call(1);
?>

<?php
    echo "DEVOLVER VALORES \n";

    function operation($param1, $param2){
        return $param1+$param2;
    }

    echo var_dump(operation(14,4));

    function operation2($param1, $param2){
        return array($param1+$param2, $param1/$param2, $param1*$param2 );
    }

    print_r(operation2(14,4));

    list($suma,$division,$multiplicion)=operation2(15,5);
    echo "La suma es: $suma La division es $division, La multiplicacion es: $multiplicion";
?>

<?php
    echo "FUNCIONES VARIABLES Y ANONIMAS \n";
    ##Función anónima
    $operation=function($num1,$num2){
        return $num1+$num2;
    };
    ##Debe terminar con punto y coma

    echo 'El resultado es:'.$operation(2,2);

    ##Función variable
    function variable(){
        echo "\nFunción variable";
    }

    $call = 'variable';
    $call();
?>

<?php
    ##declare(strict_types=1);
    echo "DECLARACIONES DE TIPO ESCALAR \n";

    ##Modo cuarsitivo
    function validate(int $edad){
        if($edad>=18){
            echo 'Puedes ver la peli';
        }else{
            echo 'No puedes ver la peli';
        }
    }


    validate(18);


?>