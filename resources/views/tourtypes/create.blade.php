@extends('layouts.app')

@section('content')
    <h1 class="text-center top20">Create a new tour type</h1>
    <div class="formdiv">
        {!! Form::open(['action' => 'TourTypeController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('tourtypename', 'Name')}}
            {{Form::text('tourtypename', '', ['class' => 'form-control', 'placeholder' => 'Add a tour type'])}}
        </div>
        <div class="form-group">
            {{Form::label('tourcategory', 'Tour category')}}
            {{ Form::select('tourcategory', $tourcategories, NULL, ['id' => 'tourcategory', 'class' => 'form-control', 'placeholder' => 'Pick a tour category...']) }}
        </div>
        <div class="form-group">
            {{Form::label('tourtypedescription', 'Description')}}
            {{Form::textarea('tourtypedescription', '', ['class' => 'form-control textarea', 'placeholder' => 'Description of the tour type'])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
