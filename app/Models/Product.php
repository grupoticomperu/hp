<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'titulo','resumen','iframe','descripcion','precio','cantidad','published_at','category_id', 'user_id'
    ];

    public function getRouteKeyName()
    {
        return 'url';
        //return ('title');
    }

    protected $dates = ['published_at'];

    public function setTituloAttribute($titulo)
    {
        $this->attributes['titulo'] = $titulo;
        $this->attributes['url'] = str::slug($titulo);

    }

    public function images()
    {
        return $this -> hasMany(Image::class);  

    }


}
