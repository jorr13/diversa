{{--
  Template Name: Pagina de nosotros
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-page')
@endwhile
<div class="contenedor-padre-nosotros">
    <div class="contenedor-titulo-pagina">
        <h2>{!! App::title() !!}</h2>
    </div>
    <div class="contenedor-abuelo-opcion">
    <div class="contenedor-papa-opcion">
        <div class="contenedor-opciones-nosotros columns is-paddingless is-multiline">
            <div class="contenedor-opcion column is-4" id="quienesomos">
                <span>¿Quiénes somos?</span>
            </div>
            <div class="contenedor-opcion column is-4" id="creemos">
                <span>¿En qué creemos?</span>
            </div>
            <div class="contenedor-opcion column is-4" id="filosofia">
                <span>Nuestra filosofia</span>
            </div>
        </div>

        <div class="contenedor-informacion-opcion columns is-paddingless is-multiline" id="quien" >
            <div class="contenedor-imagen column is-6">
                <img src="{{ home_url('app/uploads/2018/10/diseno.png') }}" alt="">
            </div>
            <div class="contenedor-informacion column is-6">
                <h3>¿Quienes somos?</h3>
                <p> Somos un grupo de personas dispuestas a acompañarte en la construcción de tu proyecto en todas sus perspectivas. En nuestra agencia nos encargamos de estudiar, formular estrategias y objetivos en las áreas de diseño, diseño web, marketing y branding. 
                    Nuestro proceso de trabajo con el cliente consiste en la retroalimentación, capacitación y camaradería. No solo construimos marcas, también forjamos vínculos que impulsan el desarrollo de nuestra clientela. 
                </p>
            </div>
        </div>

        <div class="contenedor-informacion-opcion columns is-paddingless is-multiline" id="enque" style="display:none;">
            <div class="contenedor-imagen column is-6">
                <img src="{{ home_url('app/uploads/2018/10/diseno.png') }}" alt="">
            </div>
            <div class="contenedor-informacion column is-6">
                <h3>¿En qué creemos?</h3>
                <p>En hacer de un cliente más que un cliente. Queremos establecer relaciones de mutuo desarrollo con todos los empresarios y comerciantes emergentes o en busca de reinvención. Vemos el potencial empresarial como una oportunidad de construir redes de apoyo.  </p>
            </div>
        </div>
        <div class="contenedor-informacion-opcion columns is-paddingless is-multiline" id="nuestra" style="display:none;">
            <div class="contenedor-imagen column is-6">
                <img src="{{ home_url('app/uploads/2018/10/diseno.png') }}" alt="">
            </div>
            <div class="contenedor-informacion column is-6">
                <h3>Nuestra filosofía</h3>
                <p>Nada es estático, todo está cambiando y las opciones son diversas. ¿Qué te identifica más? ¿Qué te suma? ¿Qué nos mueve? En Diversa buscamos contigo las respuestas y te encaminamos hacia el posicionamiento de tus proyectos. 
                    Entendiendo nuestro mercado y su ámbito como un ser vivo en constante evolución y adaptación. Existen muchas formas y destinos, en Diversa encontramos el mejor camino, junto a ti.
                </p>
            </div>
        </div>
    </div>
    </div>
    
    <div class="contenedor-titulo-nosotros-home">
        @if(have_rows('titulos_nosotros', 'options'))
        {{-- loop through the rows of data --}}
        @while (have_rows('titulos_nosotros', 'options'))@php(the_row())
            <h3>{{ get_sub_field('titulo_nosotros1') }}</h3>
        @endwhile 
        @else      
        @endif
    </div>
    <div class='carousel carousel-animated carousel-animate-slide' data-size="4">
        <div class='carousel-container'>
            @if(have_rows('carousel-de-personal', 'options'))
            @while (have_rows('carousel-de-personal', 'options'))@php(the_row())
            <div class='carousel-item is-active'>
                <div class="contenedor-tarjeta-nuestro-equipo">
                    <div class="contenedor-imagen-tarjeta-nuestro-equipo">
                        <img src="{{ get_sub_field('icono_del_personal') }}" alt="">
                    </div>
                    <div class="contenedor-titulos-tarjeta-nuestro-equipo">
                        <h4>{{ get_sub_field('nombre_del_equipo') }}</h4>
                        <p>{{ get_sub_field('descrip_equipo') }}</p>
                    </div>
                </div>
            </div>
            @endwhile 
            @else      
            @endif
        </div>

        <div class="carousel-navigation is-overlay">
            <div class="carousel-nav-left">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="carousel-nav-right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <div class="contenedor-tres-tarjetas columns  is-multiline">
        <div class="contenedor-hijo-motivos column is-5">
            <div class="contenedor-icono-motivos">
                <img src="{{ home_url('app/uploads/2018/10/diseno.png') }}" alt="">
            </div>
            <div class="contenedor-titulo-motivos">
                <h3>¿Por qué lo hacemos?</h3>
            </div>
            <p>Complementar e impulsar el crecimiento de proyectos e iniciativas en el mundo moderno de los negocios. Incorporar a la perfección la dimensión digital en los objetivos y proyecciones de escalabilidad en cortos plazos. Basados en estrategias eficientes y adaptadas al nivel y magnitud de cada cliente. </p>
        </div>
        <div class="contenedor-hijo-motivos column is-5">
            <div class="contenedor-icono-motivos">
                <img src="{{ home_url('app/uploads/2018/10/diseno.png') }}" alt="">
            </div>
            <div class="contenedor-titulo-motivos">
                <h3>¿Cómo lo hacemos?</h3>
            </div>
            <p>Acompañar el proceso desarrollo, crecimiento y posicionamiento de los proyectos de nuestros clientes. Queremos ser el vínculo fraternal que los conecte a nuevas realidades con estándares de calibre internacional para desarrollar nuevas tendencias. </p>
        </div>
        <div class="contenedor-hijo-motivos column is-5">
            <div class="contenedor-icono-motivos">
                <img src="{{ home_url('app/uploads/2018/10/diseno.png') }}" alt="">
            </div>
            <div class="contenedor-titulo-motivos">
                <h3>¿Para qué lo hacemos?</h3>
            </div>
            <p>Ser referencia como agencia con una metodología de trabajo profesional y humana. Que los profesionales, emprendedores y proyectos emergentes nos vean como el apoyo que necesitan y propiciar un acercamiento más auténtico. Las relaciones son nuestra esencia, las buenas ideas nuestra materia prima. </p>
        </div>
    </div>
    <div class="contenedor-boton-nosotros">
        <a href="">conoce nuestros servicios</a>
    </div>
</div>
@endsection