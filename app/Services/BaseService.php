<?php

namespace App\Services;

interface BaseService
{
    public function getAll();
    public function get(int $id);
    public function create(array $data);
    public function update(array $attributes, array $data);
    public function delete(int $id): bool;
}

