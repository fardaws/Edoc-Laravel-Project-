<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $doctors=DB::table('doctors')->count();
        $agentsService=DB::table('agent_services')->count();
        $users=DB::table('users')->count();

        // $datesUsers=DB::table('users')->distinct()->get('created_at');
        // $datesDoctors=DB::table('doctors')->distinct()->get('created_at');
        return view('Dashboard.index',compact('doctors','agentsService','users'));
    }
}
