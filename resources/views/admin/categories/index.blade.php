@extends('layouts.admin')

@section('title', 'Index')

@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-warning">{{ session('deleted') }}</div>
        @endif
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Categoria</th>
                            <th class="text-center" scope="col" colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr data-id="{{ $category->id }}">
                                <td class="text-center">{{ $category->id }}</td>
                                <td class="text-center">{{ $category->type }}</td>
                                {{-- <td class="text-center">{{ $category->description }}</td> --}}
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.categories.show', $category->id) }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-delete">Delete</button>                                 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    <a href="{{ route('admin.home') }}" class="btn btn-dark mb-4">Torna alla home</a>
                </div>
            </div>
        </div>

        {{-- {{ $categories->links() }} --}}

        <section id="confirmation-overlay" class="overlay d-none">
            <div class="popup">
                <h1>Sei sicuro di voler eliminare?</h1>
                <div class="d-flex justify-content-center">
                    <button id="btn-no" class="btn btn-primary me-3">NO</button>
                    <form method="POST" data-base="{{ route('admin.categories.destroy', '*****') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">SI</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection