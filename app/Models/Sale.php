<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {
    protected $fillable = ['date', 'location_id', 'custom_location', 'production_packs', 'actual_packs', 'price'];
    public function location() { return $this->belongsTo(Location::class); }
}
