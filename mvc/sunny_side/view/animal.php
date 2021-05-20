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
        <tr>
            <?php require_once 'core/const.php';
                foreach(DATA_ANIMAL as $key=>$value):     
            ?>

        <td>
            <?php echo $value;?>
        </td>
        <?php endforeach ?>
        <td>Genero</td>
        </tr>
        <?php foreach($this->model->getAll() as $animal): ?>
        <tr>
            <td><?php echo $animal->name ?></td>
            <td><?php echo $animal->specie ?></td>
            <td><?php echo $animal->breed ?></td>
            <td><?php echo $animal->color ?></td>
            <td><?php echo $animal->age ?></td>
            <td><?php echo $animal->gender ?></td>
            <td><a href="">Editar</a></td>
            <td><a onClick="javascript: return confirm('¿Seguro de eliminar el registro?');" href="">Eliminar</a></td>
        </tr>
    </table>
</body>
</html>