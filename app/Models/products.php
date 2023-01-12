<?php

namespace App\Models;

use App\Models\Crop;
use App\Models\ProductType;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\productsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class products extends Model
{
    protected $table ='products';
    protected $primaryKey ='id';
    protected $fillable =['name', 'type','unit', 'package_size', 'supplier', 'use', 'unit_price'];

    public function item()
    {
        return $this->hasMany(Deliveryjob::class);
    }

    public function proType()
    {
        return $this->belongsTo(ProductType::class, 'type',  'id');
    }

   
}


