<?php

declare(strict_types=1);

namespace IntegratedAirlines\Service\Model\Pessoa;

use IntegratedAirlines\Service\Model\Model;

final class Cpf extends Model
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        if(!$this->valida($cpf)) {
            throw new \InvalidArgumentException("Erro, cpf inválido!");
        }

        $this->cpf = $cpf;
    }

    public function __toString(): string
    {
        return $this->cpf;
    }

    private function valida(string $cpf): bool
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpf === false) {
            throw new \InvalidArgumentException("Erro, cpf inválido!");
        }

        return true;
    }
}