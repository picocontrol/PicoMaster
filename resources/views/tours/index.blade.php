@extends('layouts.app')

@section('content')
    <h1>Tours</h1>
    @if (count($tours) > 0)
        <ul class="list-group">
            @foreach ($tours as $tour)
                <div class="row top">
                    <div class="col-md-12 col-sm-12">
                        <div class="card padding15">
                            <h3><a href="/tours/{{$tour->id}}">{{$tour->name}}</a></h3>
                            <small>Added at {{$tour->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $tours->links() }}
        </ul>
    @else
        <p>No tours found!</p>
    @endif

@endsection