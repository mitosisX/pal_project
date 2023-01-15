<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;

    protected $table = 'request';

    protected $fillable = [
        // 'id',
        'products_id', 'type_id',
        'unit_id', 'estates_id',
        'request_category_id', 'status',
        'quantity', 'description'
    ];

    public function productName()
    {
        return $this->hasOne(Products::class, 'products_id', 'id');
    }
}
