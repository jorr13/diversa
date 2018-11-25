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
    <div class="contenedor-formulario-contacto">
        <h3>Contacto</h3> 
        <label for="">Nombre*</label>
        <input type="text" class="inputtexto" value="" name="name" required>

        <label for="">Correo electronico*</label>
        <input type="text" class="inputtexto" value="" name="correo" required>

        <label for="">Mensaje</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>

        <a href="">enviar mensaje</a>

        <div class="contenedor-formulario-iniciar-proyecto">

            <div class="contenedor-datos-contacto">
                <h2>¿quieres iniciar un proyecto?</h2>
                <h3>datos de contacto:</h3> 
                <label for="">Nombre*</label>
                <input type="text" class="inputtexto" value="" name="name2" required>
        
                <label for="">Correo electronico</label>
                <input type="text" class="inputtexto" value="" name="correo2" required>
            </div>

            <div class="contenedor-sobre-su-proyecto">
                <h3>sobre su proyecto:</h3> 
                <label for="">Nombre de su empresa</label>
                <input type="text" class="inputtexto" value="" name="name-empresa">
        
                <label for="">Tipo de emprendimiento</label>
                <input type="text" class="inputtexto" value="" name="emprendimiento">
                        
                <label for="">Rubro comercial</label>
                <input type="text" class="inputtexto" value="" name="comercial">
            </div>

            <div class="contenedor-servicio-que-desea columns is-multiline">
                <h3>servicio que desea contratar:</h3>
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
                    <h3>Cuentanos más sobre su proyecto</h3>
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