@extends('layouts.app')

@section('content')
    <h1>Stad toevoegen</h1>
    {!! Form::open(['action' => 'CityController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{Form::label('name', 'Naam')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Naam'])}}
    </div>

    {{Form::submit('Add city', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection