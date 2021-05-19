<?php
$user='romero';
$pass='123';

session_start(); //Tambien se puede usar session autostart
if($_POST['userName']===$user && $_POST['password']===$pass){
    $_SESSION['login']='Administrador';
    header('location:index.php');
}else{
    echo 'Usuario y contraseña incorrectos';
}
?>