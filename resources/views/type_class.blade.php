@extends('layouts.main')
@section('title', 'about')
@section('container')

  

    <h3>Class List</h3>
    <table class="table" border="2">
        
        <tr>
            <th>No.</th>
            <th>Tutor Name</th>
            <th>Type</th>
            <th>Schedule</th>
            
        </tr>
   
     @foreach($classList as $class) 
    
        <tr>
            <td>{{ $class->id }}</td>
            <td>{{ $class->tutor->name }}</td>
            <td>{{ $class->type }}</td>
            <td>{{ $class->schedule }}</td>
            

            
   
    @endforeach 
    </table>

    
@endsection
