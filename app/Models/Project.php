<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Tecnology;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'url',
        'creation_date',
        'status',
        'note',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function tecnologies()
    {
        return $this->belongsToMany(Tecnology::class);
    }
}