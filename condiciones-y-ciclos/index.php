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