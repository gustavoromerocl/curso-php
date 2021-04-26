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