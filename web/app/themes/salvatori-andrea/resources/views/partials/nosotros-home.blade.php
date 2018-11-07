<div class="contenedor-padre-nosotros-home">
    <div class="contenedor-titulo-nosotros-home">
        <h3>Nosotros</h3>
        <p>En nuestra agencia nos encargamos de estudiar, formular estrategias y objetivos  en las áreas de diseños, diseño web marketing y branding</p>
    </div>



    <div class='carousel carousel-animated carousel-animate-slide' data-size="5">
        <div class='carousel-container'>

            @if(have_rows('carousel-de-personal', 22))
                @while (have_rows('carousel-de-personal', 22))@php(the_row())
                    <div class='carousel-item is-active'>
                        <div class="contenedor-tarjeta-carousel" style="background: url('{{ get_sub_field('foto_del_trabajador') }}'); background-size: cover; background-repeat: no-repeat; height: 280px; position:relative; border-radius: 25px; background-position: center;">
                            <div class="contenedor-informacion">
                                    <h3>{{ get_sub_field('nombre_del_trabajador') }} </h3>
                                    <h4>{{ get_sub_field('cargo_del_trabajador') }}</h4>
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