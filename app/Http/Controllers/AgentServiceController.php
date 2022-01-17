<?php

namespace App\Http\Controllers;

use App\Models\AgentService; 

use Illuminate\Http\Request;

class AgentServiceController extends Controller
{
    public function index(){
        $agentsService=AgentService::all(); 
        return view('agentsService.index',compact('agentsService')); 
    }
}
