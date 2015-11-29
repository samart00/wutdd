<?php
	class Random
	{
		public static function randomPettern(){
			return rand(1, 2);
		}
		public static function randomOperator(){
			return rand(1, 2);
		}
		public static function randomOperand(){
			return rand(0, 10);
		}
	}
?>