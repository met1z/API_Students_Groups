<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'midle_name',
        'birthday',
        'sex',
        'email',
        'group_id',
    ];

    public function groups(){
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
