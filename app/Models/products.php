<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\productsController;

class products extends Model
{
    protected $table ='products';
    protected $primaryKey ='id';
    protected $fillable =['date', 'type','name', 'unit', 'quantity','price'];
}


