<?php

namespace App\Services;

use App\Models\Client;
use App\Services\BaseService;

class ClientService implements BaseService
{

    public function getAll()
    {
        return Client::all();
    }

    /**
     * Summary of get
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return Client::find($id);
    }

    public function create(array $data): Client
    {
        return Client::firstOrCreate($data);
    }

    //public function update(array $attributes, array $data): bool
    /**
     * Summary of update
     * @param int $id
     * @param array $attributes
     * @param array $data
     * @throws \Exception
     * @return bool
     */
    public function update(array $attributes, array $data)
    {
        return Client::where($attributes)->update($data);
    }

    public function delete(int $id): bool
    {
        return Client::find($id)->delete($id);
    }
}
