<?php 

	//__ é um metodo mágico
	
	class Endereco{

		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($n, $l, $c){

			$this->logradouro = $l;
			$this->numero = $n;
			$this->cidade = $c;
		}

		public function getLogradouro()
		{
			return $this->logradouro;
		}

		public function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;

			return $this;
		}

		public function getNumero()
		{
			return $this->numero;
		}

		public function setNumero($numero)
		{
			$this->numero = $numero;

			return $this;
		}

		public function getCidade()
		{
			return $this->cidade;
		}

		public function setCidade($cidade)
		{
			$this->cidade = $cidade;

			return $this;
		}
		public function __destruct(){
			echo 'Destruir';
		}
		public function __toString(){
			return $this->logradouro.' '.$this->numero.' '.$this->cidade;
		}
	}

	$end = new Endereco('1','Rua a','Sao Paulo');
	var_dump($end);
	echo $end;
	unset($end);

 ?>