<?php

    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas

    $operaciones = new OperacionesBasicas();
        $operaciones->valor1 = $_POST["input_potencia_valor1"];
        $operaciones->valor2 = $_POST["input_potencia_valor2"];

    //Promedio -------------------

    if (isset($_POST["btn_potencia"])) {
        echo "El resultado de la potencia es: " . $operaciones->potencia();     
    }else {
        echo "Error no detectado";    
    };

?>