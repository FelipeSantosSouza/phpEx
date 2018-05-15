<?php 

	interface Veiculo{

		public function acelerar($velocidade);
		public function freiar($velicidade);
		public function trocarMarcha($marcha);
	}

	abstract class Automovel implements Veiculo{
		public function acelerar($velocidade){
			return 150;
		}
		public function freiar($velicidade){
			return 100;
		}
		public function trocarMarcha($marcha){
			return $marcha;

		}


	}

	class Civic extends Automovel{
		
	} 

	$carro = new Civic();
	echo $carro->trocarMarcha(2);


 ?>