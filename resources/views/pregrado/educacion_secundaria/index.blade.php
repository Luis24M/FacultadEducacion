@extends('layouts.app')

@section('content')


<main class="bg-gray-100">
<!-- Header Image -->
    <div class="flex w-full bg-[#03045e] h-64 bg-cover bg-center text-base text-center items-center justify-center" style="background-blue">
        <h1 class="text-white text-center text-5xl"><b>Educacion Secundaria</b></h1>
    </div>


    <div class="container mx-auto p-8 selection:bg-fuchsia-300 selection:text-fuchsia-900">
        <div class="text-center py-16 bg-white"> 
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Educación Secundaria</h2>
        <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-16 leading-relaxed text-base">
                Desde hace algunos años, el Ministerio de Educación emprendió la tarea de actualizar el currículo para responder a las demandas de la sociedad del siglo XXI. En este 
                marco, se realizaron consultas a diversos actores, en diferentes mesas de trabajo y de forma descentralizada. Estos aportes permitieron que el Currículo Nacional vaya 
                tomando forma de manera progresiva y se convierta en un reflejo del deseo de todos los peruanos para que la educación contribuya a la formación de ciudadanos activos y 
                comprometidos con el desarrollo sostenible de su país.
            </p>
    
        <!-- Ex directores-->
        <section class=" snap-x py-12">
            <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Ex Directores</h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            </div>
            <div class="flex flex-row justify-center items-center gap-8 px-8 lg:px-24">
                <div class=" scroll-ml-6 snap-start text-center">
                    <img class="mx-auto rounded-full w-48 h-48 object-cover border-4 border-[#FFB703]" src="https://via.placeholder.com/150" alt="">
                    <h3 class="mt-4 text-base font-semibold text-gray-800">PROF. JULIA SIXTINA CASTAÑEDA AZABACHE</h3>
                    <p class="text-[#FFB703]">Directora</p>
                </div>
                <div class="scroll-ml-6 snap-start text-center">
                    <img class="mx-auto rounded-full w-48 h-48 object-cover border-4 border-[#FFB703]" src="https://via.placeholder.com/150" alt="">
                    <h3 class="mt-4 text-base font-semibold text-gray-800">PROF. FELIPE TEMOCHE RUMICHE</h3>
                    <p class="text-[#FFB703]">Director</p>
                </div>
            </div>
        </section>
    </div>

        <!-- Sección de menciones -->
    <div>
        <div id="lengua-literatura" class="hidden bg-white container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
            Lengua y Literatura
            </h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet 
            cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit 
            venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin 
            etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus 
            posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat 
            nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
            </p>
        </div>
        <div id="filosofia-psicologia-ccss" class="hidden bg-white container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
            Filosofía, Psicología y CCSS
            </h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet 
            cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit 
            venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin 
            etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus 
            posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat 
            nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
            </p>
        </div>
        <div id="ciencias-matematicas" class="hidden bg-white container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
            Ciencias Matemáticas
            </h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet 
            cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit 
            venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin 
            etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus 
            posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat 
            nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
            </p>
        </div>
        <div id="idiomas" class="hidden bg-white container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
            Idiomas
            </h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet 
            cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit 
            venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin 
            etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus 
            posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat 
            nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
            </p>
        </div>
        <div id="historia-geografia" class="hidden bg-white container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
            Historia y Geografía
            </h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet 
            cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit 
            venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin 
            etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus 
            posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat 
            nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
            </p>
        </div>
        <div id="ciencias-naturales" class="hidden bg-white container mx-auto text-center">
            <h2  class="text-3xl font-bold text-gray-800 mb-8">
            Ciencias Naturales
            </h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto mb-10"></div>
            <p class="text-black max-w-4xl mx-auto mb-4 leading-relaxed text-base">
            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis, ad laoreet 
            cursus sociis proin class consequat suspendisse fermentum, bibendum platea velit 
            venenatis natoque sodales sagittis. Auctor hendrerit fusce eros porta sollicitudin 
            etiam potenti curae ante cubilia accumsan quisque integer, id senectus lacinia vivamus 
            posuere eget torquent nec a arcu himenaeos dapibus. Fames nunc quis mauris dictum erat 
            nascetur netus felis, porta pretium risus nisi dapibus donec etiam.
            </p>
        </div>
    </div>
</main>



@endsection
