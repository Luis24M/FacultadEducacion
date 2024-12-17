<div class="max-w-2xl mx-auto">
    <form action="{{ route('comentario.store') }}" method="POST"
        class="border-2 border-{{$color}} gap-3 shadow-xl mx-auto rounded-lg p-5 grid md:grid-cols-2 [&>section>img]:bg-{{$color}} [&>section]:flex [&>section>img]:p-2 [&>section]:rounded-md [&>section]:border [&>section]:border-{{$color}} [&>section>img]:rounded-l-[5px] [&>section>input]:w-full [&>section>input]:rounded-r-md [&>section>input]:px-2 [&>section>input]:bg-transparent ">
        @csrf
        <section class="entrada-uno">
            <img src="{{ asset('icons/user.svg') }}" alt="">
            <input type="text" placeholder="Escriba su nombre" id="Nombres" name="nombre">
        </section>
        <section class="entrada-uno">
            <img src="{{ asset('icons/user.svg') }}" alt="">
            <input type="text" placeholder="Escriba su apellido" id="Apellidos" name="apellido">
        </section>
        <section class="entrada-uno md:col-span-2">
            <img src="{{ asset('icons/email.svg') }}" alt="">
            <input type="text" placeholder="Ingrese su correo" id="Correo" name="correo">
        </section>
        <section class="md:col-span-2 flex ">
            <img src="{{ asset('icons/setting.svg') }}" alt="">
            <select id="opciones" name="asunto" class="w-full rounded-r-md bg-transparent">
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="Docente">Docente</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Egresado">Egresado</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Otros">Otros</option>
            </select>
        </section>
        <textarea id="mensaje" name="mensaje" id="Comentarios" placeholder="Escribe Tu Mensaje Aquí"
            class="md:col-span-2 rounded-md p-3 border border-{{$color}} bg-transparent"></textarea>
        <input type="hidden" name="escuela" value="{{$programa}}">
        <input class="py-2 bg-{{$color}} rounded-md text-black font-bold cursor-pointer" type="submit" id="enviar"
            name="enviar" value="Enviar">
        <input class="py-2 border-2 border-{{$color}} rounded-md text-{{$color}} font-bold cursor-pointer" type="reset"
            id="borrar" name="borrar" value="Borrar">
    </form>
</div>

<style>
    #mensaje {
        field-sizing: content;
    }
</style>