<div class="contenedorpadre-nuestro-blog">
    <div class="contenedor-titulo-nuestro-blog">
        <h3>¿Conoces nuestro blog?</h3>
        <p>las tendencias en diseño y tecnología avanzan de manera constante y con fuerza</p>
        <span>¿Quieres estar al día con nosotros?</span>
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
        <a href="">Ir a nuestro blog</a>
    </div>
</div>