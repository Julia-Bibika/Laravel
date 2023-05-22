<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Success;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $successes = Success::all();
        return  view('successes.index',['successes'=>$successes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $student_list = Student::all();
        return view('successes.create',['student_list' => $student_list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $success = Success::create([
            'title' => $request->input('title'),
            'mark' => $request->input('mark'),
            'date' => $request->input('date'),
            'student_id' => $request->input('student_id'),
        ]);
        return \redirect(route('successes.index'));
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
    public function edit(string $id)
    {
        $student_list = Student::all();
        $success = Success::find($id);
        return view('successes.edit',['success'=>$success,'student_list'=>$student_list]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fuel = Success::find($id);
        $fuel->update([
            'title' => $request->input('title'),
            'mark' => $request->input('mark'),
            'date' => $request->input('date'),
            'student_id' => $request->input('student_id'),
        ]);

        return \redirect(route('successes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Success::destroy($id);
        return \redirect(route('successes.index'));
    }
}
