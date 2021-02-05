<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
 //Aqui se realiza los modelos 
    public function setting(){
        return $this->belongsTo(Setting::class);
    }
 //Aqui se realiza los modelos 
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
