<div class="contenedor-padre-portafolio-home">
    <div class="contenedor-titulo-portafolio-home">
        <h3>Proyectos exitosos</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, quasi eum distinctio ex</p>
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