<x-app-layout title="Categorias">

    <h2>Categorias</h2>
    <br>

    <a href="/category/create">Nuevo post</a>
    <br>
    <br>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/category/show/{{ $post->id }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
        

</x-app-layout>