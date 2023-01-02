<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductType extends Model
{
    protected $table ='product_type';
    protected $primaryKey ='id';
    protected $fillable =['name'];

    public function product()
    {
        return $this->hasMany(products::class);

        return $this->hasMany(Stock::class);
    }
}

