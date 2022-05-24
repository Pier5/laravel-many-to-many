@extends('layouts.admin')

@section('title', "Dettagli - $post->title")

@section('content')
      <main>
        <div class="container pb-4">

            <div class="row g-4 pt-4">
                <div class="col-8">
                    <h2 class="pt-2">Titolo: {{ $post->title }}</h2>
                    <h3 class="pt-2">Descrizione:</h3>
                    <p class="card-text pt-2">{{ $post->description }}</p>
                    <h5>Categoria:</h5>
                    <h5>{{ $post->category->type }}</h5>
                </div>
            </div>

            <div class="row g-4 pt-4">
                <div class="col-8">
                    <h4 class="pt-2">Nome autore: {{ $post->user->name }}</h4>
                    <h4 class="pt-2">Email: {{ $post->user->email }}</h4>
                    <h6 class="pt-2">Indirizzo: {{ $post->user->userInfo->address }}</h6>
                    <h6 class="pt-2">Numero di telefono: {{ $post->user->userInfo->phone }}</h6>
                    <h6 class="pt-2">Data di nascita: {{ $post->user->userInfo->b_day }}</h6>
                </div>
            </div>
            <a class="btn btn-primary mt-4" href="{{ route('admin.home') }}"><span class="text-white">Torna indietro</span></a>
        </div>
      </main>
@endsection