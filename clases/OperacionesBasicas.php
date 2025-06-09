<?php
class OperacionesBasicas{
    
    //atributos = caracteristicas = variables ------------------------
    public $valor1;
    public $valor2;
    public $valor3;
    private $resultado;


    //metodos = acciones = funciones ---------------------------------

    public function promedio(){
        $this ->resultado = (($this->valor1 + $this->valor2 + $this->valor3)/3) ;
        return "El promedio es = " . $this->resultado;
    }
    public function areaTriangulo(){
        $this ->resultado = (($this->valor1 * $this->valor2)/2) ;
        return "El area es = ". $this->resultado;
    }
    public function parImpar(){
        if ($this->valor1 % 2 === 0) {
            return "La multiplicacion es: ". $this->resultado;
        } else {    
            "Operacion Invalida";
        }
    }
    
}

?>