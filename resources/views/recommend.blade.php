@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>オススメ雀荘の一覧です</h1>
                    </div>
                </div>
            
                @if (count($jansos) > 0)
                @foreach ($jansos as $janso)
                <div class="card my-0">
                    <div class="card-header justify-content-center my-0">
                        {{ $janso->jansoName }}
                    </div>
                    <div class="card-body my-0">
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('img/welcom.jpg') }}" alt="" class="w-100">
                                </div>
                                <div class="col d-flex align-items-center justify-content-center">
                                    {{ $janso->jansoTokutyo }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <canvas id="{{ $janso->id }}" class="my-5 w-100"></canvas>
                                </div>
                                <div class="col d-flex align-items-center justify-content-center">
                                    <p><img src="{{ asset('img/welcom.jpg') }}" alt="" class="w-100"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                @endforeach
                @endif

                @if (count($jansos) == 0)
                <div class="card">
                    <div class="card-body">
                        <h1>オススメ雀荘はありません</h1>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

@if (count($jansos) > 0)
@foreach ($jansos as $janso)
<script>
    let labels_{{ $janso->id }} = [
    '清潔さ',
    '雰囲気',
    'ゲーム代の安さ',
    'また行きたい度',
    ];
    let data_{{$janso->id}}= {
    labels: labels_{{ $janso->id }},
    datasets: [{
        label: '独断偏見雀荘評価',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132,0.5)',
        borderCapStyle:'butt',
        fill:false,
        data: [{{ $janso->seiketusa }}, {{ $janso->huniki }},  {{ $janso->gamedainoyasusa }},  {{ $janso->mataikitaido }}],
    }]
    };
    let config_{{ $janso->id }}= {
    type: 'radar',
    data: data_{{ $janso->id }},
    options: {
        responsive: true,
        r: {
            //グラフの最小値・最大値
            min: 0,
            max: 10,
        },
        scale: {
            ticks: {
                min: 0,
                max: 10,
                stepSize: 2, // ← 一番目の間隔を0.5ほどにしたい。他は１のままで
                display: false                              
            },
        },
    },
    };
    let myChart_{{$janso->id }} = new Chart(
        document.getElementById('{{ $janso->id }}'),
        config_{{ $janso->id }}
    );
</script>	
@endforeach
@endif

@endsection
