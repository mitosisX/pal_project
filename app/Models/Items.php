<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['name', 'package_size', 'unit', 'quantity', 'crops_id'];

    public function crops()
    {
        return $this->belongsTo(Crop::class, 'crops_id', 'id');
    }

}
