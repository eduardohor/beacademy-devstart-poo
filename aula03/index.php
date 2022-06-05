<?php

include 'Produto.php';
include 'Categoria.php';


$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, toalhas de rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');


$p1 = new Produto('Tenis', 199, $c3);
// $p1->setNome('Bermuda preta');
// $p1->setValor(-200);

$p2 = new Produto('Calça', 250.69, $c1);
//$p2->setCategoria($c2); no vai funcionar porque categoria tá marcado somente leitura
// $p2->nome = 'Calça jeans';
// $p2->valor = -100;


// $p1 = new Produto();
// $p1->nome = 'Tenis de corrida';
// $p1->valor = 299;

var_dump($p1);
var_dump($p2);