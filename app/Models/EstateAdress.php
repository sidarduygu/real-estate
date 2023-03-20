<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateAdress extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['country', 'city', 'county'];

    public function country()
    {
        return $this->hasOne(Country::class, 'id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id');
    }

    public function county()
    {
        return $this->hasOne(County::class, 'id');
    }
}
