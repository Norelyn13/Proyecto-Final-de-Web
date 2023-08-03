<x-layout>
    <x-slot:title>
        Libros
    </x-slot:title>

    <section class="flex flex-col space-y-3">
        <h1 class="text-xl font-bold">
            Libros
        </h1>

        <div class="overflow-x-auto border p-2 rounded">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Notas</th>
                    <th>Fecha Publicacion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $libros)
                    <tr>
                        <th>{{$libros->id_titulo}}</th>
                        <td>{{$libros->titulo}}</td>
                        <td>{{$libros->notas}}</td>
                        <td>{{date('d-m-Y', strtotime($libros->fecha_pub))}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </section>
</x-layout>

