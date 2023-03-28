<?php

namespace App\Services;

use App\Models\PropertyType;


class PropertyTypeService
{

    public function getAll()
    {
        return PropertyType::all();
    }

    /**
     * Summary of get
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return PropertyType::find($id);
    }

    public function create(array $data): PropertyType
    {
        return PropertyType::firstOrCreate($data);
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
        return PropertyType::where($attributes)->update($data);
    }

    public function delete(int $id): bool
    {
        return PropertyType::find($id)->delete($id);
    }


}
