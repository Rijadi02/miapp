<x-admin-master>
    @section('content')
        <style>
            .border-left-primary {
                border-left: 0.25rem solid #4e73df !important;
            }

            .border-left-success {
                border-left: 0.25rem solid #1cc88a !important;
            }

            .border-left-info {
                border-left: 0.25rem solid #36b9cc !important;
            }

            .border-left-danger {
                border-left: 0.25rem solid #e74a3b !important;
            }

            .text-gray-800 {
                color: #5a5c69 !important;
            }

            .text-gray-300 {
                color: #dddfeb !important;
            }

            .shadow {
                box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;
            }
        </style>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5">
            <div class="container-xl px-">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-chart-pie"></i></div>
                                Dashboard
                            </h1>
                            <div class="page-header-subtitle">Statistikat e përgjithshme të platformës</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-xl px-4 mt-n10">

            <div class="row">
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Blogjet</div>
                                    <div class="text-lg font-weight-bold">{{ $stats['blogs_count'] }}</div>
                                </div>
                                <i class="fas fa-newspaper fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('blog.index') }}">Shiko detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-warning text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Shikimet e Blogjeve</div>
                                    <div class="text-lg font-weight-bold">{{ number_format($stats['total_blog_views']) }}
                                    </div>
                                </div>
                                <i class="fas fa-eye fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('blog.index') }}">Shiko detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Pyetjet</div>
                                    <div class="text-lg font-weight-bold">{{ $stats['questions_count'] }}</div>
                                </div>
                                <i class="fas fa-question fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('index.with.answer') }}">Shiko
                                detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Notifikimet</div>
                                    <div class="text-lg font-weight-bold">{{ $stats['notifications_count'] }}</div>
                                </div>
                                <i class="fas fa-bell fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('notification.index') }}">Shiko
                                detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-info text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Reklamat</div>
                                    <div class="text-lg font-weight-bold">{{ $stats['promotions_count'] }}</div>
                                </div>
                                <i class="fas fa-ad fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('promotion.index') }}">Shiko
                                detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-secondary text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Recituset</div>
                                    <div class="text-lg font-weight-bold">{{ $stats['recitations_count'] }}</div>
                                </div>
                                <i class="fas fa-volume-up fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('reciter.index') }}">Shiko
                                detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card bg-dark text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Përmbajtjet</div>
                                    <div class="text-lg font-weight-bold">{{ $stats['contents_count'] }}</div>
                                </div>
                                <i class="fas fa-book fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('category.index') }}">Shiko
                                detajet</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="card text-white h-100"
                        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Shikime Mesatare</div>
                                    <div class="text-lg font-weight-bold">
                                        {{ number_format($stats['average_views_per_blog']) }}</div>
                                </div>
                                <i class="fas fa-chart-bar fa-2x text-white-50"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between"
                            style="background-color: rgba(0,0,0,0.1);">
                            <a class="small text-white stretched-link" href="{{ route('blog.index') }}">Për blog</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="fas fa-language mr-1"></i>
                            Përkthimet
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Përkthyesi</th>
                                            <th>Emri i përkthimit</th>
                                            <th>Numri i shkronjave</th>
                                            <th>Koha e fundit e ruajtjes</th>
                                            <th>Vizito</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($translations as $translation)
                                            <tr>
                                                <td>{{ $translation['translator'] }}</td>
                                                <td>{{ $translation['title'] }}</td>
                                                <td>{{ number_format($translation['letter_count']) }}</td>
                                                <td>{{ $translation['last_saved'] ? $translation['last_saved']->format('d/m/Y H:i:s') : 'N/A' }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('translation.workspace', $translation['code']) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Përkthimi
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">Nuk ka përkthime ende.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($latestMedia)
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-chart-line mr-1"></i>
                                Ndjekësit në Rrjetet Sociale - Rritja në kohë
                            </div>
                            <div class="card-body">
                                <div style="position: relative; height: 400px; width: 100%;">
                                    <canvas id="socialMediaChart"></canvas>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Të dhënat më të fundit: {{ $latestMedia->created_at->format('d/m/Y H:i') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Instagram
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ number_format($latestMedia->instagram) }}</div>
                                        @if ($growthRates)
                                            <div class="mt-1">
                                                @if ($growthRates['instagram'] > 0)
                                                    <small class="text-success"><i class="fas fa-arrow-up"></i>
                                                        {{ $growthRates['instagram'] }}%</small>
                                                @elseif($growthRates['instagram'] < 0)
                                                    <small class="text-danger"><i class="fas fa-arrow-down"></i>
                                                        {{ abs($growthRates['instagram']) }}%</small>
                                                @else
                                                    <small class="text-muted"><i class="fas fa-minus"></i> 0%</small>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <i class="fab fa-instagram fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">YouTube</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ number_format($latestMedia->youtube) }}</div>
                                        @if ($growthRates)
                                            <div class="mt-1">
                                                @if ($growthRates['youtube'] > 0)
                                                    <small class="text-success"><i class="fas fa-arrow-up"></i>
                                                        {{ $growthRates['youtube'] }}%</small>
                                                @elseif($growthRates['youtube'] < 0)
                                                    <small class="text-danger"><i class="fas fa-arrow-down"></i>
                                                        {{ abs($growthRates['youtube']) }}%</small>
                                                @else
                                                    <small class="text-muted"><i class="fas fa-minus"></i> 0%</small>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <i class="fab fa-youtube fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Telegram</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ number_format($latestMedia->telegram) }}</div>
                                        @if ($growthRates)
                                            <div class="mt-1">
                                                @if ($growthRates['telegram'] > 0)
                                                    <small class="text-success"><i class="fas fa-arrow-up"></i>
                                                        {{ $growthRates['telegram'] }}%</small>
                                                @elseif($growthRates['telegram'] < 0)
                                                    <small class="text-danger"><i class="fas fa-arrow-down"></i>
                                                        {{ abs($growthRates['telegram']) }}%</small>
                                                @else
                                                    <small class="text-muted"><i class="fas fa-minus"></i> 0%</small>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <i class="fab fa-telegram fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Facebook
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ number_format($latestMedia->facebook) }}</div>
                                        @if ($growthRates)
                                            <div class="mt-1">
                                                @if ($growthRates['facebook'] > 0)
                                                    <small class="text-success"><i class="fas fa-arrow-up"></i>
                                                        {{ $growthRates['facebook'] }}%</small>
                                                @elseif($growthRates['facebook'] < 0)
                                                    <small class="text-danger"><i class="fas fa-arrow-down"></i>
                                                        {{ abs($growthRates['facebook']) }}%</small>
                                                @else
                                                    <small class="text-muted"><i class="fas fa-minus"></i> 0%</small>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <i class="fab fa-facebook fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var ctx = document.getElementById('socialMediaChart');
                if (ctx) {
                    ctx = ctx.getContext('2d');

                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: {!! json_encode($chartData['labels']) !!},
                            datasets: [{
                                    label: "Instagram",
                                    borderColor: "#E1306C",
                                    backgroundColor: "rgba(225, 48, 108, 0.1)",
                                    borderWidth: 2,
                                    pointRadius: 3,
                                    pointHoverRadius: 5,
                                    data: {!! json_encode($chartData['instagram']) !!},
                                    fill: false,
                                    lineTension: 0.1
                                },
                                {
                                    label: "YouTube",
                                    borderColor: "#FF0000",
                                    backgroundColor: "rgba(255, 0, 0, 0.1)",
                                    borderWidth: 2,
                                    pointRadius: 3,
                                    pointHoverRadius: 5,
                                    data: {!! json_encode($chartData['youtube']) !!},
                                    fill: false,
                                    lineTension: 0.1
                                },
                                {
                                    label: "Telegram",
                                    borderColor: "#0088cc",
                                    backgroundColor: "rgba(0, 136, 204, 0.1)",
                                    borderWidth: 2,
                                    pointRadius: 3,
                                    pointHoverRadius: 5,
                                    data: {!! json_encode($chartData['telegram']) !!},
                                    fill: false,
                                    lineTension: 0.1
                                },
                                {
                                    label: "Facebook",
                                    borderColor: "#1877f2",
                                    backgroundColor: "rgba(24, 119, 242, 0.1)",
                                    borderWidth: 2,
                                    pointRadius: 3,
                                    pointHoverRadius: 5,
                                    data: {!! json_encode($chartData['facebook']) !!},
                                    fill: false,
                                    lineTension: 0.1
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    ticks: {
                                        beginAtZero: false,
                                        callback: function(value) {
                                            return value.toLocaleString();
                                        }
                                    },
                                    gridLines: {
                                        color: "rgba(0, 0, 0, 0.05)"
                                    }
                                }]
                            },
                            legend: {
                                display: true,
                                position: 'bottom'
                            },
                            tooltips: {
                                mode: 'index',
                                intersect: false,
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                        return label + ': ' + tooltipItem.yLabel.toLocaleString();
                                    }
                                }
                            },
                            animation: {
                                duration: 1000
                            }
                        }
                    });
                }
            });
        </script>

    @endsection

</x-admin-master>
