@extends("layouts.app")

<main>
    <h1 class="bg-red-600 text-center">Welcome to terms {{$user->email}}</h1>
    <div>
        <button class="bg-blue-500 mt-2 px-4 rounded ml-2"><a href="{{ route('dashboard') }}">Dashboard</a></button>
    </div>
</main>


