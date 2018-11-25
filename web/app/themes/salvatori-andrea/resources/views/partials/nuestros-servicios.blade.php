<div class="contenedor-padre-nuestros-servicios">


        <div class="contenedor-titulo-nuestros-servicios">
                @if(have_rows('nuestro_servicios', 'options'))
                {{-- loop through the rows of data --}}
                @while (have_rows('nuestro_servicios', 'options'))@php the_row() @endphp
                    <h3>{{ get_sub_field('titulo_de_servicios') }}</h3>
                    <p>{{ get_sub_field('descripcion_servicio') }}</p>
                @endwhile 
                @else      
                @endif
        </div>


<div class="contenedor-padre-tarjetas-nuestros-servicios columns is-multiline">
    @foreach(array_slice($category_loop,1,4) as $category)
    <div class=" column is-one-quarter-desktop is-half-tablet">

        <div class="contenedor-tarjeta-nuestros-servicios" id="item-{{$category['id']}}">
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
<div class="contenedor-boton-video">
    <a href="#" class="vermasservicios">ver más servicios</a>
</div>

</div>