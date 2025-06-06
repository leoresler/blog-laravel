<x-app-layout title="Editar post">

    <h1>Editar el post: {{ $post->id }}</h1>
    <br>
    <a href="/category">Volver a categorias</a>
    <br>
    <br>

    <form action="/category/edit/{{ $post->id }}" method="POST">

        @csrf

        @method('PUT')

        <input type="text" placeholder="Titulo del blog" name="title" id="title" value="{{ $post->title }}"><br>
        <input type="text" placeholder="Poster o imagen del blog" name="poster" id="poster" value="{{ $post->poster }}"><br>
        <textarea name="content" id="content" cols="30" rows="5" placeholder="Contenido del blog">{{ $post->content }}</textarea><br>
        <button type="submit">Editar</button>
    </form>


</x-app-layout>
