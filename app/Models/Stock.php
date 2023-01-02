<?php

namespace App\Models;

use App\Models\products;
use App\Models\Suppliers;
use App\Models\ProductType;
use App\Models\productUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    protected $table ='stock';
    protected $primaryKey ='id';
    protected $fillable =['name', 'type','unit', 'package_size', 'supplier','quantity','unit_price'];

    public function proName()
    {
        return $this->belongsTo(products::class, 'name',  'id');
    }

    public function proType()
    {
        return $this->belongsTo(ProductType::class, 'type',  'id');
    }

    public function proUnit()
    {
        return $this->belongsTo(productUnit::class, 'unit',  'id');
    }

    public function proSupplier()
    {
        return $this->belongsTo(Suppliers::class, 'supplier',  'id');
    }
}
