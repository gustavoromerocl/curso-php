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

<?php
    //Concatenacion e interpolacion
    $word1 = 'Gustavo';
    $word2 = 'Romero';

    //concatenacion
    echo 'Hola '.$word1.' '.$word2;

    //interpolacion
    //usando llaves puedes agregar texto adicional
    echo "Hola {$word1}Andres $word2";

?>

<?php
    //Extraer y buscar
    $myString='Bienvenido al mundo de la programacion';
    $findme='programacion';

    echo substr("Gustavo Andres Romero Pérez",8,6);
    echo substr("Gustavo Andres Romero Pérez",-7);
    // retorna la posicion del elemento buscado
    echo strpos($myString, $findme, 12); //El tecer parametro es para indicar desde que posicion comienza la busqueda
?>

<?php
    //Reemplazo y formateo
    $search=' ';
    $replace=':';
    $text='91 75 1A EC 9A C7';

    $arg1=1994;
    $arg2='PHP';
    //$text='En %d fue creado %s';
    $text='En %2$s fue creado %1$d';
    //echo str_replace($search, $replace, $text, $count)  //el argumento count devulve la contidad de coincidencias cambiadas 

    echo sprintf($text,$arg1,$arg2);

    //https://www.php.net/manual/es/
?>
 
<?php
    //PCRE Perl Compatible Regular Expression
    $text='Hola mundo en 123';
    $regex='/^H[aiezo]la/i'; 
    $regex='/^H[a-f]la/i'; 
    $regex='/^H[0-9]la/i'; 

    $text='Hola vivo en México';
    $regex='/Mé(x|j)ico/'; 
    //^ busca al comienzo de la cadena
    //$ busca al final de la cadena
    //i no descrimina entre mayusculas y minusculas

    //Recibe el parametro y donde buscar
    //echo preg_match($regex, $text)

    $text='Los números son 1 4 5 6';
    $regex='/\d/'; //$regex='/[0-9]/';
    //d = numeros  // D = todo menos los numeros

    $regex='/\w/'; //$regex='/[A-Za-z0-9]/';
    //w =  alfanumericos // W = no alfanumericos

    //$regex='/27\/11\/1990/'; // usando barras  
    echo preg_match_all($regex, $text, $matches);
    print_r($matches);

    // * 0 o más concurrencias
    // + una o más concurrencias
?>