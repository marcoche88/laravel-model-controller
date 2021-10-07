@extends('layouts.main')

@section('title', 'Movies')

@section('content')
<h1 class="text-center my-4">MOVIES</h1>
<div class="container">

    <div class="row justify-content-center">
        
        @forelse ($movies as $movie)
        <div class="col-4">
           @include('includes.movies.card', ['movie' => $movie]) 
        </div>
        
        @empty
        <div class="col-12">
            <div class="alert alert-danger m-5">
                <h3 class="text-center">Non ci sono film da visualizzare</h3>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection