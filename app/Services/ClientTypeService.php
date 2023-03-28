<?php

namespace App\Services;

use App\Models\ClientType;


class ClientTypeService
{

    public function getAll()
    {
        return ClientType::all();
    }

    /**
     * Summary of get
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return ClientType::find($id);
    }

    public function create(array $data): ClientType
    {
        return ClientType::firstOrCreate($data);
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
        
        return ClientType::where($attributes)->update($data);

    }

    public function delete(int $id): bool
    {
        return ClientType::find($id)->delete($id);
    }
}
