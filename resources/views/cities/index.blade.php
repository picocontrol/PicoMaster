@extends('layouts.app')

@section('content')
    <h1>Cities</h1>
    @if (count($cities) > 0)
        <ul class="list-group">
        @foreach ($cities as $city)
            <!--<div class="row top"> </div>
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/img/city.jpg">
                        <div class="col-md-10 col-sm-10"></div>
                    </div>-->
                <div class="card padding15">
                    <h3><a href="/cities/{{$city->id}}">{{$city->name}}</a></h3>
                    <small>Aangemeld {{$city->created_at}}</small>
                </div>
            @endforeach
            {{ $cities->links() }}

        </ul>
    @else
        <p>No cities found!</p>
    @endif
@endsection