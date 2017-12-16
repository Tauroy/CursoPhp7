<?php
	/*/////////
	  Seção 8
	///////////*/
	  //Função date() e a Função Time()

	 /*//SIGNIFICADO//
	 d--> Dia
	 m--> Mes
	 y--> Ano em dois dígitos
	 Y--> Ano em quatro dígitos
	 H--> Hora
	 i--> Minuto
	 s--> Segundos

	 */
	echo date("d/m/Y H:i:s", 1513448403);
	echo "<br>";
	echo date("d/m/Y H:i:s");
	echo "<br>";

	//para pegar timestamp
	echo time();
		
?>