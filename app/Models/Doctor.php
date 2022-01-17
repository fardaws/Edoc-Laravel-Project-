<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'experience_number', 'user_id','department_id'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chefOnDepartment()
    {
        return $this->hasOne(Department::class,'department_chef_id','id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
