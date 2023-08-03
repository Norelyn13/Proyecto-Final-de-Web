<x-layout>
    <x-slot:title>
        Autores
    </x-slot:title>

    <section class="flex flex-col space-y-3">
        <h1 class="text-xl font-bold">
            Autores
        </h1>

        <div class="overflow-x-auto border p-2 rounded">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>Pais</th>
                    <th>Telefono</th>
                    <th>Cod. Postal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $autores)
                    <tr>
                        <th>{{$autores->id_autor}}</th>
                        <td>{{$autores->nombre}}</td>
                        <td>{{$autores->apellido}}</td>
                        <td>{{$autores->direccion}}</td>
                        <td>{{$autores->ciudad}}</td>
                        <td>{{$autores->estado}}</td>
                        <td>{{$autores->pais}}</td>
                        <td>{{$autores->telefono}}</td>
                        <td>{{$autores->cod_postal}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </section>
</x-layout>

