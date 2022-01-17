<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','reference','department_id'
    ]; 

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    // public function agentService(){
    //     return $this->belongTo(AgentService::class,'materiel_Responsable_id','id'); 
    // }
}
