<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Marca extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','url','imagen'
    ];

    public function getRouteKeyName()
    {
    	return 'url';
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = str::slug($name);

    }



}
