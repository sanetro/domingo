@extends('cars.layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <div class="text-5xl uppercase bold">
                Create Cars
            </div>
        </div>




        <div class="flex justify-center pt-20">
            <form action="/cars/store" method="POST">
                @csrf

                <div class="block">
                    <input
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic
                        placeholder-gray-900"
                        name="name"
                        placeholder="Brand name...">
                    <input
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic
                        placeholder-gray-900"
                        name="founded"
                        placeholder="Founded...">
                    <input
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic
                        placeholder-gray-900"
                        name="description"
                        placeholder="Description...">
                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                    uppercase font-bold">
                        Subbmit
                    </button>

                </div>
            </form>
    </div>
@endsection
