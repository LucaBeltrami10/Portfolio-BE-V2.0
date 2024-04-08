<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* si può cancellare */

class Tecnology extends Model
{
    use HasFactory;

    protected $fillable = [
        'tecnology',
        'description',
        'documentation',
        'image',
    ];
}