<?php
	/*/////////
	  Seção 8
	///////////*/
	  //Função date() e a Função Time()

	  //$ts = strtotime("2001-09-11"); TELA: 1000159200
	  $ts = strtotime("+1 week");

	  echo date("l, d/m/Y", $ts);
?>