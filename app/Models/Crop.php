<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;
    protected $fillable = ['fields_id', 'name', 'acres', 'description'];

    public function field()
    {
        return $this->belongsTo(Field::class, 'fields_id', 'id');
    }
}
