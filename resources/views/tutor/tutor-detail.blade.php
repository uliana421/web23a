@extends('layouts.main')
@section('title', 'about')
@section('container')

    <a href="/tutors" class="btn btn-dark"><-</a>
    <h2>Detail Tutor {{ $tutor->name}}</h2>

   
    
    
  
    <div class="my-3">
        @if($tutor->image != '')
        <img src="{{ asset('storage/photo/'.$tutor->image) }}" alt="" class="img-thumbnail rounded-circle" width="150px">
        @else
        <img src="{{ asset('storage/photo/default.jpg') }}" alt=""  width="150px">
        @endif
    </div>
        <table class="table table-bordered">
            <tr><td>Name : {{ $tutor->name}}</td></tr>
            <tr><td>Gender : {{ $tutor->gender}}</td></tr>
            <tr><td>Age : {{ $tutor->age }}</td></tr>
            <tr><td>Email : {{ $tutor->email }}</td></tr>
            <tr><td>Address : {{ $tutor->address }}</td></tr>
            <tr><td>Skill : {{ $tutor->skill }}</td></tr>
            <tr><td>Rate : {{ $tutor->rate }}</td></tr>
            <tr><td>Salary : {{ $tutor->salary}}</td> </tr>
            
             
       
    </table>

   
   
   
   

@endsection