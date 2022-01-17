<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentService extends Model
{
    use HasFactory;
    protected $fillable=['code','user_id']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function department()
    {
        return $this->hasOne(Department::class,'department_Responsable_id','id');
    }
}
