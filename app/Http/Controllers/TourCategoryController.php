<?php

namespace App\Http\Controllers;

use App\TourCategory;
use Illuminate\Http\Request;

class TourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourcategories = TourCategory::orderBy('categoryname', 'asc')->paginate(10);
        return view('tourcategories.index')->with('tourcategories', $tourcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tourcategories.create');
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
            'categoryname' => 'required',
            'categorydescription' => 'required'
        ]);

        $tourcategory = new TourCategory;

        $tourcategory->categoryname = $request->input('categoryname');
        $tourcategory->categorydescription = $request->input('categorydescription');
        $tourcategory->save();

        return redirect('/tourcategories')->with('success', 'Category is stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourcategory = TourCategory::find($id);

        return view('tourcategories.show')->with('tourcategory', $tourcategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourcategory = TourCategory::find($id);

        return view('tourcategories.edit')->with('tourcategory', $tourcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'categoryname' => 'required'
        ]);

        $tourcategory = TourCategory::find($id);
        $tourcategory->categoryname = $request->input('categoryname');

        $tourcategory->save();

        return redirect('/tourcategories')->with('success', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourCategory  $tourCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourcategory = TourCategory::find($id);
        $tourcategory->delete();
        return redirect('/tourcategories')->with('success', 'Category removed');
    }
}
