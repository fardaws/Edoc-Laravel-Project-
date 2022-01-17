<?php

namespace App\Http\Controllers;

use App\Models\Doctor; 

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index(){
        $doctors=Doctor::all(); 
        return view('doctors.index',compact('doctors')); 
    }
}
