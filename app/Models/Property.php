<?php

namespace App\Models;

use App\Models\Client;
use App\Models\PropertyType;
use App\Models\PropertyImage;
use App\Models\PropertyFeature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected  $guarded = [];
    protected  $with = ['propertyImages', 'propertyFeatures', 'propertyType', ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function propertyFeatures()
    {
        return $this->hasMany(PropertyFeature::class);
    }
}
