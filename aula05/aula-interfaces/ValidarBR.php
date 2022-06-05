<?php

declare(strict_types=1);

class ValibarBR implements Validar
{
    public static function validarDocumento(string $cpf): void
    {
        if (strlen($cpf) !== 11) {
            die('CPF inválido!');
        }
    }
}