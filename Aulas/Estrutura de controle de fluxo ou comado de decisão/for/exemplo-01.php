<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*For --> loop */
	 	//for : como se faz;
	 		for ($i = 0; $i < 1000; $i+=5){
	 			// faz um interonpida e após 'continua';
	 			if ($i >= 200 && $i <= 800) continue; 
	 			// se chegar na situação pare 'break';
	 			if ($i === 900) break; 
	 			echo $i . "<br>";
	 		}
?>