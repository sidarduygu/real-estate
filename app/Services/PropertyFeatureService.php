<?php

namespace App\Services;

use App\Models\PropertyFeature;


class PropertyFeatureService
{

    public function getAll()
    {
       return PropertyFeature::all();
    }

    /**
     * Summary of get
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return PropertyFeature::find($id);
    }

    public function create(array $data): PropertyFeature
    {
        return PropertyFeature::firstOrCreate($data);
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
       return PropertyFeature::where($attributes)->update($data);
    }

    public function delete(int $id): bool
    {
        return PropertyFeature::find($id)->delete();
    }



}
