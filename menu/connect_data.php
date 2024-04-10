<?php
require_once __DIR__ . './vendor/autoload.php';

// Conectar a la base de datos y seleccionar la colección 'menu'
$mongoClient = new MongoDB\Client;
$collection = $mongoClient->restaurante->menu;

// Obtener todos los productos del menú
$cursor = $collection->find();

// Convertir el cursor a un array asociativo para poder manipularlo más fácilmente
$menuItems = iterator_to_array($cursor);

// Devolver el array de productos del menú
return $menuItems; 
?>
