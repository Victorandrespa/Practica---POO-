<?php

    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas

    $operaciones = new OperacionesBasicas();
        $operaciones->valor1 = $_POST["input_factorial_valor1"];

    //Promedio -------------------

    if (isset($_POST["btn_factorial"])) {
        echo $operaciones->factorial();     
    }else {
        echo "Error no detectado";    
    };

?>