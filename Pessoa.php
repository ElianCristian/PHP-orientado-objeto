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