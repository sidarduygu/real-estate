<?php

namespace App\Models;

use App\Models\Feature;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyFeature extends Model
{
    use HasFactory;

    protected  $guarded = [];
    
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
