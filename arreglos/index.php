<?php
    echo "ARREGLOS \n"
?>

<?php
    $color1='Rojo';
    $color2='Violeta';
    $color3='Verde';

    $colors=array('violeta', 'azul', 'rojo');
    print_r($colors);
    echo $colors[1];
    $colors[2]='nuevo color';
    print_r($colors);
?>
