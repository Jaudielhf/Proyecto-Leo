<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
<script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <title>Entradas</title>
</head>
<body>
<?php
  require_once '../../navegacion/nav-bar.php';
?>



    
<p>
    <?php
    require_once("connect_data.php");

    if ($users->count()>0)
    {
        $datos = $users->find();
        ?>
        <table border=1>
        <?php
        foreach ($datos as $dato) {
?>      <tr>
                        <td><p><label>ID: </label><?php echo $dato["_id"]; ?></p></td>
                        <td><p><label>Nombre: </label><?php echo $dato["nombre"]; ?></p></td>
                        <td><p><label>Ingredinetes: </label><?php echo $dato["ingredientes"]; ?></p></td>
                        <td><p><label for="">instrucciones</label><?php echo $dato["instrucciones"] ?></p></td>
                        <td><p><label for="">codigo</label><?php echo $dato["codigo"] ?></p></td>
                        <td><p><label for="">Categoria</label><?php echo $dato["categoria"] ?></p></td>

                        <td><p><label for="">precio</label><?php echo $dato["precio"] ?></p></td>
                        <td><a class="edit" href="edituserprueba.php?id=<?php echo $dato["_id"];?>">Editar</a></td>
                        <td><a class="extbt" href="del_item.php?id=<?php echo $dato["_id"];?>">Eliminar</a></td>
        </tr>
                 <?php
         }//foreach
                 ?>
                 </table>
                 <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>

</p>
</body>
</html>