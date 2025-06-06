<x-app-layout title="Blog">

    <h1>
        pagina principal
    </h1>

    <div>

        <x-alert2 type="info" class="mb-4 mt-4">
            <x-slot name="title">
                Titulo
            </x-slot>

            Contenido de la alerta
        </x-alert2>
        <p>otros contenidos</p>
    </div>


</x-app-layout>
