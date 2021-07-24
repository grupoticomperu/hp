<?php

namespace App\Models;//este name space hace que no se ponga la ruta completa en Category y Tag
//este namespace evita que pongas use App\Models\Category

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    //protected $guarded = [];//deshabilita la asignacion masiva
    protected $fillable =[
        'title','body','iframe','excerpt','published_at','category_id'
    ];

    public function getRouteKeyName()
    {
        return 'url';
        //return ('title');
    }

    protected $dates = ['published_at'];//agregamos la propiedad o atributo $dates para que acepte propiedades de carbon porque ya es instancia de carbon

    //relacion de muchos a uno
    public function category()//$post->category->name
    {
        return $this->belongsTo(Category::class);//no es necsario poner App\Models\Category::class, no es necesario poner porque esta declarado el namespace  App\Models 
    }
    //relacion de muchos a muchos
    //se esta usando la convencion de llamar a la tabla: post_tag
    //los campos post_id
    //otro campo tag_id
    //entonces no es necesario parametros
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopePublished($query)
    {
        $query->whereNotNull('published_at')
              ->where('published_at', '<=', Carbon::now())
              ->latest('published_at');  
    }


        //de uno a muchos
    public function photos()
    {
        return $this -> hasMany(Photo::class);  

    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['url'] = str::slug($title);

    }

    public function setPublishedAtAttribute($published_at)
    {
       // $this->attributes['published_at'] =  $request->has('published_at')?Carbon::parse($request->get('published_at')):null;
        
         $this->attributes['published_at'] =  $published_at ? Carbon::parse($published_at) : null;

    }

    public function setCategoryIdAttribute($category)
    {
       // $this->attributes['published_at'] =  $request->has('published_at')?Carbon::parse($request->get('published_at')):null;
        
         $this->attributes['category_id'] =  Category::find($category)? $category : Category::create(['name'=>$category])->id;
    }


    public function syncTags($tags)
    {

        $tagIds = collect($tags)->map(function($tag){
            return Tag::find($tag) ? $tag : Tag::create(['name'=>$tag])->id;
        });

        return $this->tags()->sync($tagIds);
    }

}

    