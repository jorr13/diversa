@extends('layouts.app')

@section('content')
<div class="imagensvg">
    <img class="parallax" src="{{ home_url('app/uploads/2018/10/bg.svg') }}" alt="">
</div>
@include('partials.home-header')

<div>
        @include('partials.nosotros-home')
        @include('partials.nuestros-servicios')
        @include('partials.nuestro-portafolio')
        @include('partials.conoce-nuestro-blog')

</div>
@endsection
