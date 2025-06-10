<?php

    require_once("../clases/OperacionesBasicas.php");

    //Crear un objeto o instanciar una clase = crear elemento de clase especifica
    //$operaciones es un objeto de OperacionesBasicas

    $operaciones = new OperacionesBasicas();
        $operaciones->valor1 = $_POST["input_mayormenor1"];
        $operaciones->valor2 = $_POST["input_mayormenor2"];
        $operaciones->valor3 = $_POST["input_mayormenor3"];

    //Promedio -------------------

    if (isset($_POST["btn_mayormenor"])) {
        echo "Resultado: " . $operaciones->mayormenor();     
    }else {
        echo "Error no detectado";    
    };

?>