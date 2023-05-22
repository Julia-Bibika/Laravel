<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Owner::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::all();
        return  view('owners.index',['owners'=>$owners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $owner = Owner::create([
            'brand' => $request->input('brand'),
            'country' => $request->input('country'),
            'contact_phone' => $request->input('contact_phone'),
            'email' => $request->input('email'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner)
    {
        return view('owners.edit',['owner'=>$owner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        $owner->update([
            'brand' => $request->input('brand'),
            'country' => $request->input('country'),
            'contact_phone' => $request->input('contact_phone'),
            'email' => $request->input('email'),
        ]);
        return \redirect(route('owners.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return \redirect(route('owners.index'));
    }
}
