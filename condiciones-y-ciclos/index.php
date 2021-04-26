<?php
    echo "CONDICIONES Y CICLOS \n"
?>

<?php
##If, else y else if
    $edad=15;
    if($edad >= 18 && $edad<=30){
        echo 'Puedes ver la pelicula';
    }else if($edad > 30) {
        echo 'No puedes ver la pelicula por que tu edad es mayor a 30';
    }
    else{
        echo 'No puedes ver la pelicula por que tu edad es menor a 18';
    }
?>

<?php
##Switch
    $shirt='Verde';
    switch($shirt):
        case 'Rojo':
            echo 'Camisa color rojo';
            break;
        case 'Azuk':
            echo 'Camisa color azul';
            break;
        case 'Verde':
            echo 'Camisa color verde';
            break;
        default:
            echo 'No encontramos lo que buscabas';
        break;
    endswitch;
?>

<?php
##For
    for($i=1; $i<=10;++$i){
        echo "Anuncio repetir $i \n";
    }

    //Inverso
    for($i=10; $i>=1;--$i){
        echo "Anuncio repetir $i \n";
    }
?>

<?php
##While y do While
    $cont=1;
    while($cont<=12){
        echo "Zapato numero $cont \n";
        ++$cont;
    }

//La diferencia con while es que al menos se ejecuta una vez el codigo
    do{
        echo "Zapato numero $cont \n";
        ++$cont;
    }while($cont<=12);
?>

<?php
##FOreach
    $animals = array('Gato', 'Perro', 'Panda');
    $datas = array('Nombre' => 'Gustavo', 'Apellido' => 'Romero', 'Sexo' => 'Masculino');
    foreach($animals as $animal){
        echo "El animal es $animal \n";
    }

    foreach($datas as $clave => $valor){
        echo "La clave es $clave y el valor es $valor \n";
    }
?>