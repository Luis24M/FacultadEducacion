@extends('layouts.home')

@section('content')
<style>

</style>
<div class="flex flex-col w-full min-h-[calc(100dvh-230px)] ">
    <div class="bg-gray-300 h-2/5 w-full" id="Header">
        <h2 class="pl-5 my-3 text-3xl"><b>Institucional</b></h2>            
    </div>
    <div class="flex md:flex-row flex-col min-h-[calc(100dvh-230px)] justify-center items-center gap-5 md:mx-5 mx-0 p-3" id="Body">
        <div class="border-solid border-2 border-sky-500 md:w-1/2 w-full h-[300px] flex flex-col justify-center items-center px-5 shadow-xl ">
            <h1 class="text-center text-xl mb-2"><b>Mision</b></h1>
            
                <p>Formar  profesionales  en  ciencias  de  la  educación  y  comunicación  social
                    , investigadores,  ciudadanos  competitivos,  inclusivos,  que  actúan  con  ética
                    y excelencia;  creadores  de  valor  público,  conocimiento  y  sabiduría,  para  el
                    desarrollo equitativo y sostenible de la sociedad.  
                </p>
        </div>  
        <div class="border-solid border-2 border-sky-500 md:w-1/2 w-full h-[300px] flex flex-col justify-center items-center px-5 shadow-xl mx-0 ">
            <h1 class="text-center text-xl mb-2"><b>Vision</b></h1>
            <p>
                Al <?php echo date("Y"); ?>, lider y acreditada a nivel nacional e internacional,
                reconocida por su calidad, por su vocacion democratica, por la
                formacion de profesionales en la educacion infantil, la 
                investacion cientifica y responsabilidad social; manteniendo
                vinculos con los grupos de interés y contribuyendo al desarrollo
                local, regional y nacional.
            </p>
        </div>          
    </div>
</div>
@endsection