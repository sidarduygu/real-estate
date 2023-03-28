<?php

namespace App\Services;

use App\Models\Property;
use App\Models\PropertyImage;


class PropertyService
{

    public function getAll()
    {
        return Property::all();
    }

    /**
     * Summary of get
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return Property::find($id);
    }

    public function create(array $data): Property
    {
        $tempData = $data;
        unset($data['image']);
        $property = Property::firstOrCreate($data);
        $image = imageUpload($tempData['image'], 'property');
        PropertyImage::create([
            'property_id' => $property->id,
            'image_url' => $image,
            'image_type' => 'jpg',
            'image_alt_text' => 'resim'

        ]);

        return $property;
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
      return Property::where($attributes)->update($data);
    }

    public function delete(int $id): bool
    {
        return Property::find($id)->delete();
    }

}
