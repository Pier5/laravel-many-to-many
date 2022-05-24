@extends('layouts.admin')

@section('title', "Modifica Post")

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
            <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="type" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $category->type }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description">{{ $category->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
  </div>
@endsection