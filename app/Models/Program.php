<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs'; 
    protected $primaryKey="program_id";

    public function allStudentsData()
{
    return $this->hasMany(all_students_data::class, 'program_id', 'Class_ID');
}
}
