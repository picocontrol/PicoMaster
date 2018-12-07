<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourType;
use App\City;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::orderBy('name', 'asc')->paginate(10);

        return view('tours.index')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourtypes = TourType::pluck('tourtypename', 'id');
        $city = City::pluck('name', 'id');


        $data = array (
            'tourtypes' => $tourtypes,
            'city' => $city
        );

        return view ('tours.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
//            'guide_id' => 'required',
            'city_id' => 'required',
            'tourtype_id' => 'required',
            'tourstartlocation' => 'required',
            'tourdeparturetime' => 'required',
            'tourduration' => 'required',
            'tourdescription' => 'required'
        ]);

        $tours = new Tour();
        $tours->name = $request->input('name');
        $tours->guide_id = auth()->user()->id;

        $tours->city_id = $request->input('city_id');
        $tours->tourtype_id = $request->input('tourtype_id');
        $tours->tourstartlocation = $request->input('tourstartlocation');
        $tours->tourdeparturetime = $request->input('tourdeparturetime');
        $tours->tourduration = $request->input('tourduration');
        $tours->tourdescription = $request->input('tourdescription');
        $tours->save();

        return redirect('/tours')->with('success', 'You added a Tour!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tours =Tour::find($id);
        $tourtypes = Tourtype::where('id', $tours->tourtype_id)->first();
        $city = City::where('id', $tours->city_id)->first();

        $data = array (
            'tours' => $tours,
            'tourtypes' => $tourtypes,
            'city' => $city
        );

        return view ('tours.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours =Tour::find($id);
        $tourtypes = TourType::pluck('tourtypename', 'id');
        $city = City::pluck('name', 'id');
        abort_if($tours->guide_id !== auth()->id(), 403);


        $data = array (
            'tours' => $tours,
            'tourtypes' => $tourtypes,
            'city' => $city
        );

        return view ('tours.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
//            'guide_id' => 'required',
            'city_id' => 'required',
            'tourtype_id' => 'required',
            'tourstartlocation' => 'required',
            'tourdeparturetime' => 'required',
            'tourduration' => 'required',
            'tourdescription' => 'required'
        ]);

        $tours = Tour::find($id);
        $tours->name = $request->input('name');
        $tours->guide_id = auth()->user()->id;
        $tours->city_id = $request->input('city_id');
        $tours->tourtype_id = $request->input('tourtype_id');
        $tours->tourstartlocation = $request->input('tourstartlocation');
        $tours->tourdeparturetime = $request->input('tourdeparturetime');
        $tours->tourduration = $request->input('tourduration');
        $tours->tourdescription = $request->input('tourdescription');
        $tours->save();

        return redirect('/tours')->with('success', 'You updated a Tour!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tours = Tour::find($id);

        $tours->delete();

        return redirect('/tours')->with('success', 'Tour Removed');
    }
}
