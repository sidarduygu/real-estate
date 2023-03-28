<?php

namespace App\Models;

use App\Models\Property;
use App\Models\ClientType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected  $guarded = [];
    protected  $with = ['clientType', 'properties'];
    
    public function clientType()
    {
        return $this->belongsTo(ClientType::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
