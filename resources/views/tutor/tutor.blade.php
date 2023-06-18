@extends('layouts.main')
@section('title', 'tutors')
@section('container')
 
    <div class="my-2">
        <a href="/home" class="btn btn-dark "><-</a>
        <a href="/tutor-add" class="btn btn-dark">Add Data</a>
    </div>

        @if(Session::has('status'))
            <p class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </p>
        @endif

       
            <div class=" my-3 col-8 col-sm-8 col-md-5"> 
              <form action=""  method="get" class="d-flex" role="search">
                <input class="form-control me-2" type="text" name="keyword" placeholder="keyword" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
              </form>
            </div>
          

    <table class="table table-bordered text-center" >
        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Skill</th>
            <th>Rate</th>
            <th>Salary</th>
            <th>Action</th>

        </tr>
    </thead>
     @foreach($tutorList as $tutor) 
    
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tutor->name }}</td>
            <td>{{ $tutor->skill }}</td>
            <td>{{ $tutor->rate }}</td>
            <td>{{ $tutor->salary}}</td>
            <td>
                <a href="tutor/{{ $tutor->id }}" class="btn btn-dark">Detail</a>
                <a href="tutor-edit/{{ $tutor->id }}" class="btn btn-dark">Edit</a>
                <a href="tutor-delete/{{ $tutor->id }}" class="btn btn-danger">Delete</a>

               
            </td>
        </tr>
   
    @endforeach 
    </table>


@endsection
