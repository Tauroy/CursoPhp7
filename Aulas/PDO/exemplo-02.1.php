<?php

class mercado{
	private $alimento; 
	private $limpeza;
	private $bebida;
	private $outros;

		public function getAlimento(){
			return $this->alimento;
		}
		public function setAlimento($valorAlimento){
			$this->alimento = $valorAlimento;
		}

		public function getLimpeza(){
			return $this->limpeza;
		}
		public function setLimpeza($valorLimpeza){
			$this->limpeza = $valorLimpeza;
		}
		
		public function getBebida(){
			return $this->bebida;
		}
		public function setBebida($valorBebida){
			$this->bebida = $valorBebida;
		}

		public function getOutros(){
			return $this->outros;
		}
		public function setOutros($valorOutros){
			$this->outros = $valorOutros;
		}

		public function exibir(){
			 return array(
				"Alimento"=>$this->getAlimento(),
				"Limpeza"=>$this->getLimpeza(),
				"Bebida"=>$this->getBebida(),
				"Outros"=>$this->getOutros()
			);
		}

}

 $tx = new mercado();
 $tx->setAlimento("Batata");
 $tx->setLimpeza("ype");
 $tx->setBebida("Coca-Cola");
 $tx->setOutros("bolacha");

 print_r($tx->exibir());
?>