@extends('layouts.app')

@section('content')
    <h1>{{ $tourType->tourtypename }}</h1>
    <hr>
    <div class="">
        <h3>Chosen category: {!!   $tourCategories->categoryname !!} </h3>
        <br>
        {{ $tourType->tourtypedescription }}
    </div>
    <hr>
    <small>Tourtype created at {{ $tourType->created_at }}</small>
    <hr>
    <a href="/tourtypes" class="btn btn-success">Back</a>
    @if(!Auth::guest())
        <a href="/tourtypes/{{$tourType->id}}/edit" class="btn btn-primary">Bewerken</a>
        {!! Form::open(['action' => ['TourTypeController@destroy', $tourType->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection