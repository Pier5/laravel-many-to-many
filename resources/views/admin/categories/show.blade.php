@extends('layouts.admin')

@section('title', "Dettagli - $category->type")

@section('content')
      <main>
        <div class="container pb-4">

            <div class="row g-4 pt-4">
                <div class="col-8">
                    <h3 class="pt-2">Descrizione:</h3>
                    <p class="card-text pt-2">{{ $category->description }}</p>
                </div>
            </div>

            <a class="btn btn-primary mt-4" href="{{ route('admin.home') }}"><span class="text-white">Torna indietro</span></a>
        </div>
      </main>
@endsection