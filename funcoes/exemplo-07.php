<?php 

	function soma(int ...$valores){

		return array_sum($valores);
	}


	echo soma(2,2,4,5,3,2,5,6);


 ?>