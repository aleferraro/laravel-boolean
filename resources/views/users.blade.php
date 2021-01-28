@extends('layouts.main')

@section('title', 'Users')

@section('main')

    <main>
        <div class="container">
            
            @foreach ($users as $user)
                <div class="card">
                    <img src="{{ $user['image'] }}" alt="">
                    <h3>{{ $user['first_name'] }} {{ $user['last_name'] }}</h3>
                    <a href="/users/{{ $user['id'] }}">Maggiori dettagli</a>
                </div> 
            @endforeach

        </div>
    </main>

@endsection