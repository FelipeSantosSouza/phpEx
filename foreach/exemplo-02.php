<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">
i98u
	

</form>


<?php 
	if(isset($_GET)){


		foreach ($_GET as $key => $value) {
			echo $key.' '.$value.'<hr>';
		}
	}
 ?>