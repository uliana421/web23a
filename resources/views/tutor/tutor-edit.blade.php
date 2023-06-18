@extends('layouts.main')
@section('title', 'tutors | edit')
@section('container')


<div class="mt-5 col-8">
    <form action="/tutor/{{ $tutor->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="fname" class="form-label">Name</label> <br>
        <input type="text" id="fname" name="name" value="{{$tutor->name}}" class="form-control"><br>

        <label for="fgender" class="form-label" >Gender</label>
        <select name="gender" id="gender" class="form-select" required>
            <option value="{{ $tutor->gender }}">{{ $tutor->gender }}</option>
            @if ($tutor->gender == 'Perempuan')
                <option value="Laki-Laki">Laki-Laki</option>
            @else 
            <option value="Perempuan">Perempuan</option>
            @endif
        </select><br>
        
        <label for="fage" class="form-label">Age</label> <br>
        <input type="text" id="fage" name="age" value="{{$tutor->age}}" class="form-control"><br>
        
        <label for="femail" class="form-label">Email</label>
        <input type="text" id="femail" name="email" value="{{$tutor->email}}" class="form-control" ><br><br>

        <label for="faddress" class="form-label">Address</label>
        <input type="text" id="faddress" name="address" value="{{$tutor->address}}" class="form-control"><br><br>
        
        <label for="fskill" class="form-label">Skill</label>
        <input type="text" id="fskill" name="skill" value="{{$tutor->skill}}" class="form-control"><br><br>

        <label for="frate" class="form-label" >Rate</label>
        <select name="rate" id="rate" class="form-select" required>
            <option value="{{ $tutor->rate }}">{{ $tutor->rate }}</option>
            @if ($tutor->rate == 4)
                <option value=5>5</option>
            @else 
            <option value=4>4</option>
            @endif
        </select><br>

         
        <label for="fsalary" class="form-label">Salary</label>
        <input type="text" id="fsalary" name="salary" value="{{$tutor->salary}}" class="form-control"><br><br>

        

        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>

        
    </form>
</div> 

@endsection