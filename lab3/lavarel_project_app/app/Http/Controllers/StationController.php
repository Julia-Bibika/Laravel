<?php

namespace App\Http\Controllers;

use App\Http\Requests\StationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Station;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        return  view('stations.index',['stations'=>$stations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StationRequest $request): RedirectResponse
    {
        $validated = $request->validate();
        $station = Station::create([
            'title' => $validated['title'],
            'owner' => $validated['owner'],
            'address' =>$validated['address'],
        ]);
        return \redirect(route('stations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $station = Station::find($id);
        return view('stations.edit',['station'=>$station]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StationRequest $request, string $id): RedirectResponse
    {
        $validated = $request->validate();
        $station = Station::find($id);
        $station->update([
            'title' => $validated['title'],
            'owner' => $validated['owner'],
            'address' =>$validated['address'],
        ]);

        return \redirect(route('stations.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Station::destroy($id);
        return \redirect(route('stations.index'));
    }
}
