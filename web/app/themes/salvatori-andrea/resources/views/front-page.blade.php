@extends('layouts.app')

@section('content')

@include('partials.home-header')

<div>
        @include('partials.nosotros-home')
        @include('partials.nuestros-servicios')
        @include('partials.nuestro-portafolio')
        @include('partials.conoce-nuestro-blog')

</div>
@endsection
