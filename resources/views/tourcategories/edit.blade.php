@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    {!! Form::open(['action' => ['TourCategoryController@update', $tourcategory->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('catergoryname', 'categoryname')}}
        {{Form::text('categoryname', $tourcategory->categoryname, ['class' => 'form-control', 'placeholder' => 'Categoryname'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Edit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@endsection