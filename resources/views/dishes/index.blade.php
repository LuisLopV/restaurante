@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Temas</h1>
                <a href="{{ route('dishes.create') }}" class="btn btn-primary mb-3">Crear plato</a>
                <ul class="list-group">
                    @foreach ($dishes as $dishes)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $dishes->name }}</span>
                            <span>{{ $dishes->description }}</span>
                            <span>{{ $dishes->price }}</span>
                            <span class="badge badge-primary">{{ $category->codeColor }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection