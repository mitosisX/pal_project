<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryJob extends Model
{
    use HasFactory, SoftDeletes;
    protected $table ='delivery_jobs';
    protected $primaryKey = 'id';
    protected $fillable =['type', 'unit', 'quantity', 'status', 'category_id', 'products_id', 'estates_id', 'deleted_at', 'created_at', 'updated_at'];
    protected $attributes = [
        'status' => 'pending',];

    public function driver()
    {
        return $this->belongsTo(User::class,'drivers_id', 'id');
    }

    public function item()
    {
        return $this->belongsTo(products::class, 'products_id', 'id');
    }


    public function estate()
    {
         return $this->belongsTo(Estate::class, 'estates_id', 'id');
     }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}