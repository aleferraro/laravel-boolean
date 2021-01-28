@extends('layouts.main')

@section('title', 'Users')

@section('main')

    <main>
        <div class="container">
            
            <div class="card">
                <img src="{{ $user['image'] }}" alt="">
                <span>First Name: {{ $user['first_name'] }}</span>
                <span>Last Name: {{ $user['last_name'] }}</span>
                <span class="email">Email: {{ $user['email'] }}</span>
                <span>Gender: {{ $user['gender'] }}</span>
                <span>User Id: {{ $user['id'] }}</span>
            </div> 

        </div>
    </main>

@endsection