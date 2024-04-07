<?php
require_once("connect_data.php");
require_once __DIR__ . './../vendor/autoload.php';

use MongoDB\BSON\ObjectId;

if (isset($_POST['id'], $_POST['nombre'], $_POST['ingredientes'], $_POST['instrucciones'], $_POST['codigo'], $_POST['precio'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ingredientes = $_POST['ingredientes'];
    $instrucciones = $_POST['instrucciones'];
    $codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
   
    try {
        $objectId = new ObjectId($id);
    } catch (\Exception $e) {
        echo "Error al crear ObjectId: " . $e->getMessage();
        exit; 
    }
  
    $updateResult = $users->updateOne(
        ['_id' => $objectId],
        ['$set' => [
            'nombre' => $nombre,
            'ingredientes' => $ingredientes,
            'instrucciones' => $instrucciones,
            'codigo' => $codigo,
            'precio' => $precio
        ]]
    );


    if ($updateResult->getModifiedCount() > 0) {
        echo "Producto actualizado correctamente.";
        header('location:bebidas.php');
    } else {
        echo "No se realizó ninguna actualización.";
    }
} else {
    echo "No se recibieron todos los datos necesarios para la actualización.";
}
?>
