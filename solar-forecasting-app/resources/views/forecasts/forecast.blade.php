@extends('layouts.default')

@section('page-content')

<div class="static top-20 pt-10">
    <div class="pt-20"></div>
    <h3 class="mx-8 text-center text-3xl text-black ">Available Forecasts</h3>

    <!--Divider-->
    <hr class="border-gray-600 my-8 ">

    <div class="flex flex-row flex-wrap flex-grow mt-2">

        <div class="w-full md:w-1/2 p-3">
            <!--Graph Card-->
            <a href="{{ route('forecastSpec.show', ['id' => 'britonFerry']) }}">
                <div class="bg-neutral-400 border border-gray-800 rounded shadow">
                    <div class="border-b border-gray-800 p-3">
                        <h5 class="font-bold uppercase ">Briton Ferry</h5>
                        <h6 class="text-white"> Forecast for: {{$britonForecast->forecast_date}}</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="text-white">Forecasted KwH: {{$britonForecast->forecasted_mv}}</h6>
                    </div>
                </div>
            </a>
            <!--/Graph Card-->
        </div>

        <div class="w-full md:w-1/2 p-3">
            <!--Graph Card-->
            <a href="{{ route('forecastSpec.show', ['id' => 'plantasia']) }}">
                <div class="bg-neutral-400 border border-gray-800 rounded shadow">
                    <div class="border-b border-gray-800 p-3">
                        <h5 class="font-bold uppercase ">Plantasia</h5>
                        <h6 class="text-white">Forecast for: {{$britonForecast->forecast_date}}</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="text-white">Forecasted KwH: {{$britonForecast->forecasted_mv}}</h6>
                    </div>
                </div>
            </a>
            <!--/Graph Card-->
        </div>

        <div class="w-full md:w-1/2 xl:w-1/2 p-3">
            <!--Graph Card-->
            <div class="bg-neutral-400 border border-gray-800 rounded shadow">
                <div class="border-b border-gray-800 p-3">
                    <h5 class="font-bold uppercase ">Graph</h5>
                </div>
                <div class="p-5">
                    <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>

                    </script>
                </div>
            </div>
            <!--/Graph Card-->
        </div>


        <div class="w-full md:w-1/2 xl:w-1/2 p-3">
            <!--Template Card-->
            <div class="bg-neutral-400 border border-gray-800 rounded shadow">
                <div class="border-b border-gray-800 p-3">
                    <h5 class="font-bold uppercase ">Graph</h5>
                </div>
                <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                    <script>

                    </script>
                </div>
            </div>
        </div>
        <!--/Template Card-->
    </div>
</div>
<!--/ Console Content-->
@endsection