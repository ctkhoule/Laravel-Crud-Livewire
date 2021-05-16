<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Ajout du tableau $fillable
    protected $fillable = [
        'name',
        'email',
        'mobile'
    ];
}
