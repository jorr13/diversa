@extends('layouts.app')

@section('content')
<div class="imagensvg">
    <img class="parallax" src="{{ home_url('app/uploads/2018/10/bg.svg') }}" alt="">
</div>
@include('partials.home-header')

<div>
        @include('partials.nuestros-servicios')
        @include('partials.conoce-nuestro-blog')
</div>
@endsection