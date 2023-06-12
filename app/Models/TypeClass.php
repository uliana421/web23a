<?php

namespace App\Models;
use App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeClass extends Model
{
    use HasFactory;

    protected $table = 'class';
        
    public function tutor(){
        
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }


}
