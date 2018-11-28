@extends('layouts.app')

@section('content')
    <div class="contenedor-padre-detalle-del-proyecto">
        <div class="contenedor-titulo-detalle-proyecto">
            <h2 class="animated fadeInUp" data-wow-delay="0.4s">{!! App::title() !!}</h2>
            <p class="animated fadeInUp" data-wow-delay="0.4s">{!! App::excerpt() !!}</p>

        </div>
        <div class="contenedor-contenido-del-proyecto columns is-multiline animated fadeInUp">
                @if(have_rows('contenido_del_servicio', $post->ID))
                    @while (have_rows('contenido_del_servicio', $post->ID))@php the_row() @endphp
                        <div class="contenedor-imagen-muestra-proyecto column is-12">
                            <img src="{{ get_sub_field('imagen_a_mostrar') }}" alt="">
                            @if(get_sub_field('titulo_de_la_imagen'))
                            <div class="contenedor-info-proyecto column is-12">
                                <h3>{{ get_sub_field('titulo_de_la_imagen') }}</h3>
                            </div>
                            @endif
                            @if(get_sub_field('descripcion_de_la_imagen'))
                            <div class="contenedor-info-proyecto-parrafo column is-12">
                                <p>{{ get_sub_field('descripcion_de_la_imagen') }}</p>
                            </div>
                            @endif
                        </div>
      
                    @endwhile 
                @else      
                @endif
        </div>
        <div class="contenedor-boton-servicios animated fadeInUp">
            <a href="">contratar nuestros servicios</a>
        </div>
    </div>
    

@endsection
