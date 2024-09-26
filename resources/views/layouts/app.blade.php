<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FACEDU</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body class="h-full">
    <main class="flex justify-between h-full">
        <section class="w-[calc(100%-400px)]">
            @include('components/navbar')
            <section class="h-[calc(100%-80px)]">
                {{-- <h1 class="text-4xl text-center">Bienvenido a FACEDU</h1> --}}
                @yield('content')
            </section>
            @include('components/footer')
        </section>
        <section class="">
            @include('components/sidebar')
        </section>
    </main>
</body>
</html>