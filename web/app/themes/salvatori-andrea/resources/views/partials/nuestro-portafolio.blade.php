<div class="contenedor-padre-portafolio-home">
    <div class="contenedor-titulo-portafolio-home">
            @if(have_rows('proyectos_exitoso', 'options'))
            {{-- loop through the rows of data --}}
            @while (have_rows('proyectos_exitoso', 'options'))@php the_row() @endphp
                <h3>{{ get_sub_field('titulo_de_proyecto') }}</h3>
                <p>{{ get_sub_field('descripcion_proyecto') }}</p>
            @endwhile 
            @else      
            @endif
    </div>

    <div class="contenedor-tarjetas-proyectos columns is-multiline">

        <div class="contenedor-proyecto-seleccionado column is-7" >
            @foreach(array_slice($proyectos_loop,0,4) as $proyecto)
            <div class="contenedor-tarjeta-grande item-{{$proyecto['id']}}">
                <div class="contenedor-imagen-destacada">
                    <img src="{{$proyecto['thumbnail']}}"  alt="">
                </div>
                <div class="contenedor-info-proyecto">
                    <h3>{{$proyecto['title']}}</h3>
                    <p>{!! $proyecto['resumen'] !!}</p>
                    <a href="{{$proyecto['link']}}">Ver más</a>
                </div>

            </div>
            @endforeach
        </div>

        <div class="contenedor-cuatro-imagen column is-4">
            <div class="contenedor-hijo-cuatro-imagen columns is-multiline">
                @foreach(array_slice($proyectos_loop,0,4) as $proyecto)
                    <div class="contenedor-imagen column  is-one-fifths-widescreen is-half-desktop ">
                        <div class="contenedor-imagen-peque" id="item-{{$proyecto['id']}}" >
                            <img src="{{$proyecto['thumbnail']}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>