@extends('layouts.app')

@section('content')
    <h1>{{ $tours->name }}</h1>
    <hr>
    <div class="">
        <h3>Takes place in: {!!   $city->name !!} </h3>
        <h3>Tourtype: {!! $tourtypes->tourtypename !!}</h3>
        <h3>Startlocation: {!! $tours->tourstartlocation !!}</h3>
        <h3>Departure time: {!! $tours->tourdeparturetime !!}</h3>
        <h3>Duration {!! $tours->tourduration !!}</h3>
        <h3>Description {!! $tours->tourtdescription !!}</h3>
        <br>
        <p>Tour creaed at: {{$tours->created_at}}</p>

    </div>
    <hr>

    <hr>
    <a href="/tours" class="btn btn-success">Terug</a>
    @if(!Auth::guest())
        <a href="/tours/{{$tours->id}}/edit" class="btn btn-primary">Bewerken</a>
        {!! Form::open(['action' => ['TourController@destroy', $tours->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection