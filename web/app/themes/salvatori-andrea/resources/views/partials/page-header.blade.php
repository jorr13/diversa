<div class="main-cover">
    <div class="content-cover">
            @php($term = get_queried_object())
        <h1 class="title animated fadeInUp" data-wow-delay="0.4s">{!! App::title() !!}</h1>
        <p class="extracto animated fadeInUp" data-wow-delay="0.4s">{!! $term->description !!}</p>
    </div>
</div>
