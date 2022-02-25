<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //
    public function store(Product $product)
    {
    	
    	$this->validate(request(), [
    		'photo' => 'required|image|max:2048'
    	]);
  
    	$photo = request()->file('photo')->store('public');
        //$photo  tiene el valor de: public/dffffffffjhsahasgk.jpg
        //si quieres mostrar la imagen con esta ruta da error
        //$photoUrl = $photo->store('public');
        //$photoUrl  tiene el valor de: public/dffffffffjhsahasgk.jpg
        //si quieres mostrar la imagen con esta ruta da error
        //le aplicamos: php artisan storage:link
        //storage link hace que sea publico la carpeta storage

       //$photoUrl = Storge::url($photo);
       //$photoUrl  tiene el valor de: /storage/dffffffffjhsahasgk.jpg
       //en la tabla guardamos esta ruta /storage/dffffffffjhsahasgk.jpg
       //para mostrar la imagen debemos llamar a esta ruta
        //return request()->file('photo')->store('posts','public');

       /* $post->photos()->create([

            'url' => request()->file('photo')->store('posts','public'),
        ]);
        */

       

    	Image::create([
    	   	'url' => Storage::url($photo),
        //    'url' =>request()->file('photo')->store('public'),
        //    'url' => request()->file('photo')->store('posts','public');
    		'product_id' => $product->id

    	]);
    }





}
