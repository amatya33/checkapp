<?php

namespace App\Http\Controllers;

use App\Checkin;
use App\Checktype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // Display all checkins
        $checkins = Checkin::all();

        return view('checkins.index', ['checkins'=>$checkins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $checktype = Checktype::all();

        return view('checkins.create')->with(['user' => $user])->with(['checktype' => $checktype]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkin = new \App\Checkin;
        // $checkin -> user_id=Auth::user()->id;
        // $checkin->user_id = $request->user()->id;
        $checkin->checktype = $request->get('checktype');
        $checkin->longitude = $request->get('longitude');
        $checkin->latitude = $request->get('latitude');
        $checkin->accuracy = $request->get('accuracy');
        $checkin->details = $request->get('details');
        $checkin->save();

        return view('checkins.index')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function show(Checkin $checkin)
    {
        //
        // // Get the currently authenticated user.
        // $user = Auth::user();
        // // Get the currently authenticated user's ID
        // $id = Auth::id();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkin $checkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkin $checkin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkin $checkin)
    {
        //
    }
}
