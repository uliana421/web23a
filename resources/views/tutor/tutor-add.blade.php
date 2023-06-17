@extends('layouts.main')
@section('title', 'about')
@section('container')

<div class="mt-5 col-7">
    <form action="/tutors" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="">Select One</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age" required>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <div class="mb-3">
            <label for="skill">Skill</label>
            <input type="text" class="form-control" id="skill" name="skill" required>
        </div>

        <div class="mb-3">
            <label for="rate">Rate</label>
            <select name="rate" id="rate" class="form-control" required>
                <option value="">Select One</option>
                <option value=4>4</option>
                <option value=5>5</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary">
        </div>

        <div class="mb-4">
            <label for="photo">Photo</label>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo">
                </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>

        
    </form>
</div>

@endsection