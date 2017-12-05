<?php 
	$nome = "Yago";
	
	function exemplo0(){ // {} demarca o escopo
		global $nome; // puxa a variavel esterna
		echo $nome;
	}
	
	function exemplo1(){
		$nome = "matheus";
		echo $nome;
	}
	
	echo exemplo0();
	echo "<br>";
	echo exemplo1();
?>