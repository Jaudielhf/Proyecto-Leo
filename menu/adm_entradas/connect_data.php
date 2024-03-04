<?php
	//crean una base de datos llamada restaurante y una colleccion llamada menu
    //crean de igual forma una carpeta donde almacenen los platillos, o las bebidas, o los postres
	require_once __DIR__ . '../../vendor/autoload.php';
    $users = (new MongoDB\Client)->restaurante->menu; 
	
?>