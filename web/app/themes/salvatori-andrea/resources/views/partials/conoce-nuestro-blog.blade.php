<div class="contenedorpadre-nuestro-blog animate fadeInUp">
    <div class="contenedor-titulo-nuestro-blog">
            @if(have_rows('nuestro-blog', 'options'))
            {{-- loop through the rows of data --}}
            @while (have_rows('nuestro-blog', 'options'))@php the_row() @endphp
                <h3>{{ get_sub_field('titulo_de_proyecto') }}</h3>
                <p>{{ get_sub_field('descripcion_proyecto') }}</p>
                <span>{{ get_sub_field('mensaje_blog') }}</span>
            @endwhile 
            @else      
            @endif

    </div>
    <div class="contenedor-abuelo-nuestro-blog">
        <div class="contenedor-padre-blogs columns is-paddingless is-multiline">
            @foreach(array_slice($posts_loop,0,3) as $posts)
                <div class="contenedor-papa-blogs column is-one-third-desktop is-half-tablet">
                    <div class="contenedor-blogs">
                        <h4>{!! $posts['title'] !!}</h4>
                        <p>{!! $posts['excerpt'] !!}</p>
                        <a href=" {!! $posts['link'] !!}">Leer más</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="contenedor-boton-nuestro-blog">
        <a href="/nuestro-blog/">Ir a nuestro blog</a>
    </div>
</div>