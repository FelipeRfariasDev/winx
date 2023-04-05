<?php

namespace App\Repositories\Contracts;

interface OrcamentoRepositoryInterface
{
    public function store($data):object;
    public function getAll():object;
}
