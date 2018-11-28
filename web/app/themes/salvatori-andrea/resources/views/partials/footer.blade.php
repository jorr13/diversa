<footer class="footer animate fadeInUp">
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

      <a href="/nosotros/">Saber más</a>
    </div>

    <div class="menufooter1 column is-1">
      <ul>
        <li> <a href="/nosotros/">Nosotros</a> </li>
        <li><a href="/servicios/">Servicios</a></li>
        <li><a href="/nuestro-portafolio/">Portafolio</a></li>
      </ul>
    </div>

    <div class="menufooter2 column is-2">
      <ul>
        <li><a href="/nuestro-blog/">Blog</a></li>
        <li><a href="/condiciones-de-servicios/">Condiciones de servicios</a></li>
        <li><a href="/politica-privacidad/">información de privacidad</a></li>
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
        <a href="/contactanos/">Contáctanos</a>

    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.13.0/bodymovin.min.js"></script>
