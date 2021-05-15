<?php echo "PROGRAMACION ORIENTADA A OBJETOS \n";?>

<?php echo "Clases y atributos \n";?>

<?php echo "Variables de instancia y clase\n";?>

<?php
    require_once('person.php');
    //Variable de instancia
    $jose=new Person();
    $jose->name='Jose';
    $jose->lastname='Lopez';
    $carla=new Person();
    $carla->name='Carla'; //asignar valor
    echo "$carla->name \n";  //acceder al valor publico e imprimir
    echo $carla->see();
    //Variable de clase
    Person::$color='Azul';
?>

<?php echo "\nModificadores de acceso \n";



?>