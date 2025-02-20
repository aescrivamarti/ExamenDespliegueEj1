<?php
use PHPUnit\Framework\TestCase;
use App\Factorial;
class FactorialTest extends TestCase {
 public function testFactorial() {
 $fact = new Factorial();
 $this-> assertEquals(120, $fact->calcularFactorial(5));
 }
}