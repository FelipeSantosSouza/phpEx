<?php 


//o que acontece na funcao muda o valor da variavel

$a = 20;

	function trocaValor(&$a){

		$a = 50;

	}

trocaValor($a);

echo $a;

 ?>