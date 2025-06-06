<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // atributos

    use HasFactory;

    protected $table = 'posts';

    // metodos

    protected function title(): Attribute {
        return Attribute::make(
            // convierto la cadena a minuscula para guardarla en la bd
            set: function($value){
                return strtolower($value);
            },
            // devuelvo la cadena para mostrarla con la primera letra mayuscula
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }


}


    
    /* crear un post */
    // $post = new Post;

    // $post->title = 'TiTulO dEL Blog 4';
    // $post->poster = 'Poster del blog 4';
    // $post->content = 'este es un nuevo contenido 4';
    // $post->habilitated = true;
    // $post->save();

    // return $post;

    /* buscar y actualizar un post */
    // $post = Post::find(1);
    // $post = Post::where('title', 'Titulo del blog 1')
    //             ->first();

    // $post->content = 'cambio de contenido blog 1';
    // $post->habilitated = true;

    // $post->save();

    /* listar todos los post */
    // $post = Post::where('id', '>=', '2')
    //             ->get();

    /* ordernar los registros de forma descendente por id, pero puede ser por cualquier atributo(title, content, etc.) de post
        $post = Post::orderBy('id', 'desc')
                ->get();
    */

    /* lo mismo que lo de arriba pero limitando la busqueda a solo id y title
        $post = Post::orderBy('id', 'desc')
                ->select('id', 'title')
                ->get();
    */

    /* eliminar un post */
    // $post = Post::find(4);
    // $post->delete();

    // return "blog con id 4 eliminado";
    
