<?php

require "Pessoa.php";

$uma_pessoa = new Pessoa;

$uma_pessoa->setNome("Elian Cristian");
echo $uma_pessoa->getNome();
