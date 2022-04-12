<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table="teachers";
    protected $fillable = [
        'email',
        'name',
        'appellation',
        'role_id',
        'password',
        'sicil'
    ];
}
