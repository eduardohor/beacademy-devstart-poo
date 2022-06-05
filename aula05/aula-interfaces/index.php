<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12345678912';
$docx = '12345678901231';

ValibarBR::validarDocumento($cpf);
ValibarUS::validarDocumento($docx);

echo "Terminou!";