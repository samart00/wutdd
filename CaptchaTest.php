<?php
	class CaptchaTest extends PHPUnit_Framework_TestCase
	{
		/*public function testTextNumberEnter1ReturnOne()
		{
			$Captcha = new Captcha();
			$this->assertEquals('one',$Captcha->testTextNumber);
		}*/
		public function testSetLeftOperandPattern1With5ReturnFive()
		{
			$captcha = new Captcha;
			$captcha->setPattern(1);
			$captcha->setRightOperand(5);
			$this->assertEquals('five',$captcha->getRightOperand());
		}
		public function testSetRightOperandPattern1With3Return3()
		{
			$captcha = new Captcha;
			$captcha->setPattern(1);
			$captcha->setRightOperand(3);
			$this->assertEquals('three',$captcha->getRightOperand());
		}
		public function testSetRightOperandPattern2With4Return4()
		{
			$captcha = new Captcha;
			$captcha->setPattern(2);
			$captcha->setRightOperand(4);
			$this->assertEquals(4,$captcha->getRightOperand());
		}
		public function testSetLeftOperandPattern2With7ReturnSeven()
		{
			$captcha = new Captcha;
			$captcha->setPattern(2);
			$captcha->setLeftOperand(7);
			$this->assertEquals('seven',$captcha->getLeftOperand());
		}
		public function testGetPattern1ReturnPlusOperator()
		{
			$captcha = new Captcha;
			$captcha->setPattern(1);
			$this->assertEquals('+',$captcha->getOperator());
		}
		public function testGetPattern2ReturnMinusOperator()
		{
			$captcha = new Captcha;
			$captcha->setPattern(2);
			$this->assertEquals('-',$captcha->getOperator());
		}
		public function testNumber0ReturnZero(){
			$captcha = new Captcha;
			$this->assertEquals('zero',$captcha->getTextFromNumber(0));
		}


	}

?>