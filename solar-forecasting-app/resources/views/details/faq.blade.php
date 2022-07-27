@extends('layouts.default')

@section('page-content')
<div class="static top-20 pt-10">
    <div class="pt-20"></div>
    <div>
        <div>
            <section class="text-gray-700">
                <div class="container px-5 mx-auto">
                    <div class="text-center mb-20">
                        <h3 class="mx-8 text-center text-3xl text-black">FAQ</h3>

                        <hr class="border-gray-600 my-8 ">

                        <p class="text-center">The most asked questions about how the project works and what it can do
                            for you. </p>

                    </div>
                        <details class="mb-4 p-4">
                            <summary class="font-semibold text-center bg-gray-200 rounded-md py-2 px-4">
                                How accurate are the forecasts?
                            </summary>

                            <span>
                                The forecasts aim for 80% accuracy. However, the current accuracy of the the model
                                used for forecasting
                                achieves 70%~ accuracy.
                            </span>
                        </details>
                        <details class="mb-4 p-4">
                            <summary class="font-semibold text-center bg-gray-200 rounded-md py-2 px-4">
                                How far into the future do the forecasts go?
                            </summary>

                            <span>
                                Currently our forecasts are single-step. This means that we currently forecast 1
                                forecast ahead.
                                We currently complete our forecasts for every 3 hours. These are automatically
                                updated, when the
                                current forecast time passes.
                            </span>
                        </details>
                        <details class="mb-4 p-4">
                            <summary class="font-semibold text-center bg-gray-200 rounded-md py-2 px-4">
                                How many forecast locations are there?
                            </summary>

                            <span>
                                hello qui labore cillum culpa in sunt quis sint veniam.
                                Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
                                minim velit nostrud pariatur culpa magna in aute.
                            </span>
                    </div>

            </section>
        </div>
    </div>
</div>
</div>

@endsection