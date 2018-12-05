<?php

namespace App\Http\Controllers;

use App\TourType;
use Illuminate\Http\Request;
use App\TourCategory;

class TourTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourtypes = TourType::orderBy('tourtypename', 'asc')->paginate(10);

        return view('tourtypes.index')->with('tourtypes', $tourtypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourcategories = TourCategory::pluck('categoryname', 'id');

        return view('tourtypes.create')->with('tourcategories', $tourcategories);
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
            'tourtypename' => 'required',
            'tourtypedescription' => 'required'
        ]);

        $tourtype = new TourType();
        $tourtype->tourtypename = $request->input('tourtypename');
        $tourtype->tourcategory_id = $request->input('tourcategory');
        $tourtype->tourtypedescription = $request->input('tourtypedescription');
        $tourtype->save();

        return redirect('/tourtypes')->with('success', 'Tour type Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TourType  $tourType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourType = TourType::find($id);
        $categories = TourCategory::where('id', $tourType->tourcategory_id)->first();

        $data =  array (
            'tourType' => $tourType,
            'tourCategories' => $categories
        );

        return view('tourtypes.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TourType  $tourType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourtype = TourType::find($id);
        $categories = TourCategory::pluck('categoryname', 'id');

        $data =  array (
            'tourType' => $tourtype,
            'categories' => $categories
        );


        return view('tourtypes.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourType  $tourType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tourtypename' => 'required',
            'tourtypedescription' => 'required'
        ]);

        $tourtype = TourType::find($id);

        $tourtype->tourtypename = $request->input('tourtypename');
        $tourtype->tourcategory_id = $request->input('tourcategory');
        $tourtype->tourtypedescription = $request->input('tourtypedescription');
        $tourtype->save();

        return redirect('/tourtypes')->with('success', 'Tour type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourType  $tourType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourtype = TourType::find($id);

        $tourtype->delete();

        return redirect('/tourtypes')->with('success', 'Tour type Removed');
    }
}
