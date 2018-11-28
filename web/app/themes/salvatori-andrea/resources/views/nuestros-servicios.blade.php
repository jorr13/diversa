{{--
  Template Name: Pagina de nuestro servicios
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

@endwhile
<div class="contenedor-padre-servicios">
    <div class="contenedor-titulo-pagina">
        <h2>{!! App::title() !!}</h2>
        
    </div>
    <div class="contenedor-extracto">
            <p>	{!!apply_filters( 'the_excerpt',get_the_excerpt($post->ID) )!!}</p>
    </div>
    <div class="contenedor-padre-servicio columns is-multiline animate fadeInUp ">
        <div class="contenedor-porque-trabajar column is-6">
                {!! apply_filters( 'the_content', get_the_content($post->ID) )!!}

            <a href="/contactanos/">Contáctanos</a>
        </div>
        <div class="contenedor-de-servicios column is-6 animate fadeInUp">
            <div class="contenedor-padre-tarjetas-page-servicios columns is-multiline">
                @foreach(array_slice($category_loop,1,4) as $category)
                <div class="column is-6-desktop is-12-tablet">
                    <div class="contenedor-tarjeta-page-servicios" id="item-{{$category['id']}}">
                        <div class="contenedor-imagen-tarjeta-nuestros-servicios">
                            <img src="{{$category['img']}}" alt="">
                        </div>
                
                        <div class="contenedor-titulos-tarjeta-nuestros-servicios">
                            <h4>{{$category['title']}}</h4>
                            <p>{{$category['desc']}}</p>
                        </div>
                        <div class="contenedor-descrip-tarjeta-nuestros-servicios">
                            <ul>
                                @php 
                                $posts = query_posts(array('post_type' => 'servicios', 'category_name' => $category['slug'] ) )
                                @endphp
                                @foreach($posts as $post)
                                <li class="item">{!! get_the_title($post->ID)!!}</li>
                                @endforeach
                                {{wp_reset_query()}}
                            </ul>
                        </div>
                        <a href="{{$category['link']}}">Ver</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection