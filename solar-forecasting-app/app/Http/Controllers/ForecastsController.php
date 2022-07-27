<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\BritonFerryForecast;
use App\Models\PlantasiaForecast;
use Illuminate\Http\Request;

class ForecastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateToGet = new DateTime("2020-11-30");
        $currentBritonForecast = BritonFerryForecast::whereDate('forecast_date', $dateToGet)->latest('forecast_date')->first();

        return view('forecasts.forecast', ['britonForecast' => $currentBritonForecast]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dateToGet = new DateTime("2020-11-30");
        if($id == 'britonFerry'){
            $dailyBritonFerryForecast = BritonFerryForecast::whereDate('forecast_date', $dateToGet)->get();
            return  view('forecasts.BritonFerry', ['britonFerryForecast' =>  $dailyBritonFerryForecast]);
        } elseif($id == 'plantasia'){
            $dailyPlantasiaForecast = PlantasiaForecast::whereDate('forecast_date', $dateToGet)->get();
            return  view('forecasts.plantasia', ['plantasiaForecast' => $dailyPlantasiaForecast]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
