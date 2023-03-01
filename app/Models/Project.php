<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = ['title', 'data_progetto', 'difficoltà', 'descrizione', 'slug'];
    use HasFactory;

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }
}
