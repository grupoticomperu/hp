<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryservice extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    //Relacion uno a muchos
    public function subcategoryservices(){
        return $this->hasMany('App\Models\Subcategoryservice');
    }
    
}
