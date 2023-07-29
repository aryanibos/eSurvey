@extends('admin.appMain')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    {{-- munculkan kata kata selamat datang dalam waktu 10 second --}}
                    <h3 class="page-title">Selamat Datang Kembali @if (Auth::user()->role == 'a')
                            {{ Auth::user()->name }}<small>(Admin)</small>, Semoga Harimu Menyenangkan!....
                        @endif
                    </h3>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Data Ibu Hamil</h6>
                            <h3>
                                {{ $total_data }}
                            </h3>
                        </div>
                        <div class="db-icon">
                            <img src="{{ asset('template') }}/assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Total Kuisioner</h6>
                            <h3>{{ $total_quisioner }}</h3>
                        </div>
                        <div class="db-icon">
                            <img src="{{ asset('template') }}/assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">

            <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Data Ibu Hamil </h5>
                        </div>
                        <div class="col-6">
                            <ul class="chart-list-out">
                                <li><span class="circle-blue"></span>Responden Ya</li>
                                <li><span class="circle-green"></span>Responden Tidak</li>
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apexcharts-area"></div>
                </div>
            </div>

        </div>
    </div>
@endsection
