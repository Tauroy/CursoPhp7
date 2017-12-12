<?php
	/*////////////////
	 25.Arrays em PHP.
	//////////////////*/
	//Arrays.
	 //tratando array.

	 $pessoas = array();
	 //essa função criar um item dentro do arrey, depois de já estar criado.
	 array_push($pessoas, array(
	 'nome'=>'Yago',
	 'idade'=>'18'
	)); 

	 array_push($pessoas, array(
	 'nome'=>'Matheus',
	 'idade'=>'17'
	));

	 // print_r($pessoas); 

	 // "$pessoas[0]['nome']" trabalhando com array
	 print_r($pessoas[0]['nome']);