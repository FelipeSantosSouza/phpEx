<?php 

	class Pessoa{
		public $nome = "Felipe";
		protected $idade = 21;
		private $senha =  "1234";

		public function verDados(){
			echo get_class($this)."<br>";
			echo $this->nome."<br/>";
			echo $this->idade."<br/>";
			echo $this->senha."<br/>";
				
		}
	}

	class Programador extends Pessoa{
		/*public function verDados(){

			echo get_class($this)."<br>";

			echo $this->nome."<br/>";
			echo $this->idade."<br/>";
			echo $this->senha."<br/>";
				
		}*/
	}
	
	$pessoa = new Programador();
	$pessoa->verDados();
 ?>