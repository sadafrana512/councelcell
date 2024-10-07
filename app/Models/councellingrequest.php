<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class councellingrequest extends Model
{
    use HasFactory;
    protected $table = 'form1'; 
    // protected $primaryKey="request_id";
    public function councellingrequest()
    {
        return $this->belongsTo(councellingrequest::class, 'request_id');
    }
    public function appointment()
    {
        return $this->hasOne(Appointment::class, 'request_id', 'request_id');
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'name', 'name');
    }
    
    public function hod()
    {
        return $this->hasMany(Hod::class, 'request_id', 'request_id');
    }
    public function coordinator()
    {
        return $this->hasMany(Coordinator::class, 'request_id', 'request_id');
    }
    public function pcho()
    {
        return $this->hasMany(Pcho::class, 'request_id', 'request_id');
    }
    public function pchia()
    {
        return $this->hasMany(Pchia::class, 'request_id', 'request_id');
    }
    public function caseclose()
    {
        return $this->hasMany(Caseclose::class, 'request_id', 'request_id');
    }
    public function refercounselor()
    {
        return $this->hasMany(ReferCounselor::class, 'request_id', 'request_id');
    }
}
