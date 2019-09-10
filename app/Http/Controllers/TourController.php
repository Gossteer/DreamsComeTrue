<?php

namespace App\Http\Controllers;

use App\Passenger;
use App\tour;
use App\Type_Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tours', ['tours' => Tour::paginate(12), ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tours.create', ['type_tours' => Type_Tour::all(), 'Tour' => []]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tour::create([
          'Name_Tours'=> $request->Name_Tours,
           'Description'=> $request->Description,
           'type_tours_id' => $request->type_tours_id,
            'Price'=> $request->Price,
            'Privilegens_Price'=> $request->Privilegens_Price,
            'Expenses'=> $request->Expenses,
            'Amount_Place'=> $request->Amount_Place,
            'Start_Date_Tours'=> $request->Start_Date_Tours,
        ]);

        return redirect()->route('tours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(tour $tour)
    {
        return view('admin.passenger', ['passengers' => Passenger::where('tours_id', $tour->id)->paginate(12), 'Name_tour' => $tour->Name_Tours]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(tour $tour)
    {
        return view('admin.tours.update', ['type_tours' => Type_Tour::all(), 'tour' => $tour,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tour $tour)
    {
        $attributes =['Name_Tours'=> $request->Name_Tours,
            'Description'=> $request->Description,
            'type_tours_id' => $request->type_tours_id,
            'Price'=> $request->Price,
            'Privilegens_Price'=> $request->Privilegens_Price,
            'Expenses'=> $request->Expenses,
            'Amount_Place'=> $request->Amount_Place,
            'Start_Date_Tours'=> $request->Start_Date_Tours];
        $tour->update($attributes);

        return redirect()->route('tours.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(tour $tour)
    {
       $tour->delete();

        return redirect()->route('tours.index');
    }
}