<?php
//https://www.php.net/manual/es/ini.list.php
session_start();
//session_destroy(); //Elimina todas las sesiones
//unset($_SESSION['login']); //Elimina la sesion indicada
if(isset($_SESSION['login'])){
    echo 'Bienvenido '.$_SESSION['login'];
}else{
    echo 'Sin sesión';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="login_sesion.php"> 
<!--
    <table>
        <?php
            $array=array('name'=>'Nombre', 'lastName'=>'Apellido', 'adress'=>'Direccion', 'phone'=>'Phone');
            foreach($array as $key=>$value):

        ?>
        <tr>
            <td>
                <?php echo $value?>
            </td>
            <td>
                <input type="text" name=<?php echo $key?>>
            </td>
        </tr>
        <?php endforeach;?>
        <tr>
            <td>
                Sexo
            </td>
            <td>
                <input type="radio" name="sex" value="mujer"> Mujer 
                <input type="radio" name="sex" value="hombre"> Hombre
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Enviar"> 
            </td>
        </tr>
    </table>
-->
Usuario: <input type="text" name="userName"><br>
Contraseña: <input type="password" name="password"><br>
<input type="submit" name="send" text="Enviar"><br>
</form>
<!--<h1><?php ##echo "{$_GET['answer']} {$_GET['name']}";?></h1>-->
</body>
</html>