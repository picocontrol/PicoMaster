@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cities</h1>
        @if (count($cities) > 0)

            <ul class="list-group">
                @foreach ($cities as $city)
                    <div class="row mtop10">
                        <div class="col-md-2 col-sm-2">
                            <img style="width:100%; height:100px;" src="/storage/city_images/{{$city->city_image}}">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3><a href="/cities/{{$city->id}}">{{$city->name}}</a></h3>
                            <small>City added: {{$city->created_at}}</small>
                        </div>
                    </div>
                @endforeach
                {{ $cities->links() }}
            </ul>
    </div>
    @else
        <p>No cities found!</p>
        @endif
        </div>
@endsection