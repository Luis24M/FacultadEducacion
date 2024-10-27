<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="Facultad de Educación de la Universidad Nacional de Trujillo">
    <meta name="keywords" content="Educación, Universidad, Trujillo, Educación Inicial, Educación Primaria, Educación Secundaria, Educación Física, Educación Artística, Educación Especial">
    <meta name="author" content="FACEDU - UNT">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FACEDU - UNT</title>
    <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
      </script>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="h-full">
    <main class="flex justify-between h-full">
        @if(request()->routeIs('noticias'))
        <section class="w-full">
        @else
        <section class="w-full md:min-w-[calc(100%-400px)] md:w-[65%]">
        @endif
            @if(request()->routeIs('home'))
            <div class="md:hidden">
                @include('components/navbar')
            </div>
            @else
                @include('components/navbar')
            @endif
            <section class=" min-h-[calc(100dvh-230px)] bg-[#F0F6FE]">
                {{-- <h1 class="text-4xl text-center">Bienvenido a FACEDU</h1> --}}
                @yield('content')
            </section>
            @include('components/footer')
        </section>
        @if(!request()->routeIs('noticias'))
        <section class="hidden md:flex">
                @include('components/sidebar')
        </section>
        @endif
    </main>
</body>
</html>

<style>
    @layer utilities {
      /* Hide scrollbar for Chrome, Safari and Opera */
      .no-scrollbar::-webkit-scrollbar {
          display: none;
      }
     /* Hide scrollbar for IE, Edge and Firefox */
      .no-scrollbar {
          -ms-overflow-style: none;  /* IE and Edge */
          scrollbar-width: none;  /* Firefox */
    }
  }
</style>