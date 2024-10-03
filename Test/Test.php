<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include "numberChecker.php";
class numbersTest extends TestCase{

    private $op;


    public function setUp(): void{

        $this->op = new NumberChecker(8);
    }



    public function test_is_Even(){
        $this->assertTrue($this->op->isEven());
    }

    public function test_is_Positive(){
        $this->assertTrue($this->op->isPositive());
    }

   
}





?>