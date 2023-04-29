<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Group extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
