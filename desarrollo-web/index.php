<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                <input type="submit" name="submit" value="Guardar"> 
            </td>
        </tr>
    </table>
</body>
</html>