<x-layout>
    <x-slot:title>
        Contacto
    </x-slot:title>

    <section class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-bold mb-6">
            Contacto
        </h1>
        <form method="post" action="/api/contacto" class="flex flex-col space-y-3 w-full md:w-2/3">
            @csrf
            <label>
                <span class="font-bold">
                    Correo
                </span>
                <input name="correo" type="text" class="input input-bordered w-full">
            </label>

            <label>
                <span class="font-bold">
                    Nombre
                </span>
                <input name="nombre" type="text" class="input input-bordered w-full">
            </label>

            <label>
                <span class="font-bold">
                    Asunto
                </span>
                <input name="asunto" type="text" class="input input-bordered w-full">
            </label>

            <label>
                <span class="font-bold">
                    Comentario
                </span>
                <textarea name="comentario" class="textarea textarea-bordered w-full">
                </textarea>
            </label>

            <div class="flex flex-row space-x-3 justify-end">
                <input type="reset" class="btn btn-neutral">
                <input type="submit" class="btn btn-primary">
            </div>


        </form>
    </section>
</x-layout>

