<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected  $fillable = [
        'name',
        'description',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    use HasFactory;
}
