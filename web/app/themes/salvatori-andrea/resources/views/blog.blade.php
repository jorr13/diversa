{{--
  Template Name: Pagina de blog
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-page')
@endwhile
<div class="contenedor-padre-blog">
    <div class="contenedor-titulo-pagina">
        <h2>{!! App::title() !!}</h2>
    </div>
    <div class="contenedor-descrip-blog">
        <h3>Las tendencias en diseño y tecnologia avanzan de manera constante y con fuerza</h3>
        <h4>¿Quieres estar al dia con nosotros?</h4>
    </div>
    <posts-loop></posts-loop>
@endsection