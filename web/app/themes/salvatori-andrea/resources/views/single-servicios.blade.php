@extends('layouts.app')

@section('content')
    <div class="contenedor-padre-detalle-del-servicio">
        <div class="contenedor-titulo-detalle-servicio">
            <h1>{!! App::title() !!}</h1>
        </div>
        <div class="contenedor-abuelo-detalle-servicio">
            <div class="contenedor-papa-detalle-servicio animate fadeInUp">
                <div class="contenedor-opciones-detalle-servicio columns is-paddingless is-multiline">
                    <div class="contenedor-opcion-detalle-servicio column is-4" id="title-left">
                        <span>{{ get_field('title-left') }}</span>
                    </div>
                    <div class="contenedor-opcion-detalle-servicio contenedor-clase-activa column is-4" id="title-center">
                        <span>{{ get_field('title-center') }}</span>
                    </div>
                    <div class="contenedor-opcion-detalle-servicio contenedor-clase-activa column is-4" id="title-right">
                        <span>{{ get_field('title-right') }}</span>
                    </div>
                </div>
            </div>
            <div class="contenedor-content-left columns is-multiline animate fadeInUp " id="content-left">
                {!!get_field('content-left')!!}
            </div>
            <div class="contenedor-content-left columns is-multiline animate fadeInUp" id="content-center" style="display:none;">
                {!!get_field('content-center')!!}
            </div>
            <div class="contenedor-content-left columns is-multiline animate fadeInUp" id="content-right" style="display:none;">
                {!!get_field('content-right')!!}
            </div>
        </div>
        <div class="contenedor-boton-servicios animate fadeInUp">
            <a href="/contactanos/">contratar nuestros servicios</a>
        </div>
    </div>

@endsection
