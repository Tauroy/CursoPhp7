<?php
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 /*switch case --> a principal diferencia do if, é que já sabemos o que vai vim 'aconteceu isso, faça isso' 1 valor é igual '=' a tal coisa, não tem maior .. diferente.. sempre será igual. ***No caso do switch, já se sabe as opções que se pode acontecer ou não. */

	 	//recuperar dia da semana
	 		$diaDaSemana = 8; // date("w");
	 		switch ($diaDaSemana){
	 			case 0:
	 				echo "Domingo";
	 			break;

	 			case 1;
	 				echo "Segunda";
	 			break;

	 			case 2;
	 				echo "Terça-feira";
	 			break;

	 			case 3;
	 				echo "Quarta-feira";
	 			break;

	 			case 4;
	 				echo "Quinta-feira";
	 			break;

	 			case 5;
	 				echo "Sexta-feira";
	 			break;

	 			case 6;
	 				echo "Sábado";
	 			break;

	 			//caso não caia em nenhuma condição.
		 			default;
		 				echo "Dia da semana inválido";
		 			break;
	 		}
?>