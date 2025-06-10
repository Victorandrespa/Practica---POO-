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

    public function pariedad(){
        if ($this->valor1 %2 === 0) {
            return "PAR";
        } else {    
            return "IMPAR";
        }
    }

     public function mayormenor(){
        $this ->resultado = [$this->valor1, $this->valor2, $this->valor3];
        rsort($this ->resultado);
        return "Mayor: " . $this->resultado[0] . ", Menor: " . $this->resultado[2];
    }

     public function potencia(){
        $this ->resultado = ($this->valor2 ** $this->valor1) ;
        return $this->resultado;
    }

      public function inversa(){
        $longitud = strlen($this->valor1);
        $i = $longitud - 1;
        $inversa = "";

        while ($i >= 0) {
            $inversa .= $this->valor1[$i];
            $i--;
        }
        return "Original: ". $this->valor1 . " <br> Invertida: " . $inversa;
    }

    public function factorial(){
        $n = $this->valor1;
        $resultado = 1;

        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return "El factorial es: ".$resultado;
    }

    public function perfecto(){
        $suma = 0;

        for ($i = 1; $i < $this->valor1; $i++) {
            if ($this->valor1 % $i == 0) {
            $suma += $i;
            }
        }
        
        if ($suma == $this->valor1) {
            return "Numero Perfecto!";
        }
            return "No es Numero Perfecto!";
    }

    public function primo(){
        $contador = 0;

        for ($i = 1; $i <= $this->valor1; $i++) {
            if ($this->valor1 % $i == 0) {
                $contador++ ;
            }
        }
        
        if ($contador == 2) {
            return "SI Numero Primo!";
        }
            return "No es Numero Primo!";
    }

    public function vocales(){
        $texto = strtolower($this->valor1); 
        $contador = 0;

        for ($i = 1; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], ["a","e","i","o","u"])) {
                $contador ++;
            }
        }
        return "Total de vocales: " . $contador;
    
    }
}

?>