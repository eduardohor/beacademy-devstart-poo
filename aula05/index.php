<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

include 'Validar.php';

$c1 = new Cliente('beatriz@email.com', '123456');
$c1->setNome('Beatriz');
$c1->setDataCadastro('09/10/2018');

$g1 = new Gestor('eduardo@email.com', '654321', 4000);
$g1->setNome('Eduardo');
$g1->setSalario(8000.50);

$cpf = '12345678911';

Validar::validarCpf($cpf);

$c1->setCpf($cpf);

$gg1 = new GestorGeral('maria@email.com', '121314', 15000);

var_dump($c1);
var_dump($g1);
var_dump($gg1);