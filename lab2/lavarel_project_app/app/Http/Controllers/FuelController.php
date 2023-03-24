<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Fuel;
use App\Models\Station;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fuel = Fuel::all();
        return  view('fuels.index',['fuel'=>$fuel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $station_list = Station::all();
        return view('fuels.create',['station_list' => $station_list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $fuel = Fuel::create([
            'brand' => $request->input('brand'),
            'amount' => $request->input('amount'),
            'price' => $request->input('price'),
            'station_id' => $request->input('station_id'),
        ]);
        return \redirect(route('fuels.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $station_list = Station::all();
        $fuel = Fuel::find($id);
        return view('fuels.edit',['fuel'=>$fuel,'station_list'=>$station_list]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $fuel = Fuel::find($id);
        $fuel->update([
            'brand' => $request->input('brand'),
            'amount' => $request->input('amount'),
            'price' => $request->input('price'),
            'station_id' => $request->input('station_id'),
        ]);

        return \redirect(route('fuels.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Fuel::destroy($id);
        return \redirect(route('fuels.index'));
    }
}
