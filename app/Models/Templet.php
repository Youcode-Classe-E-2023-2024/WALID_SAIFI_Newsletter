<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templet extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'descrition',
        'content',
         'media'
    ];
}
