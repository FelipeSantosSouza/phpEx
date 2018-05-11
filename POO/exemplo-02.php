<?php 

	class Carro{

		private $modelo;
		private $motor;
		private $ano;


		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor(){
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}

		public function getAno(){
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}


		public function exibe(){
			return array(

					'Modelo'=>$this->modelo,
					'Motor'=>$this->motor,
					'Ano'=>$this->ano

			);

		}
		
	}


	$carro = new Carro();

	$carro->setMotor(1500);
	$carro->setAno(1978);
	$carro->setModelo('Fucao');

	print_r($carro->exibe());


 ?>