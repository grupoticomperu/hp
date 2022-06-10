<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoryservice extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function categoryservice(){
        return $this->belongsTo('App\Models\Categoryservice');
    }

    
    public function getRouteKeyName()
    {
        return 'slug';
        //return ('title');
    }



}
