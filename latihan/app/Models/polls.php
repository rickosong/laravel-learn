<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polls extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'deadline', 'created_by', ];
}
