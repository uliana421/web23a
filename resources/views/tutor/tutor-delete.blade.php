@extends('layouts.main')
@section('title', 'tutors | delete')
@section('container')

<div class="mt-3">
   <h4>Are You Sure To Delete Data With Name : {{ $tutor->name }} ?</h4><br>

   <form style="display: inline-block" action="/tutor-destroy/{{ $tutor->id }}" method="POST">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button> 
   </form>

   <a href="/tutors" class="btn btn-primary">Cancel</a>
</div>

@endsection