<?php 
	function solo_numeros($cadena){
		$resultado = ereg_replace("[^0-9]", "", $cadena);

		return $resultado;
	}

	echo solo_numeros("-898-85-255*-5");
  
  //Retorna 898852555

?>
