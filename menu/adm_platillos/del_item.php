<?php
 require_once("connect_data.php");
 require_once __DIR__ . './../vendor/autoload.php';
 $id=$dato['_id'];

    $DeleteOneResult=$users->deleteOne([
       'id'=>$id
    ]);
    header('Location:platillos.php');
    printf("Deleted %d document(s)\n", $DeleteOneResult->getDeletedCount())
  

?>