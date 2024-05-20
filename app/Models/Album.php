<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'banda'];
    public $timestamps = false;

    public function generos(){
        return $this->belongsToMany(Genero::class);
    }
}
