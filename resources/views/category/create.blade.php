<x-app-layout title="Crear post">

    <h2>Formulario para crear un post</h2>
    <br>
    <a href="/category">Volver a categorias</a>
    <br>
    <br>

    <form action="/category" method="POST">
        @csrf
        <input type="text" placeholder="Titulo del blog" name="title" id="title"><br>
        <input type="text" placeholder="Poster o imagen del blog" name="poster" id="poster"><br>
        <textarea name="content" id="content" cols="30" rows="5" placeholder="Contenido del blog"></textarea><br>
        <button type="submit">Subir</button>
    </form>

</x-app-layout>