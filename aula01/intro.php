<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';


$a1 = new Aluno();
$a1->nome = 'Edu';
$a1->cpf = '273618274-12';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o básico e intermediário do PHP';


echo "<h1>Aluno: {$a1->nome}</h1>";