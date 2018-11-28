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
    <div class="contenedor-papa-opcion animate fadeInUp">
        <div class="contenedor-opciones-nosotros columns is-paddingless is-multiline">
            <div class="contenedor-opcion column is-4" id="quienesomos">
                <span>{{ get_field('title-left-nosotros') }}</span>
            </div>
            <div class="contenedor-opcion contenedor-clase-inactiva column is-4" id="creemos">
                <span>{{ get_field('title-center-nosotros') }}</span>
            </div>
            <div class="contenedor-opcion contenedor-clase-inactiva column is-4" id="filosofia">
                <span>{{ get_field('title-right-nosotros') }}</span>
            </div>
        </div>

        <div class="contenedor-informacion-opcion columns is-paddingless is-multiline" id="quien" >
            {!!get_field('content-left-nosotros')!!}
        </div>

        <div class="contenedor-informacion-opcion columns is-paddingless is-multiline" id="enque" style="display:none;">
            {!!get_field('content-center-nosotros')!!}
        </div>
        <div class="contenedor-informacion-opcion columns is-paddingless is-multiline" id="nuestra" style="display:none;">
            {!!get_field('content-right-nosotros')!!}
        </div>
    </div>
    </div>
    
    <div class="contenedor-titulo-nosotros-home animate fadeInUp">
        @if(have_rows('titulos_nosotros', 'options'))
        {{-- loop through the rows of data --}}
        @while (have_rows('titulos_nosotros', 'options'))@php(the_row())
            <h3>{{ get_sub_field('titulo_nosotros1') }}</h3>
        @endwhile 
        @else      
        @endif
    </div>
    <div class='carousel carousel-animated carousel-animate-slide animate fadeInUp' data-size="4">
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

    <div class="contenedor-tres-tarjetas columns  is-multiline animate fadeInUp">
    @if(have_rows('tarjetas', $post->ID))
    @while (have_rows('tarjetas', $post->ID))@php(the_row())
        <div class="contenedor-hijo-motivos column is-5">
            <div class="contenedor-icono-motivos">
                <img src="{{ get_sub_field('icono_de_la_tarjeta') }}" alt="">
            </div>
            <div class="contenedor-titulo-motivos">
                <h3>{{ get_sub_field('titulo_de_la_tarjeta') }}</h3>
            </div>
            <p>{{ get_sub_field('parrafo_de_la_tarjeta') }}</p>
        </div>
        @endwhile 
        @else      
        @endif
    </div>

    <div class="contenedor-boton-nosotros animate fadeInUp">
        <a href="/servicios/">conoce nuestros servicios</a>
    </div>
</div>
@endsection