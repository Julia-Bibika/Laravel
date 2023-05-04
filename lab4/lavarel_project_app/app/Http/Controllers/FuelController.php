<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuelRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Fuel;
use App\Models\Station;
use Illuminate\Support\Facades\Auth;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->authorizeResource(Fuel::class,'fuels');
    }
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
    public function store(FuelRequest $request):RedirectResponse
    {
        $validated = $request->input();
        $fuel = Fuel::create([
            'brand' => $validated['brand'],
            'amount' => $validated['amount'],
            'price' => $validated['price'],
            'station_id' => $validated['station_id'],
            'creator_user_id' => Auth::user()->id
        ]);
        return \redirect(route('fuels.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fuel = Fuel::find($id);

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
    public function update(FuelRequest $request, string $id):RedirectResponse
    {
        $validated = $request->validate();
        $fuel = Fuel::find($id);
        $fuel->update([
            'brand' => $validated['brand'],
            'amount' => $validated['amount'],
            'price' => $validated['price'],
            'station_id' => $validated['station_id'],
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
