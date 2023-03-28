<?php

namespace App\Services;

use App\Models\Feature;


class FeatureService
{


    public function getAll()
    {
       return Feature::all();
    }

    /**
     * Summary of get
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
       return Feature::find($id);
    }

    public function create(array $data): Feature
    {
        return Feature::firstOrCreate($data);
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
        return Feature::where($attributes)->update($data);
    }

    public function delete(int $id): bool
    {
       return Feature::find($id)->delete($id);
    }



}
