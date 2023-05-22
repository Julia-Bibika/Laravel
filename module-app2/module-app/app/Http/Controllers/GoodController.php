<?php

namespace App\Http\Controllers;


use App\Models\Good;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoodController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Good::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goods = Good::all();
        return  view('goods.index',['goods'=>$goods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owner_list = Owner::all();
        return view('goods.create',['owner_list' => $owner_list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $good = Good::create([
            'title' => $request->input('brand'),
            'owner' => $request->input('amount'),
            'price' => $request->input('price'),
            'date' => $request->input('date'),
            'owner_id' => $request->input('owner_id'),
            'creator_user_id' => Auth::user()->id
        ]);
        return \redirect(route('goods.index'));
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
    public function edit(Good $good)
    {
        return view('goods.edit',['good'=>$good]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Good $good)
    {
        $good->update([
            'title' => $request->input('brand'),
            'owner' => $request->input('amount'),
            'price' => $request->input('price'),
            'date' => $request->input('date'),
            'owner_id' => $request->input('owner_id'),
        ]);

        return \redirect(route('goods.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Good $good)
    {
        $good->delete();
        return \redirect(route('goods.index'));
    }
}
