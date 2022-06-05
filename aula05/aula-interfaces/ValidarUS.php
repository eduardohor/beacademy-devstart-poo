<?php

declare(strict_types=1);

class ValibarUS implements Validar
{
    public static function validarDocumento(string $cpf): void
    {
        if (strlen($cpf) !== 14) {
            die('Documento USA inválido!');
        }
    }
}