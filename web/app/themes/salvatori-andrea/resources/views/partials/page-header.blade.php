<div class="main-cover">
        @if(has_post_thumbnail())
        <div class="featured">
           <img src="{!! App::thumbnail() !!}" alt=" {!! App::title() !!}" >
        </div>
        @endif
    <div class="content-cover">
            @php($term = get_queried_object())
        <h1 class="title animated fadeInUp" data-wow-delay="0.4s">{!! $term->name !!}</h1>
        <p class="extracto animated fadeInUp" data-wow-delay="0.4s">{!! $term->description !!}</p>
    </div>
</div>
