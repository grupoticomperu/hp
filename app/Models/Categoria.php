<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre','url','imagen'
    ];

    public function getRouteKeyName()
    {
    	return 'url';
    }

    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = $nombre;
        $this->attributes['url'] = str::slug($nombre);

    }

}
