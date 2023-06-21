<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $filable = [
        'name',
        'phone',
        'email',
        'position',
        'status',
    ];

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class);
    }

    public function salary()
    {
        return $this->hasMany(Salary::class);
    }

}
