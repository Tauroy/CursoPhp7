<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções
		//Funções no PHP 7 Novidades
			function soma(int ...$valores):float{ //:string converte :"e o tipo desejado" //'int' aqui também já fala o tipo. --> esse int faz iginora o ponto flutuante, retirar a virgula e os números após a virgula.

				return array_sum($valores);
			}

			var_dump(soma(2, 2));
			echo "<br>";
			echo soma(34, 24);
			echo "<br>";
			echo soma(1.5, 3.2);
			echo "<br>";
			var_dump(soma(1.5, 3.2));
			echo "<br>";
?>