@extends('layouts.main')

@section('title', 'Users')

@section('main')

    <main>
        <div class="container">
            
        @foreach ($users as $user)
            <div class="card">
                <img src="{{ $user['image'] }}" alt="">
                <h3>{{ $user['first_name'] }} {{ $user['last_name'] }}</h3>
                <span class="email">{{ $user['email'] }}</span>
            </div> 
        @endforeach

        </div>
    </main>

@endsection