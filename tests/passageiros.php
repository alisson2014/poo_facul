<?php

declare(strict_types=1);

require_once("vendor/autoload.php");

use IntegratedAirlines\Service\Model\Pessoa\{Email, Cpf};
use IntegratedAirlines\Service\Model\Aeroporto\Voo;
use IntegratedAirlines\Service\Model\Passageiro\{Bagagem, Passageiro, Passagem};

$irineu = new Passageiro("Irineu silva", new Cpf("489.155.350-22"), new Email("irineu@gmail.com"));
$joao = new Passageiro("João kleber", new Cpf("352.315.840-02"), new Email("joaokleber20@hotmail.com"));
$ana = new Passageiro("Ana eloa", new Cpf("533.155.120-35"), new Email("anaeloa1@gmail.com"));
$bagagemAna = new Bagagem(20.6, $ana);
$bagagemJoao = new Bagagem(21.8, $joao);
$bagagemIrineu = new Bagagem(18, $irineu);
$passagemAna = new Passagem(100, new Voo(), $ana);
$passagemJoao = new Passagem(122.39, new Voo(), $joao);