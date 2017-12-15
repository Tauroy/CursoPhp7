<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções
		//Funções no PHP 7 Novidades
			function soma(int ...$valores){ //declracarão de tipos escalares * ele transforma para inteiro e simplifica*
				return array_sum($valores);
			}

			echo soma(2, 2);
			echo "<br>";
			echo soma(30, 24);
			echo "<br>";
			echo soma(1.5, 3.2);
			echo "<br>";
?>