<?php
##Configurando el entorno
    //Imprimir inforamcion
    echo 'hola ', 'mundo ';
    print 'Hola mundo con print';
    
    //Niveles de error
    // Parsed error - Fatal error - Notice error
    //Custom error
?>

<?php
##Variables y tipos

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

?>

<?php
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

<?php
    //SINTAXIS HEREDOC Y NOWDOC
    
    //Heredoc --reconoce caracteres espciales o variables
    $animal=<<<FRASE
    "Con esfuerzo y perserverancia \n podrás alcanzar tus metas"
    'Hola'
    FRASE;

    //Nowdoc -- no reconoce caracteres espciales o variables
    $nowdoc=<<<'FRASE'
    "Con esfuerzo y perserverancia \n podrás alcanzar tus metas"
    'Hola'
    FRASE;

    echo $animal;
    echo $nowdoc;
?>

<?php
    //Conversion de tipos

    //Las variables asumen el tipo de dato que se le asgina de forma dinamica
    $var='hola';
    $price=2000.10;
    $age=12;
    $name='Ozzy';
    $isdog=true;

    //se asigna un nuevo tipo de dato de forma explicita
    $price=(int)$price;
    $name=(bool)$name;

    //Usando funciones
    $price=intval($price);
    $name=boolval($name);
    $isdog=floatval($isdog);
    $age=strval($age);

    echo gettype($var);
    echo var_dump($price); //muestra el tipo y el valor de la variable
    echo var_dump($age);
    echo var_dump($name);
    echo gettype($isdog);

?>