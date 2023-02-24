<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(Products::class, 'products_id');
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class, 'estates_id', 'id');
    }

    public function productType()
    {
        return $this->hasOne(ProductType::class,  'id', 'type_id');
    }

    public function unit()
    {
        return $this->hasOne(productUnit::class, 'id', 'unit_id');
    }


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'request_category_id');
    }
}