<?php

class Pessoa {
	public $nome;
	public $idade;
	public $altura;

	public function falarNome(){
		echo $this->nome;
	}
	public function falarIdade(){
		echo $this->idade;
	}
	public function falarAltura(){
		echo $this->altura;
	}
}

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Elian";
$uma_pessoa->idade = "25";
$uma_pessoa->altura = "1,75";

$uma_pessoa->falarNome();
$uma_pessoa->falarIdade();
$uma_pessoa->falarAltura();
?>