<?php

class Programador extends Pessoa {

	protected $linguagem;

	public function __construct ($nome, $novaLinguagem){
		$this->nome = $nome;
		$this->linguagem = $novaLinguagem;

		echo "Objeto ".__CLASS__." foi instanciado. <br><br>";
	}
	public function getLinguagem(){
		return $this->linguagem;


	}
}