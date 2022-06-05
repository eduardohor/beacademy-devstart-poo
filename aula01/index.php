<?php

include 'Professor.php';

$p1 = new Professor();
$p1->nome = 'Alessandro';
$p1->cpf = '1726737281234';
$p1->salario = 1000;

var_dump($p1);