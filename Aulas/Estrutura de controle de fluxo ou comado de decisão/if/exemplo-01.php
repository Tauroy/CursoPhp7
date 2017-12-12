<?php 
	/*///////////////////////////////////////////////////////
	 20.Estruturas Condicionais-If, ElseIf Else tempo: 10:55 
	/////////////////////////////////////////////////////////*/
	//Estrutura de controle de fluxo ou comado de decisão.

	 //if --> Se; else --> Se não; else if; echo()?:;

	 	$qualASuaIdade = 75;

	 	$idadeCrianca = 12;
	 	$idadeMaior = 18;
	 	$idadeMelhor = 65;

	 	if ($qualASuaIdade < $idadeCrianca){
	 		echo "Criança";

	 	}else if ($qualASuaIdade < $idadeMaior){
	 		echo "Adolecente";
	 	
	 	}else if ($qualASuaIdade < $idadeMelhor){
	 		echo "Adulto";
	 	}else{
	 		echo "Idoso";
	 	}

	 	echo "<br>";

	 	echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";//"?" --> é o Então; ":" --> Se Não; Muito ultilizada em condições simples 'Rápida';
	 		echo "<br>";
	 	echo ($idadeCrianca<$idadeMaior)?"Criança" :"aldulto";
?>