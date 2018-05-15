<?php 

	 class Animal{

		public function falar():string{

			return "som";

		}

		public function mover():string{
		
			return "anda";
		
		}


	}

	 class Cachorro extends Animal{

		public function falar():string{

			return "Late e ".parent::mover();

		}

	}

	$pluto = new Cachorro();

	echo $pluto->falar()."<br>";




 ?>