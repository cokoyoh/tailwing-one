@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 flex">
        <div class="py-8 px-12 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
            <div class="xl:max-w-lg xl:ml-auto">
                <img class="h-10" src="/img/logo.svg" alt="Workcation">

                <img class="mt-6 sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center rounded-lg shadow-xl lg:hidden"
                     src="/img/beach-work.jpg"
                     alt="Woman workactioning on the beach">

                <h1 class="mt-6 text-2xl sm:text-4xl lg:text-3xl xl:text-4xl sm:mt-8 font-bold text-gray-900 leading-tight">
                    You can work from anywhere.
                    <br class="hidden lg:inline"><span class="text-indigo-500">Take advantage of it</span>
                </h1>

                <p class="mt-2 text-gray-600 sm:text-xl sm:mt-4">
                    Workaction helps you find work-friendly rentals in beautiful locations so you can enjoy some warm weather even when you are on vacation.
                </p>

                <div class="mt-4 sm:mt-6">
                    <a href="#"
                       class="inline-block bg-indigo-500 hover:bg-indigo-400 md:hover:bg-green-400 active:bg-indigo-600 focus:outline-none focus:shadow-outline text-white px-5 py-3 rounded-lg shadow-lg uppercase tracking-wider font-semibold text-sm sm:text-base"
                    >
                        Book your escape
                    </a>
                </div>

            </div>
        </div>

        <div class="hidden lg:block lg:w-1/2 lg:relative">
            <img class="absolute inset-0 h-full w-full object-cover object-center" src="/img/beach-work.jpg" alt="Woman workactioning on the beach">
        </div>
    </div>
@endsection
