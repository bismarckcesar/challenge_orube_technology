<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'height', 'weight', 'gender', 'health_plan'
    ];

    public function attendancePatient()
    {
        return $this->hasMany(Attendance::class);
    }
}
