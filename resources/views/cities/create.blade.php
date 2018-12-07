@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a city</h1>
        {!! Form::open(['action' => 'CityController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter city name...'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body tekst'])}}
        </div>
        <div class="form-group">
            {{Form::file('city_image')}}
        </div>
        {{Form::submit('Add city', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection