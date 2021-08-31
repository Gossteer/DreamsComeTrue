<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Website::find($request->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Website::create([
            'Site' => $request->Site
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Website::find($request->id)->update([
            'Site' => $request->Site,
        ]);

        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Website::find($request->id)->delete();

        return 1;
    }

    public function siteIndex()
    {
        return view('site.index', ['Carbon' => Carbon::now()->addDays(14), 'Cardon_hot' =>Carbon::now(), 'tours' => Tour::where('Confidentiality',0)->orderByDesc('Start_Date_Tours')->paginate(4)]);
    }

    public function siteAbout()
    {
        return view('site.about');
    }
}
