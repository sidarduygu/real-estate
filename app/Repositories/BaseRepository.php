<?php 

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepository
{
    public function getAll();
    public function create(array $data);
    public function update(array $attributes, array $data);
    public function delete(int $id);
}
