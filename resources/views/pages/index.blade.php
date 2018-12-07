@extends('layouts.app')
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

@section('content')
    @include ('inc.alt_slider')
    @include ('inc.featuredcities')
    <br>
    @include ('inc.categories')
    @include ('inc.featuredguides')
    @include ('inc.parallax_mini')
    @include ('inc.contact')
    @include ('inc.cta')
    @include ('inc.footer')

    {{--@include ('inc.profile')--}}
    {{--@include ('inc.overview_guides')--}}
    {{--@include ('inc.citytemplate')--}}
    {{--@include ('inc.overview_cities')--}}

@endsection