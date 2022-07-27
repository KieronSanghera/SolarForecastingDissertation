@extends('layouts.default')

@section('page-content')

<!--Divider-->
@foreach($britonFerryForecast as $forecast)
@if ($loop->first)
    <h3 class="mx-8 text-center text-3xl text-black pt-20">Briton Ferry Forecast for:</h3>

    <h3 class="mx-8 text-center text-black p-5">{{
        Carbon\Carbon::parse($forecast->forecast_date)->format('D d M Y'); }}</h3>
    <hr class="border-b-2 border-gray-600 my-4 mx-4">
    @endif


    <div class="p-3">
        <!--Graph Card-->
        <div class="bg-gray-500 border border-gray-800 rounded shadow">
            <div class="border-b border-white p-3">
                <h6 class="text-white">{{ Carbon\Carbon::parse($forecast->forecast_date)->format('H:i'); }}:
                </h6>
            </div>
            <div class="p-5">
                <h6 class="text-white">{{ $forecast->forecasted_mv }} kWh </h6>
            </div>
        </div>
        <!--/Graph Card-->
    </div>
@endforeach
@endsection