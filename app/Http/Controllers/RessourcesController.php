<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use App\Models\Department;
use Illuminate\Http\Request;

class RessourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ressources = Ressource::all();
        return view('ressources.index', compact('ressources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('ressources.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'reference' => 'required',
            'department_id',
        ]);
        Ressource::create($request->all());
        return redirect()->route('ressources.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function show(Ressource $ressource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function edit(Ressource $ressource)
    {
        $departments=Department::all();
        return view('ressources.edit',compact('ressource','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ressource $ressource)
    {
        $request->validate([
            'name',
            'reference',
            'department_id'
        ]);
        $ressource->update($request->all());
        return redirect()->route(('ressources.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ressource $ressource)
    {
        $ressource->delete();
        return redirect()->route('ressources.index')->with('success', 'ressource deleted successfully');
    }
}
