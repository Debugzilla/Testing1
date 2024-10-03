
<?php
class nota {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function es1aDivision() {
        if ($this->valor >= 60) {
       
            return true;
        }
        return false;
    }

    public function es2aDivision() {
        if ($this->valor >= 45) {
     
            return true;
        }
        return false;
    }


    public function es3aDivision() {
        if ($this->valor >= 33) {
     
            return true;
        }
        return false;
    }

    public function Suspendido() {
        if ($this->valor < 33) {
     
            return true;
        }
        return false;
    }



}


    



    
       


?>