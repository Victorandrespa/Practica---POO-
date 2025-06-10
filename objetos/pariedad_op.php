<?php

    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas

    $operaciones = new OperacionesBasicas();
        $operaciones->valor1 = $_POST["input_pariedad_valor1"];

    //Promedio -------------------

    if (isset($_POST["btn_pariedad"])) {
        echo "El numero es: " . $operaciones->pariedad();     
    }else {
        echo "Error no detectado";    
    };

?>