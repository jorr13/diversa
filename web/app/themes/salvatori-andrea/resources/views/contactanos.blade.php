{{--
  Template Name: Pagina de Contactanos
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-page')
@endwhile
<div class="contenedor-padre-contacto">
    <div class="contenedor-titulo-pagina">
        <h2>{!! App::title() !!}</h2>

    </div>
    <div class="contenedor-descrip-contacto">
        <p>{!! App::excerpt() !!}</p>
    </div>
    <div class="contenedor-formulario-contacto animate fadeInUp">
     
        <h3>{{ get_field('titulo_inicial_de_la_seccion') }}</h3> 
        <label for="">{{ get_field('primer_titulo_del_formulario') }}*</label>
        <input type="text" class="inputtexto" value="" name="name" required>

        <label for="">{{ get_field('segundo_titulo_del_formulario') }}*</label>
        <input type="text" class="inputtexto" value="" name="correo" required>

        <label for="">{{ get_field('tercer_titulo_del_formulario') }}*</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>

        <a href="">enviar mensaje</a>

        <div class="contenedor-formulario-iniciar-proyecto animate fadeInUp">

            <div class="contenedor-datos-contacto">
                <h2>{{ get_field('titulo_inicial_segunda_seccion') }}</h2>
                <h3>{{ get_field('titulo_datos_de_contacto') }}</h3> 
                <label for="">{{ get_field('primer-titulo-seccion-2') }}</label>
                <input type="text" class="inputtexto" value="" name="name2" required>
        
                <label for="">{{ get_field('segundo_titulo_del_formulario_2') }}</label>
                <input type="text" class="inputtexto" value="" name="correo2" required>
            </div>

            <div class="contenedor-sobre-su-proyecto">
                <h3>{{ get_field('titulo_sobre_su_proyecto') }}</h3> 
                <label for="">{{ get_field('titulo-nombre-de-la-empresa') }}</label>
                <input type="text" class="inputtexto" value="" name="name-empresa">
        
                <label for="">{{ get_field('titulo_tipo_de_emprendimiento') }}</label>
                <input type="text" class="inputtexto" value="" name="emprendimiento">
                        
                <label for="">{{ get_field('titulo_rubro_comercial') }}</label>
                <input type="text" class="inputtexto" value="" name="comercial">
            </div>

            <div class="contenedor-servicio-que-desea columns is-multiline animate fadeInUp">
                <h3>{{ get_field('titulo-servicio-que-desea') }}</h3>
  
                @foreach(array_slice($category_loop,1,4) as $category)
                <div class="contenedor-servicio-deseado column is-6">
                    <h4>{{$category['title']}}</h4>
                            @php 
                            $posts = query_posts(array('post_type' => 'servicios', 'category_name' => $category['slug'] ) )
                            @endphp
                            @foreach($posts as $post)
                            <li class="item"><input type="checkbox" id="box-{!! $post->ID!!}"><label for="box-{!! $post->ID!!}">{!! get_the_title($post->ID)!!}</label><input type="checkbox"></li>
                            @endforeach
                            {{wp_reset_query()}}

 
                </div>
                @endforeach
  
                <div class="contenedormensaje is-12 column">
                    <h3>{{ get_field('titulo-cuentanos-sobre-tu-proyecto') }}</h3>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="contenedor-boton-formulario is-12 column">
                    <a href="">enviar formulario</a>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection