@extends('layouts.home')

@section('content')
<style>

</style>
<div class="flex flex-col w-full min-h-[calc(100dvh-230px)] ">
    <div class="bg-gray-300 h-2/5 w-full" id="Header">
        <h2 class="pl-5 my-3 text-xl"><b>MISION</b></h2>            
    </div>
    <div class="flex md:flex-row flex-col min-h-[calc(100dvh-230px)] justify-center items-center gap-5 md:mx-5 mx-0" id="Body">
        <div class="border-solid border-2 border-sky-500 md:w-1/2 w-full h-[300px] flex flex-col justify-center items-center px-5 shadow-xl ">
            <h1 class="text-center lg:text-xl text-sm mb-2"><b>Mision</b></h1>
            
                <p class="c">Formar  profesionales  en  ciencias  de  la  educación  y  comunicación  social
                    , investigadores,  ciudadanos  competitivos,  inclusivos,  que  actúan  con  ética
                    y excelencia;  creadores  de  valor  público,  conocimiento  y  sabiduría,  para  el
                    desarrollo equitativo y sostenible de la sociedad.  
                </p>
                <div class="flex flex-row lg:text-base text-sm justify-end items-center w-full mt-3 ">
                    <p>Plan Estratégico de la Facultad de Educación<br>y Ciencias de la Comunicación.
                    2023 - 2026</p>
                </div>
        </div>
        <div>
          <img src="{{asset('imagenes/PEDF.png')}}" ></img>
        </div>     
    </div>
    <h2 class="flex pl-5 text-xl w-full bg-gray-300 h-[50px] self-center items-center"><b>OBJETIVOS ESTRATÉGICOS DE LA FACULTAD</b></h2> 
    <div class="flex flex-col justify-center items-center h-full my-5 w-full ">
        <table class="w-3/4 border-collapse">
            <thead>
              <tr class="bg-orange-500 text-white">
                <th class="border border-orange-600 p-3 text-left">Código</th>
                <th class="border border-orange-600 p-3 text-left">Enunciado</th>
                <th class="border border-orange-600 p-3 text-left">Nombre del indicador</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-orange-100">
                <td class="border border-orange-200 p-3">OEF.01</td>
                <td class="border border-orange-200 p-3">Mejorar la calidad de la formación de los estudiantes egresados de pregrado, postgrado y segundas especialidades profesionales de la facultad.</td>
                <td class="border border-orange-200 p-3">
                  <div class="mb-2">Porcentaje de egresados de la facultad que obtienen un nivel óptimo de logro de los objetivos educacionales.</div>
                  <div>Porcentaje de egresados de la facultad que se encuentra laborando actualmente según su carrera profesional.</div>
                </td>
              </tr>
              <tr class="bg-orange-50">
                <td class="border border-orange-200 p-3">OEF.02</td>
                <td class="border border-orange-200 p-3">Impulsar la investigación científica, desarrollo tecnológico, innovación, diseño y emprendimiento en la comunidad universitaria de la facultad</td>
                <td class="border border-orange-200 p-3">
                  <div class="mb-2">Porcentaje de incremento de publicaciones de la facultad en revistas de alto impacto.</div>
                  <div class="mb-2">Porcentaje de incremento de patentes registradas de la facultad.</div>
                  <div>Porcentaje de nuevos emprendimientos de la facultad registrados.</div>
                </td>
              </tr>
              <tr class="bg-orange-100">
                <td class="border border-orange-200 p-3">OEF.03</td>
                <td class="border border-orange-200 p-3">Mejorar la extensión cultural, proyección y responsabilidad social y ambiental en la comunidad universitaria de la facultad y la sociedad.</td>
                <td class="border border-orange-200 p-3">Porcentaje de ejecución presupuestal para programas de extensión cultural, proyección y responsabilidad social y ambiental de la facultad implementados.</td>
              </tr>
              <tr class="bg-orange-50">
                <td class="border border-orange-200 p-3">OEF.04</td>
                <td class="border border-orange-200 p-3">Modernizar la Gestión y Gobernanza de la facultad</td>
                <td class="border border-orange-200 p-3">
                  <div class="mb-2">Eficacia del Plan Estratégico de la Facultad según logro de Objetivos Estratégicos.</div>
                  <div>Porcentaje de ejecución del presupuesto de la facultad.</div>
                </td>
              </tr>
              <tr class="bg-orange-100">
                <td class="border border-orange-200 p-3">OEF.05</td>
                <td class="border border-orange-200 p-3">Implementar el plan de gestión de riesgos y continuidad operativa en la facultad.</td>
                <td class="border border-orange-200 p-3">Porcentaje de avance en la implementación del plan de Gestión de riesgos y continuidad Operativa de la facultad.</td>
              </tr>
            </tbody>
          </table>
    <div>
</div>
@endsection