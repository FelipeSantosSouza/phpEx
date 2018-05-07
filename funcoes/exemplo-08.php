<?php 

	function soma(float ...$valores): float{

		return array_sum($valores);
	}


	var_dump(soma(2.2,2,4,5,3,2,5,6));


 ?>