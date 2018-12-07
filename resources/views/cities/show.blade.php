@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card padding15">
            <b>{!!   $city->name !!}</b>
            <hr>
            <img style="width:100%" src="/storage/city_images/{{$city->city_image}}">
            <hr>
            {!! $city->description !!}
        </div>
        <small>Aangemeld {{ $city->created_at }}</small><br />
        <a href="/cities" class="btn btn-success">Back</a>
        @if(!Auth::guest())
            <a href="/cities/{{$city->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['CityController@destroy', $city->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    </div>
@endsection