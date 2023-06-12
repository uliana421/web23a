<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeClass;

class TypeClassController extends Controller
{
    public function index(){
        // $type_class = TypeClass::all();
        $type_class = TypeClass::get();
     return view('type_class', ['classList' => $type_class]);
    }

    
}
