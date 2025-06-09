<?php
    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas


    $operaciones = new OperacionesBasicas();
    $operaciones->valor1 = $_POST["input_area_base"];
    $operaciones->valor2 = $_POST["input_area_altura"];

    //Area Triangulo -------------.
    
    if (isset($_POST["btn_area_triangulo"])) {
        echo $operaciones->areaTriangulo();     
    }else {
        echo "Error no detectado";    
    };
    
?>