@extends('cars.layouts.app')

@section('content')
    <!--
        Tailwind - mix not found - solved

        npm install laravel-mix@latest
        npm clean-install
    -->
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <div class="text-5xl uppercase bold">
                Cars
            </div>
        </div>

        <div class="pt-10">
            <a href="cars/create"
            class="border-b-2 pb-2 border-dotted italic text-gray-500">
                Click to create
            </a>
        </div>


        <div class="m-auto w-5/6 py-10">

            @foreach ($cars as $car)
                <div class="m-auto">
                    <div class="float-right">
                        <a  class="border-b-2 pb-2 border-dotted italic text-green-500"
                            href="cars/{{ $car->id }}/edit">
                            Edit &rarr;
                        </a>
                    </div>
                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        Founded: {{ $car->founded }}
                    </span>

                    <h2 class="text-gray-700 text-5xl">
                        {{ $car->name }}
                    </h2>

                    <p class="text-lg text-gray-700 py-6">
                        {{ $car->description }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
