<?php
	
	require 'operacions.php';
	use \PHPUnit\Framework\TestCase;
	
	
	class  operacionsTest extends PHPUnit\Framework\TestCase {
	
		private $operacio_test;
 
		protected function setUp(): void{
			$this->operacio_test = new operacions();
		}
 
		protected function tearDown(): void{
			$this->operacio_test = NULL;
		}
 
		public function testSuma(){
			# Test 1
			$result = $this->operacio_test->suma(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->suma(1.2, 3.4);
			$this->assertEquals(4.6, $result);
			# Test 3
			$result = $this->operacio_test->suma(1.2, -5.4);
			$this->assertEquals(-4.2, $result);			
		}
		
		/*
		public function testResta(){
			
		}
		
		public function testMultiplica(){
			
		}
		
		public function testDivideix(){
			
		}
		public function testPotencia(){
			
		}
		*/
 	}
?>
	
	
