<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
        'recipe_id',
        'descroption'
    ];
    
    public function recipe()
    {
        return $this->belongTo(Recipe::class);
    }
}
