<?php

namespace App\Repositories;

use App\Models\Estate;
use App\Models\EstateAdress;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class EstateRepository implements BaseRepository
{
    public function getAll(): Collection
    {
        return Estate::all();
    }

    public function create(array $data): Estate
    {    
        $estate = Estate::create([
            'user_id' => 1, //DAHA SONRA AUTH ILE ISLENECEK auth()->user()->id
            'title' => $data['title'],
            'price' => $data['price'],
            'description' => $data['description'],
            'status' => $data['status'],
            'image' => $data['image'],
        ]);

        EstateAdress::create([
            'estate_id' => $estate->id,
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
            'county_id' => $data['county_id'],
        ]);

        return $estate;
    }

    public function update(array $attributes, array $data): bool
    {
        return Estate::where($attributes)->update($data);
    }

    public function delete(int $id): bool
    {
        $estate = Estate::find($id);

        if (!$estate) {
            return false;
        }

        return $estate->delete();
    }
}
