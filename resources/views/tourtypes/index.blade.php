@extends('layouts.app')

@section('content')
    <h1>Categorized tours</h1>
    @if (count($tourtypes) > 0)
        <ul class="list-group">
            @foreach ($tourtypes as $tourtype)
                <div class="row top">
                    <div class="col-md-12 col-sm-12">
                        <div class="card padding15">
                            <h3><a href="/tourtypes/{{$tourtype->id}}">{{$tourtype->tourtypename}}</a></h3>
                            <small>Added at {{$tourtype->created_at}}</small>
                        </div>
                    </div>

                </div>
            @endforeach
            {{ $tourtypes->links() }}
        </ul>
    @else
        <p>No tourtypes found!</p>
    @endif

@endsection