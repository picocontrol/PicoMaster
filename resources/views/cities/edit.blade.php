@extends('layouts.app')

@section('content')
    <h1>Edit City</h1>
    {!! Form::open(['action' => ['CityController@update', $city->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Naam')}}
        {{Form::text('name', $city->name, ['class' => 'form-control', 'placeholder' => 'Naam'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Wijzigen', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@endsection