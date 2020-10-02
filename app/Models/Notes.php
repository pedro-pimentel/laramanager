<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Products');
    }
    use HasFactory;
}
