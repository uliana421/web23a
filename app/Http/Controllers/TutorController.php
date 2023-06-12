<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tutor;



class TutorController extends Controller
{
  public function index(){
    // $tutor = Tutor::all();
    $tutor = Tutor::get();
    return view('tutor', ['tutorList' => $tutor]);
  }

  public function show($id){
    $tutor = Tutor::with(['class'])
        ->findOrFail($id);
    return view('tutor-detail', ['tutor' => $tutor]);
  }
  public function create(){
    return view('tutor-add');
  }

  public function store(Request $request){
    // $tutor = new Tutor;
    // $tutor->name = $request->name;
    // $tutor->gender = $request->gender;
    // $tutor->age = $request->age;
    // $tutor->email = $request->email;
    // $tutor->address = $request->address;
    // $tutor->skill = $request->skill;
    // $tutor->rate = $request->rate;
    // $tutor->salary = $request->salary;
    // $tutor->save();

    // $tutor->create($request->all()); 
    $tutor = Tutor::create($request->all());

     if($tutor) {
        Session::flash('status', 'success' );
        Session::flash('message', 'Add New Tutor Success!' );
     }


    return redirect('/tutors');
  }

  public function edit(Request $request, $id){
    $tutor = Tutor::findOrFail($id);
    return view('tutor-edit', ['tutor' => $tutor]);
    
  }

  public function update(Request $request, $id) {
    
      $tutor = Tutor::findOrFail($id);
      $tutor->update($request->all());
      return redirect('/tutors');
  }
}
