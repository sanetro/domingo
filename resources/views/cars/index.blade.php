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


        <div class="m-auto w-5/6 py-10">
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: 2020
                </span>

                <h2 class="text-gray-700 text-5xl">
                    Audi

                </h2>
            </div>
        </div>
    </div>
@endsection
