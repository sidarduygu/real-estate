<?php

namespace App\Repositories;

use App\Models\Estate;
use App\Models\EstateAdress;
use App\Models\EstateTeype;
use InvalidArgumentException;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class EstateRepository implements BaseRepository
{
    public function getAll(): Collection
    {
        return Estate::all();
    }

    public function get(int $id)
    {
        return Estate::find($id);
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

        $estateTeype = EstateTeype::create([
            'estate_id' => $estate->id,
            'name' => $data['name'],

        ]);

        return $estate;

    }

    public function update(int $id, array $attributes, array $data)
    {

        if (!$id || !is_numeric($id)) {
            throw new InvalidArgumentException($id);
        }

        if (empty($attributes) || empty($data)) {
            throw new InvalidArgumentException($id);
        }

        $estate = Estate::find($id);
        $estate->title = $data['title'] ?? $estate->title;
        $estate->price = $data['price'] ?? $estate->price;
        $estate->description = $data['description'] ?? $estate->description;
        $estate->image = $data['image'] ?? $estate->image;
        $estate->status = $data['status'] ?? $estate->status;
        $estate->save();


        $estateAddress = EstateAdress::where('estate_id',$id)->first();
        $estateAddress->city_id = $data['city_id'];
        $estateAddress->county_id = $data['county_id'];
        $estateAddress->country_id = $data['country_id'];
        $estateAddress->save();

        return $estate;

    }




    public function delete(int $id): bool
    {
        $estate = Estate::find($id);

        if (!$estate) {
            return false;
        }

        $estate->address()->delete();

        return $estate->delete();
    }
}
