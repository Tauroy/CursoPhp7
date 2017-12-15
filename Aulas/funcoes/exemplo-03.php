<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções

		//func_get_args();

		function ola(){
			$argumento = func_get_args();

			return $argumento;
		
		}

		var_dump(ola("ola mundo!", 10)); //será exibido: array(2) { [0]=> string(10) "ola mundo!" [1]=> int(10) }

?>