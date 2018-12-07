@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit City</h1>
        {!! Form::open(['action' => ['CityController@update', $city->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Naam')}}
            {{Form::text('name', $city->name, ['class' => 'form-control', 'placeholder' => 'Naam'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('Description', $city->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body tekst'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Wijzigen', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection