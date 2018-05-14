<?php 

	class Pessoa{
		public $nome = "Felipe";
		protected $idade = 21;
		private $senha =  "1234";

		public function verDados(){
			echo $this->nome."<br/>";
			echo $this->idade."<br/>";
			echo $this->senha."<br/>";
				
		}
	}

	class PessoaFisica extends Pessoa{

	}

	$pf = new PessoaFisica();
	$pessoa = new Pessoa();
	$pessoa->verDados();
 ?>