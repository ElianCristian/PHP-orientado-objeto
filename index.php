<?php
 
 require "Pessoa.php";

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Elian";
$uma_pessoa->idade = "25";
$uma_pessoa->altura = "1,75";

$uma_pessoa->falarNome();
$uma_pessoa->falarIdade();
$uma_pessoa->falarAltura();
?>