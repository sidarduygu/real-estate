<?php 

namespace App\Services;

interface BaseService
{
    public function getAll();
    public function create(array $data);
    public function update(array $attributes, array $data): bool;
    public function delete(int $id): bool;
}

