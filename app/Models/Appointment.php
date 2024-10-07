<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment'; 
    protected $foreignKey="request_id";

    protected $fillable = [
        'date',
        'time',
        'comments',
        'appointed', // Add 'appointed' to allow mass assignment
    ];
    public function form1()
    {
        return $this->belongsTo(councellingrequest::class, 'request_id');
    }
}
