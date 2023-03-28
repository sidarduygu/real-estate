<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepository
{
    public function getAll();
    public function get(int $id);
    public function create(array $data);
    public function update(int $id, array $attributes, array $data);
    public function delete(int $id);
}
