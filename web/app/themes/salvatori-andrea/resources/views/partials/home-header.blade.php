<div class="contenedormedusa">
<div class="textopublicitario">
@if(have_rows('mensaje_publicitario', 'options'))
@while (have_rows('mensaje_publicitario', 'options'))@php(the_row())

<div class="contenedortituloh3">
    <h3>{{ get_sub_field('mensaje') }}</h3>
    <h4>{{ get_sub_field('descripcion_del_mensaje') }}</h4>
    <a href="/contactanos/" class="botonpurpura">contáctanos</a>
</div>
    
</div>
<div class="imagendemedusa parallax">
        <img src="{{ get_sub_field('imagen_del_mensaje') }}" alt="">
    </div>
@endwhile 
@else      
@endif
</div>

