<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <title>Entradas</title>
</head>

<body>

    <?php
    require_once '../../navegacion/nav-bar.php';
    ?>

    <div class="container-fluid">
        <p>
            <?php
            require_once("connect_data.php");

            if ($users->count() > 0) {
                //busqueda por filtro de categoria
                $datos = $users->find(['categoria' => 'entrada']);
            ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ingredientes</th>
                    <th scope="col">Instrucciones</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Precio</th>
                    <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
            </thead>
            <?php
                foreach ($datos as $dato) {
            ?>
                <tr>
                    <td>
                        <p><?php echo $dato["_id"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $dato["nombre"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $dato["ingredientes"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $dato["instrucciones"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $dato["codigo"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $dato["categoria"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $dato["precio"] ?></p>
                    </td>
                    <td><button type="button" class="btn btn-info edit" onclick="location.href='edituserprueba.php?id=<?php echo $dato['_id']; ?>'">Editar</button></td>
                    <td><button type="button" class="btn btn-danger extbt delete-btn">Eliminar</button></td>
                </tr>
            <?php
                } //foreach
            ?>
        </table>
        <script>
            var deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var confirmacion = confirm("¿Estás seguro que deseas eliminar este elemento?");
                    if (confirmacion) {

                        var id = this.getAttribute('data-id');
                        location.href = "del_item.php?id=" + id;
                    } else {
                        alert("Operación cancelada.");
                    }
                });
            });
        </script>
    <?php
            } else {
    ?>
        <h4>Sin registros en la Base de Datos</h4>
    <?php
            } ?>
    </p>
    </div>
</body>

</html>