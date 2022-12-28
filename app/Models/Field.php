<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $fillable = ['area', 'name', 'estates_id'];

    public function crops()
    {
        return $this->hasMany(Crop::class, 'fields_id', 'id');
    }
}
