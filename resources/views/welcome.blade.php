@extends('layouts.app')

@section('content')
    <div class="py-8 px-12">
        <img class="h-10" src="/img/logo.svg" alt="Workcation">
        <img class="mt-6 rounded-lg shadow-xl" src="/img/beach-work.jpg" alt="Woman workactioning on the beach">
        <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight">
            You can work from anywhere. <span class="text-indigo-500">Take advantage of it</span>
        </h1>

        <p class="mt-2 text-gray-600">
            Workaction helps you find work-friendly rentals in beautiful locations so you can enjoy some warm weather even when you are on vacation.
        </p>

        <div class="mt-4">
            <a href="#"
               class="inline-block bg-indigo-500 text-white px-5 py-3 rounded-lg shadow-lg uppercase tracking-wider font-semibold text-sm"
            >
                Book your escape
            </a>
        </div>
    </div>
@endsection
