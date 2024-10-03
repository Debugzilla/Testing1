<?php
//Ex5 de PHP Basics i pensa tests qe podries fer per provar el seu correcte funcionament
//Programals i despres ves realitzant el programa a testejar pas a pas segons valides els test previament.
use PHPUnit\Framework\TestCase;
include "notas.php";


class avaluarTest extends TestCase {

   /** @test */
   public function testEsde1aDivision() {
    $nota = new nota(60);
    

    $resultado = $nota->es1aDivision();
    
  
    $this->assertTrue($resultado);
}

public function testEsde2aDivision() {
    $nota = new nota(45);
    
   
    $resultado = $nota->es2aDivision();
    
    
    $this->assertTrue($resultado);
}


public function testEsde3aDivision() {
    $nota = new nota(40);
    

    $resultado = $nota->es3aDivision();
    

    $this->assertTrue($resultado);
}


public function testSuspendido() {
    $nota = new nota(10);
    

    $resultado = $nota->Suspendido();
    
   
    $this->assertTrue($resultado);
}


}

?>