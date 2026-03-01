<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    // These are the exact columns we allow our Flutter app to save data to
    protected $fillable = [
        'date',
        'kg',
        'purchase_kg',
        'total_packs',
        'display_packs',
        'rejected_amount',
        'rejected_unit',
        'balance_packs',
        'purchase_rm',
        'sales_rm',
    ];
}
