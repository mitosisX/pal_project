<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productUnit extends Model
{
    protected $table ='product_unit';
    protected $primaryKey ='id';
    protected $fillable =['name'];

    public function product()
    {
        return $this->hasMany(products::class);

        return $this->hasMany(Stock::class);
    }
}
