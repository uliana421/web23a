@extends('layouts.main')
@section('title', 'home')
@section('container')
<header class="masthead text-gray text-center">
    {{-- @if(Session::has('status'))
    <p class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </p>
    @endif --}}
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-8" src="{{ asset('storage/photo/logo_it.png') }}" alt="..."  width="150px"/>
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Welcome Admin!</h1>
       
    </div>
</header>
    
@endsection