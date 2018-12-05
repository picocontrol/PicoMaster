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
