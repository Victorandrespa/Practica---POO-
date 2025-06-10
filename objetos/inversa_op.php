<?php

    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas

    $operaciones = new OperacionesBasicas();
        $operaciones->valor1 = $_POST["input_inversa_valor1"];

    //Promedio -------------------

    if (isset($_POST["btn_inversa"])) {
        echo $operaciones->inversa();     
    }else {
        echo "Error no detectado";    
    };

?>