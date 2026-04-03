<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {
    protected $fillable = ['name', 'default_price'];
    public function sales() { return $this->hasMany(Sale::class); }
}
