@extends('layouts.app')

@section('content')
@include('partials.header-detalle-post')
@php
    $term = get_queried_object();
    $slug = $term->slug;
    $posts = query_posts(array('post_type' => 'servicios', 'category_name' => $slug) )
@endphp

<div class="contenedor-padre-tarjetas-nuestros-servicios columns is-multiline animate fadeInUp">
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-servicio')
    @endwhile
    {{wp_reset_query()}}
</div>
   
@endsection
