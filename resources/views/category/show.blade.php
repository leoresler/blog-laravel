<x-app-layout title="Mostrar post">

    <a href="/category">Volver a categorias</a>

    <h1>Post con id: {{ $post->id }}</h1>

    <br>

    <h2>Titulo: {{ $post->title }}</h2>
    <p>Poster o imagen: {{ $post->poster }}</p>
    <p>Contenido del blog: {{ $post->content }}</p>

    <a href="/category/edit/{{ $post->id }}">Editar post</a>

</x-app-layout>