<?php

	/*//////////////////////////////////////////////////
	 		    18. Strings em PHP tempo: 21:09
	//////////////////////////////////////////////////*/
	//strings

	 //strpos(); --> indica a posição
	 	$frase = "A repetição é a mãe da rentenção.";
	 	$palavra = "mãe";
	 		$q = strpos($frase, $palavra);
	 			var_dump($q);
	 			echo "<br>";
	 //substr(); --> exibi o que está escrito de antes até a palavra alvo.
	 		$texto0 = substr($frase, 0, $q);
	 			var_dump($texto0);
	 			echo "<br>";
	 //strlen(); --> retorna o tamanho de una string.
	 		$texto1 = substr($frase, $q + strlen($palavra), strlen($frase));
	 			var_dump($texto1);
?>