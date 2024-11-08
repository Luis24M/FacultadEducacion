<nav class="w-full md:w-[35%] max-w-[400px] text-center bg-[#1A3A5A] text-white h-full fixed right-0 px-2 py-9 lg:p-10 flex flex-col">
    <a href="/">
        <div class="flex">
            <img class="w-32"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png/1200px-Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png"
            alt="Logo unt">
            <div class="flex justify-center items-center">
                <h1 class="text-xl font-bold">FACEDU</h1>
            </div>
        </div>
        <p class="flex max-w-80 mx-auto flex-wrap justify-center text-lg text-center">Facultad de educación y ciencias de la
            comunicación</p>
    </a>
    <section class="mt-9">
        <div class="idiomas">
            <p class="my-4">
                <a href="">Eng</a>  
                - 
                <a href="">Esp</a>
            </p>
        </div>
        <input type="text" placeholder="Buscar" class="p-1 rounded-md border border-black w-4/5 my-2">
    </section>
    <section class="mt-6 flex-1 min-h-0 overflow-y-auto no-scrollbar text-black [&>h3]:text-white">
        @include('components.side-menu')
    </section>
</nav>