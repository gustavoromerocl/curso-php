<?php echo "PROGRAMACION ORIENTADA A OBJETOS \n";?>

<?php echo "Clases y atributos \n";?>

<?php echo "Variables de instancia y clase\n";?>


<?php
    require_once('person.php');
    require_once('client.php');
    //Variable de instancia
    $jose=new Person();
    $jose->name='Jose';
    $jose->lastname='Lopez';
    $carla=new Person();
    $carla->name='Carla'; //asignar valor
    echo "$carla->name \n";  //acceder al valor publico e imprimir

    //Usando protected
    $lauren=new Client();
    $lauren->eat();

    //$carla->talk();

    //Variable de clase
    Person::$color='Azul';

    //Usando protected
    $lauren=new Client();
    $lauren->eat();
?>

<?php 
    require_once('person.php');
    require_once('client.php');    
    require_once('employee.php');  
    echo "\nHerencia\n";

    //Usando protected
    $lauren=new Client();
    $lauren->eat();

    $gael=new Employee();
    $gael->run();


?>

<?php
//declare(strict_types=1);
    require_once('person.php');
    require_once('client.php');    
    require_once('employee.php');  
    echo "\nGet y set\n";

    $lauren=new Client();
    $lauren->setCorreo("Correo@correo.cl");
    echo $lauren->getCorreo();

?>

<?php
    require_once('client.php');    
    echo "\nTraits\n";

    $lauren=new Client();
    $lauren->pay();
    echo $lauren->plus(10,10); //usar directamente el metodo de operation

?>

<?php
    require_once('client.php');    
    require_once('employee.php');  
    echo "\nType hinting\n";

    $lauren=new Client();
    $lauren=setName('Lauren');
    $gael=new Employee();
    $gael=setName('Gael');

    $lauren->say($gael);
?>
