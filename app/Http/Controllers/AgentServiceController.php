<?php

namespace App\Http\Controllers;

use App\Models\AgentService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentServiceController extends Controller
{
    public function index()
    {
        $agentsService = AgentService::all();
        return view('agentsService.index', compact('agentsService'));
    }
    public function createUser()
    {
        return view('agentsService.createUser');
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

        return redirect()->route('agentService.create');
    }
    public function create()
    {
        $last = DB::table('users')->latest()->first();
        return view('agentsService.create', compact('last'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'code' => "required",
            'user_id',
        ]);
        AgentService::create($request->all());
        return redirect()->route('agentService.index');
    }
}
