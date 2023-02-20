<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

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

    public function product()
    {
        return $this->belongsTo(Products::class, 'id');
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class, 'estates_id', 'id');
    }

    public function productType()
    {
        return $this->hasOne(ProductType::class,  'id');
    }

    public function unit()
    {
        return $this->hasOne(productUnit::class, 'id');
    }
}
