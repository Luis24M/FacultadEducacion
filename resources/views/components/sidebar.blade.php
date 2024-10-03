<nav class="w-full md:w-[400px] text-center bg-[#D5D6E7] h-full fixed right-0 py-10 flex flex-col">
    <a href="/">
        <div class="flex justify-center items-center">
            <img class="w-32"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png/1200px-Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png"
                alt="Logo unt">
            <h1 class="text-xl font-bold">FACEDU</h1>
        </div>
        <p class="flex w-80 mx-auto justify-center text-lg text-center">Facultad de educación y ciencias de la
            comunicación</p>
    </a>
    <section class="mt-10">
        <div class="idiomas">
            <p class="my-4">Eng - Esp</p>
        </div>
        <input type="text" placeholder="Buscar" class="p-1 rounded-md border border-black w-4/5 my-2">
    </section>
    <section class="mt-10 flex-1 min-h-0 overflow-y-auto">
        @include('components.side-menu')
    </section>
</nav>
{{-- 
<script>
    document.querySelectorAll('[data-dropdown]').forEach(button => {
    const dropdown = button.closest('.dropdown').querySelector('[data-dropdown-menu]');

    button.addEventListener('click', (event) => {
        event.stopPropagation(); // Evitar que el clic se propague
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !isExpanded);

        // Cerrar otros dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(otherDropdown => {
            if (otherDropdown !== dropdown) {
                otherDropdown.classList.add('max-h-0');
                otherDropdown.classList.remove('max-h-60');
                otherDropdown.previousElementSibling.querySelector('[data-dropdown]').setAttribute('aria-expanded', 'false');
            }
        });

        // Alternar el dropdown actual
        dropdown.classList.toggle('max-h-0');
        dropdown.classList.toggle('max-h-60');
    });
});

// Manejar clics en submenús (cerrar dropdowns al hacer clic fuera)
window.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-menu').forEach(dropdown => {
        dropdown.classList.add('max-h-0');
        dropdown.classList.remove('max-h-60');
    });
    document.querySelectorAll('[data-dropdown]').forEach(button => {
        button.setAttribute('aria-expanded', 'false');
    });
});

// Permitir que los submenús no se cierren al hacer clic en ellos
document.querySelectorAll('.group').forEach(submenu => {
    submenu.addEventListener('click', (event) => {
        event.stopPropagation();
    });
});

</script> --}}