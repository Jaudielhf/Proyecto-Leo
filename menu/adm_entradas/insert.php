<?php

require_once __DIR__ . './../vendor/autoload.php';
$nombre= $_POST['name'];
$ing= $_POST['ingredientes'];
$instr= $_POST['instrucciones'];
$category= $_POST['categoria'];
$cod=$_POST['codigo'];
$price=$_POST['precio'];
$collection = (new MongoDB\Client)->restaurante->menu;

$insertOneResult = $collection->insertOne([
    'nombre' => $nombre,
    'ingredientes' => $ing,
    'instrucciones' => $instr,
    'categoria' => $category,
    'codigo' => $cod,
    'precio' => $price
    
]);

header("Location:entradas.php");


var_dump($insertOneResult->getInsertedId());

?>