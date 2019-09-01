<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Elian Cristian", "PHP");


echo $programador->getNome()."</br></br>";
echo $programador->getLinguagem()."</br></br>";

echo $programador::ESPECIE;
