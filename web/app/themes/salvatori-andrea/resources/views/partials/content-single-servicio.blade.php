<div class=" column is-one-quarter-desktop is-half-tablet animate fadeInUp">
    <div class="contenedor-tarjeta-nuestros-servicios" >
        @php
        global $post;
        @endphp
        <div class="contenedor-imagen-tarjeta-nuestros-servicios">
            <img src="{{get_the_post_thumbnail_url($post->ID)}}" alt="">
        </div>

        <div class="contenedor-titulos-tarjeta-servicios">
            <h4 class="titulo-servicio-detalle">{!! get_the_title($post->ID) !!}</h4>
            <p>{{ apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ) }}</p>
        </div>


        <a href="{{ get_permalink($post->ID) }}">Ver</a>
    </div>
</div>