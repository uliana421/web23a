<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tutor;



class TutorController extends Controller
{
  public function index(Request $request){
    $keyword = $request->keyword;
    $tutor = Tutor::where('name','LIKE','%'.$keyword.'%')
              ->OrWhere('skill', $keyword)
              ->OrWhere('rate', $keyword)
              ->get();
    return view('tutor.tutor', ['tutorList' => $tutor]);
  }

  public function show($id){
    $tutor = Tutor::findOrFail($id);
    return view('tutor.tutor-detail', ['tutor' => $tutor]);
  }
  public function create(){
    return view('tutor.tutor-add');
  }

  public function store(Request $request){

    $newName = '';

    if($request->file('photo')){
    $extension = $request->file('photo')->getClientOriginalExtension();
    $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
    $request->file('photo')->storeAs('photo', $newName);
    }
   $request['image'] = $newName;
    $tutor = Tutor::create($request->all());

     if($tutor) {
        Session::flash('status', 'success' );
        Session::flash('message', 'Add New Tutor Success!' );
     }


    return redirect('/tutors');
  }

  public function edit(Request $request, $id){
    $tutor = Tutor::findOrFail($id);
    return view('tutor.tutor-edit', ['tutor' => $tutor]);
    
  }

  public function update(Request $request, $id) {
    
      $tutor = Tutor::findOrFail($id);
      $tutor->update($request->all());

      if($tutor) {
        Session::flash('status', 'success' );
        Session::flash('message', 'Edit Data Success!' );
     }

      return redirect('/tutors');
  }

  public function delete($id){
    $tutor = Tutor::findOrFail($id);
    return view('tutor.tutor-delete', ['tutor' => $tutor]);
  }

  public function destroy($id){
    $deleteTutor = Tutor::findOrFail($id);
    $deleteTutor->delete();
    
    if($deleteTutor) {
      Session::flash('status', 'success' );
      Session::flash('message', 'Delete Data Success!' );
   }

    return redirect('/tutors');
  }
}