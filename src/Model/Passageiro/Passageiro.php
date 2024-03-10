<?php

declare(strict_types=1);

namespace IntegratedAirlines\Service\Model\Passageiro;

use IntegratedAirlines\Service\Model\Pessoa\{Email, Cpf, Pessoa};

final class Passageiro extends Pessoa
{
    private bool $checked = false;
    
    public function __construct(string $nome, Cpf $cpf, Email $email)
    {
        parent::__construct($nome, $cpf, $email);
    }
}