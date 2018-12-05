@extends('layouts.app')

@section('content')
    <h1>{{ $tourcategory->categoryname }}</h1>
    <hr>
    <br><br>
    <div class="card padding15">
        {!!   $tourcategory->categoryname !!}
    </div>
    <small>Created {{ $tourcategory->created_at }}</small>
    <hr>
    <a href="/cities" class="btn btn-success">Back</a>
    @if(!Auth::guest())
        <a href="/tourcategories/{{$tourcategory->id}}/edit" class="btn btn-primary">Edit</a>
        {!! Form::open(['action' => ['TourCategoryController@destroy', $tourcategory->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection