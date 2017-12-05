<?php
  /*--------------------
 	>Tipos de variáveis< 
 	--------------------*/

	//////////////////
	// Tipos Básicos //
	//////////////////

	//string --> texto tem aspas!
		$nome = "Hcode";
		$site = 'www.hcode.com.br';

	//numérico --> número não tem aspas!
		$ano = 1999;
	//ponto flutuante
		$salario = 5500.99;
	//boleano
		$bloqueado = false;

//------------------------------

	////////////////////
	// Tipos Compostos //
	////////////////////

	//array
	/*	$frutas = array("abacaxi","laranja","manga");
	  	echo $frutas[2];
	  	echo "<br>"; */

	//objeto exemplo simples
	  	date_default_timezone_set('America/Sao_Paulo'); //<-- para o funcionamento do DateTime é necessário determina o fuso horário.
	  	$nascimento = new DateTime();
	  	//var_dump($nascimento);

//-------------------------------

	/////////////////////
	// Tipos Especiais //
	/////////////////////

	 //resource
	  	$arquivo = fopen("exemplo-03.php", "r");
	  	//var_dump($arquivo);

	 //Null
	   // null é a auzencia de valor, não existie. vazio foi iniciado, só não tem informação.
	  	$nulo = Null; 
	  	$vazio = "";
 ?>