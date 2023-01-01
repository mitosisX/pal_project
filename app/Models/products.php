<?php

namespace App\Models;

use App\Models\Crop;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\productsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class products extends Model
{
    protected $table ='products';
    protected $primaryKey ='id';
    protected $fillable =['name', 'type','unit', 'package_size', 'supplier','unit_price'];

    // public function crops()
    // {
    //     return $this->belongsTo(Crop::class, 'crop_id',  'id');
    // }
}


