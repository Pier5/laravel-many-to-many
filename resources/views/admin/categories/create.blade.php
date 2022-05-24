@extends('layouts.admin')

@section('title', "Crea Post")

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
            <a href="{{ route('admin.home') }}" class="btn btn-dark my-4">Torna alla home</a>
        </div>
    </div>
  </div>
@endsection