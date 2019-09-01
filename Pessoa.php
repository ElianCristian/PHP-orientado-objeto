<?php
class Pessoa {
//public
	//private
	//protect
	public $nome;

	const ESPECIE = "Humana";

	public function __construct($recebeNome){
		$this->nome = $recebeNome;
	}

	public function setNome($novoNome){
		$this->nome = $novoNome;
	}
	public function getNome(){
		return $this->nome;
	}
}