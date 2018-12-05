@extends('layouts.app')

@section('content')
    <h1>Tourcategory</h1>
    @if (count($tourcategories) > 0)
        <ul class="list-group">
        @foreach ($tourcategories as $tourcategory)
            <!--<div class="row top"> </div>
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/img/city.jpg">
                        <div class="col-md-10 col-sm-10"></div>
                    </div>-->
                <div class="card padding15">
                    <h3><a href="/tourcategories/{{$tourcategory->id}}">{{$tourcategory->categoryname}}</a></h3>
                    <small>Aangemeld {{$tourcategory->created_at}}</small>
                </div>
            @endforeach
            {{ $tourcategories->links() }}

        </ul>
    @else
        <p>No categories found!</p>
    @endif
@endsection