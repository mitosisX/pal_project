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
}
