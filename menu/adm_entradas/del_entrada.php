<?php
require_once("connect_data.php");
require_once __DIR__ . './../vendor/autoload.php';

// Obtener el ID del platillo de la URL
$id = $_GET['id'];

// Verificar si se proporcionó un ID
if (!isset($id)) {
    // Manejar caso en el que no se proporciona un ID válido
    echo "ID de platillo no proporcionado.";
    exit;
}

// Convertir el ID a un tipo ObjectId de MongoDB
$idObject = new MongoDB\BSON\ObjectId($id);

// Eliminar el platillo de la base de datos
$DeleteOneResult = $users->deleteOne([
    '_id' => $idObject
]);

// Redireccionar de vuelta a la página de platillos después de la eliminación
header('Location: entradas.php');
// Imprimir el número de documentos eliminados (opcional)
printf("Deleted %d document(s)\n", $DeleteOneResult->getDeletedCount());
?>
