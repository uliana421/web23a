<?php

namespace App\Models;
use App\Models\TypeClass;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = ['name','gender','age','email','address','skill','rate','salary'];
    public function class(){

        return $this->hasMany(TypeClass::class);
        
    }
    
}
