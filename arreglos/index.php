<?php
    echo "ARREGLOS \n";
?>

<?php
    echo "Arreglos indexados \n";
    $color1='Rojo';
    $color2='Violeta';
    $color3='Verde';

    $colors=array('violeta', 'azul', 'rojo');
    print_r($colors);
    echo $colors[1];
    $colors[2]='nuevo color';
    print_r($colors);
?>

<?php
    echo "Arreglos asociativos \n";
    $person=array('name'=>'Gustavo', 'lastname'=>'Romero', 'age'=>'30');
    print_r($person);
    print_r($person['name']); ##Obtener el valor a través de la clave
    $person['lastname'] = 'Romo'; ##Asignar otro valor
    print_r($person);
?>

<?php
    echo "Arreglos multidimensionales \n";
    $batleship=array(
        'A'=>array('Mar','Barco','Mar','Mar'),
        'B'=>array('Mar','Mar','Mar','Mar'),
        'C'=>array('Mar','Mar','Barco','Mar'),
        'D'=>array('Mar','Mar','Mar','Mar'),
    );
    print_r($batleship);
    $coordinates=$batleship['A'][1];
    echo $coordinates;
?>