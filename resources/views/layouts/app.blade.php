<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FACEDU</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <section class="p-10 min-h-[calc(100dvh-230px)] bg-[#F0F6FE]">
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