<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function notes()
    {
        return $this->belongsTo('App\Models\Notes');
    }
    use SoftDeletes;
    use HasFactory;
}
