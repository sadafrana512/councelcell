<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_students_data extends Model
{
    use HasFactory;
    protected $table = 'all_students_data'; 
    protected $primaryKey="class_id";
    public function counselor()
    {
        return $this->hasOne(Counselor::class, 'dep_id', 'dep_id');
    }
    public function users()
    {
        return $this->hasOne(User::class, 'dep_id', 'dep_id');
    }

}
