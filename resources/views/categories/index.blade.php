@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Categorias</h1>
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Crear categoria</a>
                <ul class="list-group">
                    @foreach ($categories as $categories)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $categories->name }}</span>
                            <span class="badge badge-primary">{{ $categories->codeColor }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection