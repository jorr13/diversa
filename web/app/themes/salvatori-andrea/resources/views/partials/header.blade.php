
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



