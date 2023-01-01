<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryJob extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =['description', 'type', 'unit', 'quantity', 'status', 'drivers_id', 'items_id', 'estates_id'];

    public function driver()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function item()
    {
        return $this->belongsTo(products::class, 'items_id', 'id');
    }


    public function estate()
    {
         return $this->belongsTo(Estate::class, 'estates_id', 'id');
     }
}