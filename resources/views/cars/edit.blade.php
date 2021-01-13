@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update car
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-10">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" id="name"
                class="block shadow-5xl mb-6 p-2 w-80 italic placeholder-gray-400"
                placeholder="Brand name..."
                value="{{ $car->name }}">

            <input type="text" name="founded" id="founded"
                class="block shadow-5xl mb-6 p-2 w-80 italic placeholder-gray-400"
                placeholder="Founded..."
                value="{{ $car->founded }}">

            <input type="text" name="description" id="description"
                class="block shadow-5xl mb-6 p-2 w-80 italic placeholder-gray-400"
                placeholder="Description..."
                value="{{ $car->description }}">

            <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font font-bold">
                Submit
            </button>
        </form>
    </div>
@endsection
