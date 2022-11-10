<?php

use Petshop\Model\Dica;

require_once __DIR__ . '/../vendor/autoload.php';

$dica = new Dica();
$dica->loadById(1);

$dica->titulo = 'Título dica';
$dica->descricao = 'Nova descrição';
$dica->save();