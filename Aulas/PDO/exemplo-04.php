<?php

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct();
	var_dump("DESTRUIR");
}

$meuEndereco = new Endereco("Rua peroba do campo", "111", "Rio de Janeiro");
var_dump($meuEndereco);

unset($meuEndereco):
?>