<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="Facultad de Educación de la Universidad Nacional de Trujillo">
    <meta name="keywords"
        content="Educación, Universidad, Trujillo, Educación Inicial, Educación Primaria, Educación Secundaria, Educación Física, Educación Artística, Educación Especial">
    <meta name="author" content="FACEDU - UNT">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="module" src="http://192.168.1.100:5173/resources/js/app.js"></script>

    <title>FACEDU - UNT</title>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="h-full">
    {{-- <div id="preloader">
        <div class="book">
            <div class="cover">
                <img src="{{ asset('imagenes/logoUNT.png')}}" alt="Logo UNT">
            </div>
            <div class="pages">
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
            </div>
        </div>
    </div>     --}}

    <main class="flex justify-between h-full delizar">
        <section class="w-full md:min-w-[calc(100%-400px)] md:w-[65%]">
            @if (request()->routeIs('home') || request()->routeIs('noticias') || request()->routeIs('galeria'))
                <div class="md:hidden">
                    @include('components/navbar')
                </div>
                <style>
                    .content {
                        min-height: calc(100dvh - 144px);
                    }
                </style>
            @else
                @include('components/navbar')
                <style>
                    .content {
                        min-height: calc(100dvh - 230px);
                    }
                </style>
            @endif
            <section class="content bg-[#F0F6FE]">
                @yield('content')
            </section>
            @include('components/footer')
        </section>
        <section class="hidden md:flex">
            @include('components/sidebar')
        </section>
    </main>
</body>

</html>
<script type="text/javascript">
    (function(d, t) {
        var v = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        v.onload = function() {
            window.voiceflow.chat.load({
                verify: {
                    projectID: '6722932bfb0d295a57c92361'
                },
                url: 'https://general-runtime.voiceflow.com',
                versionID: 'production'
            });
        }
        v.src = "https://cdn.voiceflow.com/widget/bundle.mjs";
        v.type = "text/javascript";
        s.parentNode.insertBefore(v, s);
    })(document, 'script');
</script>
<style>
    .vf-chat-input textarea {
        display: none !important;
    }

    @layer utilities {
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    }
    @media screen and (max-width: 769px) {
        .delizar{
            overflow-x: hidden;

        }
    }

    /* #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .book {
        position: relative;
        width: 100px;
        height: 120px;
        perspective: 1000px;
    }

    .book .cover {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #1A3A5A;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
        transform: rotateY(0deg);
    }

    .book .cover img {
        max-width: 60%;
        max-height: 60%;
        animation: cover-bounce 1.5s infinite;
    }

    .book .pages {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transform-style: preserve-3d;
        animation: book-flip 2s infinite linear;
    }

    .book .pages .page {
        position: absolute;
        top: 5%;
        width: 100%;
        height: 95%;
        background: #fff3ba;
        border: 1px solid rgba(0, 0, 0, 0.1);
        transform-origin: left center;
        transform: rotateY(45deg);
        border-radius: 4px;
        animation: page-turn 2s infinite linear;
    }

    .book .pages .page:nth-child(1) {
        transform: rotateY(0deg);
        animation-delay: 0s;
    }

    .book .pages .page:nth-child(2) {
        transform: rotateY(120deg);
        animation-delay: 0.2s;
    }

    .book .pages .page:nth-child(3) {
        transform: rotateY(240deg);
        animation-delay: 0.4s;
    }

    @keyframes book-flip {

        0%,
        100% {
            transform: rotateY(0deg);
        }

        50% {
            transform: rotateY(360deg);
        }
    }

    @keyframes page-turn {

        0%,
        100% {
            transform: rotateY(0deg);
        }

        50% {
            transform: rotateY(180deg);
        }
    }

    @keyframes cover-bounce {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    } */
</style>
{{-- <script>
    window.addEventListener('load', function() {
        document.getElementById('preloader').style.display = 'none';
    });
</script> --}}
