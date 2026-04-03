<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    protected $fillable = ['name', 'position'];
    public function salaries() { return $this->hasMany(Salary::class); }
}