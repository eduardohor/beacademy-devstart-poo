<?php

include 'Produto.php';

$p1 = new Produto();
$p1->setNome('Bermuda preta');
$p1->setValor(-200);


// $p1 = new Produto();
// $p1->nome = 'Tenis de corrida';
// $p1->valor = 299;

// $p2 = new Produto();
// $p2->nome = 'Calça jeans';
// $p2->valor = -100;

var_dump($p1);