@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="/cities/create" class="btn btn-primary">Add a City</a>
                <a href="/tourcategories/create" class="btn btn-primary mtop10">Add a Categorie</a>
                <a href="/tourtypes/create" class="btn btn-primary mtop10">Add a Tourtype</a>

                <p><a href="/tours/create" class="btn btn-primary">Maak nieuwe tour aan</a></p>
                <p>Link naar profielpagina</p>
                <P>Overzicht mijn tours:</p>


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



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
