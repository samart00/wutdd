<?php
	class Captcha
	{
		private $pattern;
		private $rightOperand;
		private $leftOperand;
		private $operator;
		public function setPattern($pattern){
			$this->pattern = $pattern;
			if($pattern == 1){
				$this->operator = '+';
			}else
				$this->operator = '-';
		}
		public function setRightOperand($number){
			$this->rightOperand = $number;
		}
		public function setLeftOperand($number){
			$this->leftOperand = $number;
		}
		public function getRightOperand(){
			$wordNumber = "";
			if($this->pattern == 1){
				$wordNumber = $this->getTextFromNumber($this->rightOperand);
			}else{
				$wordNumber = $this->rightOperand;
			}
			return $wordNumber;
		}
		public function getLeftOperand(){
			$wordNumber = "";
			if($this->pattern == 2){
				$wordNumber = $this->getTextFromNumber($this->leftOperand);
			}else{
				$wordNumber = $this->leftOperand;
			}
			return $wordNumber;
		}
		public function getTextFromNumber($number){
			$arr = ['zero','one','two','three','four','five','six','seven','eight','nine','ten'];
			return $arr[$number];
		}
		public function getOperator(){
			return $this->operator;
		}
	}

?>