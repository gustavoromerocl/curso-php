<?php
##https://www.php.net/manual/es/book.pdo.php
##El el fichero php.ini se puede habilitar otros motores de base de datos, por defecto apache trae pdo mysql y sqlite

//print_r(PDO::getAvailableDrivers()); //Consulta las base de datos activas
require_once 'animal.php';

$animal = new Animal();
print_r($animal->getAll());

$animal->id=3;
$animal->name='Ozzy';
$animal->specie='Perro';
$animal->breed='kiltro';
$animal->gender='Macho';
$animal->age='12';
$animal->color='Dorado';

//$animal->create();

//$animal->delete(2);

$animal->update();
?>