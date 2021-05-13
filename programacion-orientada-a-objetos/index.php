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
    $carla->name='Carla';

    //Variable de clase
    Person::$color='Azul';
?>
