<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = 'warehouses';
    protected $filable = [
        'name',
        'phone',
        'email',
        'address',
        'status',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
