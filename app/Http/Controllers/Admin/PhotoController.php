<?php
namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function store(Post $post)
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

    	Photo::create([
    	   	'url' => Storage::url($photo),
        //    'url' =>request()->file('photo')->store('public'),
        //    'url' => request()->file('photo')->store('posts','public');
    		'post_id' => $post->id

    	]);


    }


    public function destroy(Photo $photo)
    {
        $photo->delete();
        //return
        /*Storage::disk('public')->delete($photo->url);*/
        
        $photoPath = str_replace('storage','public',$photo->url);
        //para eliminar cambiamos storage por public ya qye la imagen esta almacenada en 
        //la carpeta public y no en la ca´peta storage 
        Storage::delete($photoPath);

        return back()->with('flash','Foto Eliminada');

    }



}
