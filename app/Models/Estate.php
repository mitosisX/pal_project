<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['managers_id', 'name', 'location'];

    public function manager()
    {
        return $this->hasOne(User::class, 'id', 'managers_id');
    }

    public function fields()
    {
        return $this->hasMany(Field::class, 'id');
    }

    public function crops()
    {
        return $this->hasManyThrough(
            Crop::class,
            Field::class,
            'id',
            'fields_id'
        );
    }

    public function requests()
    {
        return $this->hasMany(Requests::class, 'estates_id');
    }
}
