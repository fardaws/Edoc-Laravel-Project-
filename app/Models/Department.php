<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bloc',
        'rooms_number',
        'department_chef_id',
        'materiel_Responsable_id'
    ];

    public function departmentChef(){
        return $this->belongsTo(Doctor::class);
    }
    public function materielResponsable(){
        return $this->belongsTo(AgentService::class,'materiel_Responsable_id','id');
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function agentServices(){
        return $this->hasMany(AgentService::class);
    }
}
