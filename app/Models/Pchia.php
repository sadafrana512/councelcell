<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pchia extends Model
{
    use HasFactory;
    protected $table = 'pchia'; 
    protected $foreignKey="request_id";

    public function form1()
    {
        return $this->belongsTo(councellingrequest::class, 'request_id');
    }
}
