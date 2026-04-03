<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClosingStatement extends Model { protected $fillable = ['date', 'item_name', 'pcs', 'kg', 'packs', 'price']; }