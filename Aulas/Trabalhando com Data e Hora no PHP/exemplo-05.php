<?php
	/*/////////
	  Seção 8
	///////////*/
	  //Classe DateTime
	  $dt = new DateTime(); //instanciando um objeto
	  /*
		y
		Número de anos.

		m
		Número de meses.

		d
		Número de dias.

		h
		Número de horas.

		i
		Número de minutos.

		s
		Número de segundos.	
	  */
	  $periodo = new DateInterval("P15D");

	  echo $dt->format("d/m/Y h:i:s");
	  
	  $dt->add($periodo);
	  echo "<br>";
	  echo $dt->format("d/m/Y h:i:s");
?>