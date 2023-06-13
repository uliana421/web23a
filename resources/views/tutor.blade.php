@extends('layouts.main')
@section('title', 'about')
@section('container')
 
    
    <div class="my-2">
        <a href="/tutor-add" class="btn btn-primary">Add Data</a>
    </div>

        @if(Session::has('status'))
            <p class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </p>
        @endif

       
            <div class=" my-3 col-8 col-sm-8 col-md-5"> 
              <form action=""  method="get" class="d-flex" role="search">
                <input class="form-control me-2" type="text" name="keyword" placeholder="keyword" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
            </div>
          

    <table class="table table-bordered" >
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
                <a href="tutor/{{ $tutor->id }}" class="text-decoration-none">Detail</a> ||
                <a href="tutor-edit/{{ $tutor->id }}" class="text-decoration-none">Edit</a> ||
                <a href="tutor-delete/{{ $tutor->id }}" class="text-decoration-none">Delete</a>

               
            </td>
        </tr>
   
    @endforeach 
    </table>


@endsection
