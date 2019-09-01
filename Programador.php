<?php

class Programador extends Pessoa {

	protected $linguagem;

	public function __construct ($nome, $novaLinguagem){
		$this->nome = $nome;
		$this->linguagem = $novaLinguagem;
	}
	public function getLinguagem(){
		return $this->linguagem;
	}
}