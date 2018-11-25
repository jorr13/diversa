{{--
  Template Name: Pagina de Portafolio
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-page')
@endwhile
<div class="contenedor-padre-portafolio">
    <div class="contenedor-titulo-pagina">
        <h2>{!! App::title() !!}</h2>
    </div>

    <div class="contenedor-los-portafolio">
        <div class="contenedor-proyecto-seleccionado columns is-multiline" >
            @foreach($proyectos_loop as $proyecto)
            <div class="contenedor-tarjeta-grande-portafolio item-{{$proyecto['id']}} column is-4">
                <div class="contenedor-imagen-destacada" style="background:url({{$proyecto['thumbnail']}}); background-size:cover; height:300px; background-position:center; border-radius: 30px;     position: relative;">
                    <div class="contenedor-info-proyecto">
                        <h3>{{$proyecto['title']}}</h3>
                        <p>{!! $proyecto['resumen'] !!}</p>
                        <a href="{{$proyecto['link']}}">Ver más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection