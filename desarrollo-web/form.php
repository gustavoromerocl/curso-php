<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
//REQUEST POST OR GET 
$name=$_REQUEST['name'];
$lastName=$_REQUEST['lastName'];
$adress=$_REQUEST['adress'];
$phone=$_REQUEST['phone'];
$sex=$_REQUEST['sex'];

echo "Nombre $name Apellido $lastname Direccion $adress Telefono $phone Sexo $sex";
header("location:index.php?answer=Tus datos han sido recibidos&name=gracias {$name}"); 
}
?>