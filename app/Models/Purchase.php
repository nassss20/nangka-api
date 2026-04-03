<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model { protected $fillable = ['date', 'item_name','quantity', 'unit', 'price']; }
