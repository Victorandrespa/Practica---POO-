<?php

    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas

    $operaciones = new OperacionesBasicas();
        $operaciones->valor1 = $_POST["input_vocales_valor1"];

    //Promedio -------------------

    if (isset($_POST["btn_vocales"])) {
        echo  $operaciones->vocales();     
    }else {
        echo "Error no detectado";    
    };

?>