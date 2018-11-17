<div class="contenedor-padre-nosotros-home">


    <div class="contenedor-titulo-nosotros-home">
        @if(have_rows('titulos_nosotros', 'options'))
        {{-- loop through the rows of data --}}
        @while (have_rows('titulos_nosotros', 'options'))@php(the_row())
            <h3>{{ get_sub_field('titulo_nosotros1') }}</h3>
            <p>{{ get_sub_field('descripcion_nosotros') }}</p>
        @endwhile 
        @else      
        @endif
    </div>



    <div class='carousel carousel-animated carousel-animate-slide' data-size="4">
        <div class='carousel-container'>
            
            @if(have_rows('carousel-de-personal', 'options'))
            @while (have_rows('carousel-de-personal', 'options'))@php(the_row())
            <div class='carousel-item is-active'>
                <div class="contenedor-tarjeta-nuestro-equipo">
                    <div class="contenedor-imagen-tarjeta-nuestro-equipo">
                        <img src="{{ get_sub_field('icono_del_personal') }}" alt="">
                    </div>
            
                    <div class="contenedor-titulos-tarjeta-nuestro-equipo">
                        <h4>{{ get_sub_field('nombre_del_equipo') }}</h4>
                        <p>{{ get_sub_field('descrip_equipo') }}</p>
                    </div>
                </div>
            </div>
            @endwhile 
            @else      
            @endif

      

        </div>

        <div class="carousel-navigation is-overlay">
            <div class="carousel-nav-left">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="carousel-nav-right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
        </div>
    </div>
    <div class="contenedor-boton-conocenos">
        <a href="#" class="conocenos-home">conócenos</a>
    </div>
</div>