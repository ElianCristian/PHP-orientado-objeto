<?php

class Pessoa {
	public $nome;
	public $idade;

	public function falarNome(){
		echo $this->nome;
	}
	public function falarIdade(){
		echo $this->idade;
	}
}

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Elian";
$uma_pessoa->idade = "25";

$uma_pessoa->falarNome();
$uma_pessoa->falarIdade();
?>