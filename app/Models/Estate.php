<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['address'];

    public function address()
    {
        return $this->hasOne(EstateAdress::class);
    }
}
