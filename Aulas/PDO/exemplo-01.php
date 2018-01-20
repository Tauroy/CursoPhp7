<?php

class Pessoa{

	public $nome; // Atributo

	public function falar(){ // Método
		return "O meu nome é ".$this->nome; // $this --> Nada mais é a clase já instanciada. ¨¨$this: variavel interno do PHP 'serve para referenciar atributos e métodos dentro de outros métodos'.
		// atributo fora do método, escreve normal.. só dentro de um método que se vai usar o '$this'.
	}
}

$glaucio = new Pessoa();
$glaucio->nome= "Glaucio Daniel";
echo $glaucio->falar();

?>