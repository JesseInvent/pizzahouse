@extends('layouts.app')

@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px text-center" alt="">

            <img src="/img/pizza-house.png" alt="pizza house logo">

            <div class="align-center">
                <h1 class="title">The North Best Pizzas</h1>
            </div>
            <p class="mssg">{{ session('msg') }}</p>
            <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
        </div>
        
    </div>

@endsection