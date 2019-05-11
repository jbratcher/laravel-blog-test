@extends('layout')

@section('title', 'Home')

@section('content')

    <h1>Welcome to the home page</h1>

    <section class="card">
        <h2 class="card-header">Todo list</h2>

        <ul class="card-body todo_list">
        
            @foreach($tasks as $task)

                <li>{{ $task }}</li>

            @endforeach

        </ul>
    </section>

@endsection