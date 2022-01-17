<?php

namespace App\Http\Controllers;

use App\Models\Department; 
use App\Models\Doctor; 
use App\Models\AgentService; 
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments=Department::all(); 
        return view('departments.index',compact('departments'));
        // dd($departments); 
    }
    public function create(){
        $doctors=Doctor::all(); 
        $agentServices=AgentService::all(); 
        return view('departments.create',compact('doctors','agentServices')); 
    }
    public function store(Request $request){
        //valide inputs
        $request->validate([
            'name'=>'required',
            'bloc'=>'required',
            'rooms_number'=>'required',
            'department_chef_id', 
            'materiel_Responsable_id'
        ]); 
        //store into db
        Department::create($request->all()); 
        //redirect to list departments
        return redirect()->route('department.index'); 
    }
    public function edit(Department $department){
        $agentServices=AgentService::all(); 
        $doctors=Doctor::all(); 
        return view('departments.edit',compact('department','doctors','agentServices')); 
    }
    public function update(Request $request, Department $department){
        //validate inputs 
        $request->validate([
            'name',
            'bloc',
            'rooms_number',
            'department_chef_id', 
            'materiel_Responsable_id'
        ]); 
        //update db
        $department->update($request->all()); 
        //redirect to list departments
        return redirect()->route('department.index')->with('success','department was updated'); 
    }
    public function destroy(Department $department){
        $department->delete(); 
        return redirect()->route('department.index')->with('success','department was deleted'); 
    }
}
