<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'age',
        'salary',
        'address',
        'contact',
    ];
    }