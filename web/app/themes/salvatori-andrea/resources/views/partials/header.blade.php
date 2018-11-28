
<nav role="navigation" aria-label="main navigation" >
    <a role="button" class="navbar-burger boton-menu" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </a>

    <div class="contenedor-logo">
        <a href="{{ home_url('/') }}">
            <img src="{{ home_url('app/uploads/2018/10/Diversa-Logo.png') }}" alt="">
        </a>
    </div>

    <div class="svg-contenedor-menu" style="background: url({{ home_url('app/uploads/2018/10/pieza-logo-01.svg') }}); background-repeat:no-repeat; background-size: cover; z-index: 999; position: fixed; height: 143px; width: 316px; min-width: 250px; top: 0;"></div>
    
    <div class="menu-animado">
        <div class="contenedor-menu">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
        @endif


            <div class="contenedor-papa-imagen-svg">
                <div class="contenedor-svg-menu" id="content-svg-menu">

                </div>

                <div class="contenedor-img-menu">
                    @foreach($page_loop as $page)
                        <img class="imagen-menu-svg" data-text="{!! $page['title'] !!}" src="{!! $page['thumbnail'] !!}" alt="">
                    @endforeach  
                </div>

            </div>

        </div>

    </div>

    <a href="#" class="botonsubir">
        <i class="favi fa fa-arrow-up" aria-hidden="true"></i>
    </a>
</nav>
<div class="imagensvg">
    <img class="parallax" src="{{ home_url('app/uploads/2018/10/bg.svg') }}" alt="">
</div>
<div class="degradado" ></div>
<div class="contenedor-icon-redes">
    <ul class="ico-footer-redes">
        <li class="ico-contenedor-redes">
            <a href="https://www.facebook.com/diversadc">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                <g>
                <path d="M146.659,9.918c-74.598,0-135.307,60.715-135.307,135.317c0,74.625,60.709,135.334,135.307,135.334
                    c74.628,0,135.344-60.709,135.344-135.334C282.002,70.633,221.287,9.918,146.659,9.918L146.659,9.918z M180.33,149.996h-22.014
                    v78.491h-32.63v-78.491h-15.513v-27.729h15.513v-17.942c0-12.829,6.098-32.923,32.923-32.923l24.17,0.103v26.915h-17.54
                    c-2.875,0-6.923,1.437-6.923,7.555v16.318h24.861L180.33,149.996z M180.33,149.996"/>
                </g>
            </svg>
        </a>
        </li>
        <li class="ico-contenedor-redes">
            <a href="https://www.instagram.com/diversadc/">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                <path d="M146.678,14.67c-74.74,0-135.33,60.59-135.33,135.33s60.59,135.33,135.33,135.33c74.73,0,135.32-60.59,135.32-135.33
                S221.408,14.67,146.678,14.67z M231.798,191.47c0,25.9-21.07,46.98-46.98,46.98h-76.289c-25.9,0-46.98-21.07-46.98-46.98v-76.29
                c0-25.9,21.08-46.98,46.98-46.98h76.289c25.91,0,46.98,21.08,46.98,46.98V191.47z"/>
                <path d="M184.817,83.31h-76.289c-17.57,0-31.87,14.29-31.87,31.87v76.29c0,17.58,14.3,31.87,31.87,31.87h76.289
                c17.58,0,31.881-14.29,31.881-31.87v-76.29C216.698,97.6,202.397,83.31,184.817,83.31z M146.678,197.2
                c-24.2,0-43.87-19.68-43.87-43.87s19.67-43.87,43.87-43.87c24.18,0,43.87,19.68,43.87,43.87S170.857,197.2,146.678,197.2z
                    M200.218,115.56c-2.07,2.06-4.91,3.24-7.83,3.24c-2.91,0-5.78-1.18-7.83-3.24c-2.06-2.06-3.25-4.92-3.25-7.83
                c0-2.92,1.181-5.78,3.25-7.84c2.061-2.06,4.92-3.24,7.83-3.24c2.92,0,5.771,1.18,7.83,3.24c2.061,2.06,3.24,4.92,3.24,7.84
                C203.458,110.63,202.278,113.5,200.218,115.56z"/>
                <path d="M175.438,153.33c0,15.86-12.909,28.75-28.76,28.75c-15.86,0-28.77-12.89-28.77-28.75s12.899-28.77,28.77-28.77
                C162.538,124.56,175.438,137.47,175.438,153.33z"/>
            </svg>
            </a>
        </li>
        <li class="ico-contenedor-redes">
            <a href="https://www.behance.net/diversadc ">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
                <g>
                    <g>
                        <g>
                            <path d="M20.894,20.686c0-1.9-1.293-1.9-1.293-1.9h-0.685h-4.634H14.28v4.078h4.991C20.134,22.864,20.894,22.589,20.894,20.686z" fill="#FFFFFF"/>
                            <path d="M33.221,22.864c-2.821,0-3.215,2.814-3.215,2.814h6.002C36.008,25.68,36.045,22.864,33.221,22.864z" fill="#FFFFFF"/>
                            <path d="M19.601,25.68h-5.318v4.886h4.711c0.08,0,0.198,0.004,0.339,0c0.757-0.019,2.196-0.235,2.196-2.374     C21.529,25.656,19.601,25.68,19.601,25.68z" fill="#FFFFFF"/>
                            <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826     C49.652,11.137,38.516,0,24.826,0z M29.219,16.615h7.539v2.251h-7.539V16.615z M25.407,28.419c0,5.577-5.806,5.395-5.806,5.395     h-5.318h-0.156h-4.034V15.539h4.034h0.156h5.318c2.891,0,5.172,1.597,5.172,4.867c0,3.269-2.788,3.477-2.788,3.477     C25.66,23.882,25.407,28.419,25.407,28.419z M39.512,28.119h-9.471c0,3.396,3.217,3.182,3.217,3.182     c3.036,0,2.93-1.966,2.93-1.966h3.219c0,5.218-6.254,4.859-6.254,4.859c-7.503,0-7.021-6.985-7.021-6.985     s-0.007-7.022,7.021-7.022C40.549,20.187,39.51,28.119,39.512,28.119z" fill="#FFFFFF"/>
                        </g>
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
            </a>
        </li>
    </ul>
</div>



