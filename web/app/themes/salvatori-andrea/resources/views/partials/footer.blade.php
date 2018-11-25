<footer class="footer">
  <div class="padrefooter columns is-multiline ">
    <div class="sabermas column is-3">
      <div class="descrip-sabermas">
          @if(have_rows('footer', 'options'))
          {{-- loop through the rows of data --}}
          @while (have_rows('footer', 'options'))@php the_row() @endphp
            <span>{{ get_sub_field('mensaje_footer') }}</span>
          @endwhile 
          @else      
          @endif
      </div>

      <a href="#">Saber más</a>
    </div>

    <div class="menufooter1 column is-1">
      <ul>
        <li>Nosotros</li>
        <li>Servicios</li>
        <li>Portafolio</li>
      </ul>
    </div>

    <div class="menufooter2 column is-2">
      <ul>
        <li>Blog</li>
        <li>Condiciones de servicios</li>
        <li>información de privacidad</li>
      </ul>
    </div>

    <div class="contactanosfooter column is-2">
        @if(have_rows('footer', 'options'))
        {{-- loop through the rows of data --}}
        @while (have_rows('footer', 'options'))@php the_row() @endphp
        <span class="titulocontactofooter">{{ get_sub_field('contactanos') }}</span>
        <p class="correo">{{ get_sub_field('correo_a_mostrar') }}</p>
        @endwhile 
        @else      
        @endif
        <a href="#">Contáctanos</a>

    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.13.0/bodymovin.min.js"></script>
