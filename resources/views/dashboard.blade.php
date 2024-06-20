@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <a href="{{ route('categories.index') }}" class="btn btn-danger">Registrar categoria</a>
    <br>
    <br>
    

@endsection
