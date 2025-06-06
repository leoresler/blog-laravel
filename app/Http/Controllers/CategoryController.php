<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('id', 'desc')
                    ->get();

        return view('category.index', compact('posts'));
    }

    public function getShow($id) {
        $post = Post::find($id);

        return view('category.show', compact('post'));
    }
    // [ 'id' => $id ] esto hace compact

    public function getCreate() {
        return view('category.create');
    }

    public function store(Request $request) {
        $post = new Post();

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->content = $request->content;

        $post->save();

        return redirect('/category');
    }

    public function getEdit($id) {
         $post = Post::find($id);

        return view('category.edit', compact('post'));
    }

    public function update(Request $request, $post) {
        // request son los datos del formulario y post los datos de la url
        $post = Post::find($post);

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->content = $request->content;

        $post->save();

        return redirect("/category/edit/{$post->id}");
    }

    public function destroy($id) {
        return "Eliminar el post: {$id}";
    }
}

