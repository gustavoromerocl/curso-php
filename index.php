<?php
##Configurando el entorno
    //Imprimir inforamcion
    echo 'hola ', 'mundo ';
    print 'Hola mundo con print';
    
    //Niveles de error
    // Parsed error - Fatal error - Notice error
    //Custom error

##Varibles y tipod

    //VARIABLES Y CONSTANTES

    //declaración de variables
    $rosa = 'color ';
    $variable = 'Global ';
    
    function test(){
        //global $rosa;
        $rosa = 'flor ';
        //Para imprimir la variable global es necesario anteponer la palabra reservada global
        echo $rosa;
    }

    test();

    //declarando constante

    const PATH1='curso-php/index.php';
    echo PATH1;

    //Usando define es posible asignar variables y funciones de forma directa
    define('PATH2', 'curso-php/index2.php');
    echo PATH2;

    //print_r imprimer arreglos
    //print_r(get_defined_constants(true));


    //COMILLAS SIMPLES Y DOBLES


    $nombre = 'Gustavo';
    //Comillas simples
    echo '\n \"Hola $nombre \n como estas \' " ';

    //Comillas dobles 

    //Para poner comilas dentro de comillas usar \"
    echo "\n \"Hola $nombre \n como estas\" ";

    //Para poner el signo $
    echo " Tu ganas mucho dinero \$_$"
?>