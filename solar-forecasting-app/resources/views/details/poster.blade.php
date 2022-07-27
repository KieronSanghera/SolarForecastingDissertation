@extends('layouts.default')

@section('page-content')
<div class="static top-20 pt-10">
    <div class="pt-20"></div>
    <h3 class="mx-8 text-center text-6xl text-black">Website</h3>

    <hr class="border-gray-600 my-8 ">

    <div class="flex flex-row flex-wrap flex-grow mt-2 text-xl">
        <div>
            <p class="text-center text-3xl">
                Looking to provide an easy to use website. Which shows the forecasts clearly and obviously. Is also useable on mobile devices.

            </p>
            <div class="pt-40"></div>
            <div class="text-center text-5xl space-y-2 pt-6">
                <li>Built using Laravel</li>
                <li>Accesses the database to draw out the information</li>
                <li>Built for computers and Mobile devices</li>
            </div>
            <div class="pt-40"></div>
            <div class="text-center text-5xl space-y-20 pt-6">
                <li>Easy to understand layout</li>
                <div class="py-10">
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1/3 bg-transparent text-center font-semibold hover:bg-neutral-400 py-2 px-4 border border-netrual-300 hover:border-transparent rounded shadow">
                        <a class="flex flex-row text-center justify-center" href="forecasts">More information</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection