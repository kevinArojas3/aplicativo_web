<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ["name","status"];
    
    public function products(): HasMny{
        return $this->hasMany(Product::class);
    }
}
