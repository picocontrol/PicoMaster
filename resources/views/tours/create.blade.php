@extends('layouts.app')

@section('content')
    <h1 class="text-center top20">Create a Tour!</h1>
    <div class="formdiv">
        {!! Form::open(['action' => 'TourController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name of this tour...'])}}
        </div>
        <div class="form-group">
            {{Form::label('city_id', 'City')}}
            {{ Form::select('city_id', $city, NULL, ['id' => 'city_id', 'class' => 'form-control', 'placeholder' => 'Select you city']) }}
        </div>

        <div class="form-group">
            {{Form::label('tourtype_id', 'Tourtype')}}
            {{ Form::select('tourtype_id', $tourtypes, NULL, ['id' => 'tourtype_id', 'class' => 'form-control', 'placeholder' => 'Pick a type for this tour']) }}
        </div>
        <div class="form-group">
            {{Form::label('tourstartlocation', 'Startlocation')}}
            {{Form::text('tourstartlocation', '', ['class' => 'form-control', 'placeholder' => 'Start location'])}}
        </div>
        <div class="form-group">
            {{Form::label('tourdeparturetime', 'Departuretime')}}
            {{Form::text('tourdeparturetime', '', ['class' => 'form-control', 'placeholder' => 'Departure time'])}}
        </div>
        <div class="form-group">
            {{Form::label('tourduration', 'Duration')}}
            {{Form::text('tourduration', '', ['class' => 'form-control', 'placeholder' => 'Duration'])}}
        </div>
        <div class="form-group">
            {{Form::label('tourdescription', 'Description')}}
            {{Form::textarea('tourdescription', '', ['class' => 'form-control textarea', 'placeholder' => 'Description for this tour..'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
