<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

    <title>Actualizar Producto</title>
</head>
<body>
    <?php
    require_once '../../navegacion/nav-bar.php';
    // Requerir el archivo de conexión a la base de datos y las bibliotecas necesarias
    require_once("connect_data.php");
    require_once __DIR__ . './../vendor/autoload.php';

    use MongoDB\BSON\ObjectId;

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
       
    
        try {
            $objectId = new ObjectId($id);
        } catch (\Exception $e) {
            echo "Error al crear ObjectId: " . $e->getMessage();
            exit;
        }

  
        $product = $users->findOne(['_id' => $objectId]);

      
        if ($product) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Editar Producto</h1>
                        <form method="POST" action="./update_product.php">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $product['nombre']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ingredientes" class="form-label">Ingredientes</label>
                                <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"><?php echo $product['ingredientes']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="instrucciones" class="form-label">Instrucciones</label>
                                <textarea class="form-control" id="instrucciones" name="instrucciones" rows="3"><?php echo $product['instrucciones']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $product['codigo']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $product['precio']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        } else {
            echo "No se encontró el producto.";
        }
    } else {
        echo "No se recibió el ID del producto a editar.";
    }
    ?>
</body>
</html>
