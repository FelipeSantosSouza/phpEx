<?php 

	class Pessoa{

		public $nome;

		public function falar(){
			//dentro de metodos usa o $this->variavelsem$
			return  "O meu nome é ".$this->nome;
		}

		public function getNome(){
			return $nome;
		}

		public function setNome($nome){
			$this->nome=$nome;
		}

	}

	$pessoa = new Pessoa();

	$pessoa->setNome('Felipe');
	echo $pessoa->falar();

 ?>