<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignments extends Model
{
    use HasFactory;
    protected $table = 'assignments';
    protected $primaryKey = 'id';
    protected $fillable = ['driver_id', 'job_id'];


    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo(DeliveryJob::class, 'job_id', 'id');
    }
}
