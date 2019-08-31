<?php

//public
	//private
	//protect
	private $nome;

	public function setNome($novoNome){
		$this->nome = $novoNome;
	}
	public function getNome(){
		return $this->nome;
	}
}