<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacehr;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    protected $user,$teacher;


    public function index()
    {
        return view('back.teachers.index',[
            'teachers' =>  Teacehr::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('back.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->user = \App\Models\User::createUser($request);
        $this->teacher = Teacehr::createOrUpdateTeacher($request,$this->user->id);
        return back()->with('success','Teacher create successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
