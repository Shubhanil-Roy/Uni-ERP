@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @foreach($chart1 as $chart)
                        <h1>{{ $chart->options['chart_title'] }}</h1>
                        {!! $chart->renderHtml() !!}


                            @section('javascript')
                                {!! $chart->renderChartJsLibrary() !!}
                                {!! $chart->renderJs() !!}
                            @endsection

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

