<?php
 	/*////////////////////////////
 	Criando e Entendendo Sessões*/
 	//Session
 	require_once("config.php");
	//session_unset($_SESSION["nome"]); //apagando dado da sessão.
	//session_unset(...); se não indica nada no ... apagara todos os dados.
	/*
	session_destroy(); --> espulsa o usuário do site.
	session_unset(); --> apaga variavel os todas as variaveis.
	*/
	echo $_SESSION['nome'];
	session_unset($_SESSION["nome"]);
?>