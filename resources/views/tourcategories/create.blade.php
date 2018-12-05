@extends('layouts.app')

@section('content')
    <h1>Add category</h1>
    {!! Form::open(['action' => 'TourCategoryController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{Form::label('categoryname', 'categoryname')}}
        {{Form::text('categoryname', '', ['class' => 'form-control', 'placeholder' => 'categoryname'])}}
    </div>

    <div class="form-group">
        {{Form::label('categorydescription', 'categorydescription')}}
        {{Form::text('categorydescription', '', ['class' => 'form-control', 'placeholder' => 'categorydescription'])}}
    </div>

    {{Form::submit('Add category', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection