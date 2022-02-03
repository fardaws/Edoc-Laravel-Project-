<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{

    // public function

    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }
    public function create()
    {
        $last = DB::table('users')->latest()->first();
        $departments = Department::all();
        // dd($last->id);
        return view('doctors.create', compact('last', 'departments'));
    }
    public function createUser()
    {
        return view('doctors.createUser');
    }
    public function storeUser(Request $request)
    {

        //validate inputs
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'bidthdate' => 'required',
            'avatar',
            'gender' => 'required',
            'email',
            'password',
        ]);
        //store into DB
        User::create($request->all());

        return redirect()->route('doctors.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'experience_number' => 'required',
            'department_id',
            'user_id',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index');
    }
}
