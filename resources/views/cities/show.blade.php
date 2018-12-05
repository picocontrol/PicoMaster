@extends('layouts.app')

@section('content')
    <h1>{{ $city->name }}</h1>
    <hr>
    <br><br>
    <div class="card padding15">
        {!!   $city->name !!}
    </div>
    <small>Aangemeld {{ $city->created_at }}</small>
    <hr>
    <a href="/cities" class="btn btn-success">Back</a>
    @if(!Auth::guest())
        <a href="/cities/{{$city->id}}/edit" class="btn btn-primary">Edit</a>
        {!! Form::open(['action' => ['CityController@destroy', $city->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection