@extends('admin.appMain')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Detail Data ibu Hamil</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('ibu-hamil') }}">List Ibu Hamil</a></li>
                        <li class="breadcrumb-item active">Detail Data ibu Hamil</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-lg-4">
                    <div class="student-personals-grp">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-detail">
                                    <h4>Detail Data Ibu Hamil :</h4>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-user"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Nama Ibu</h4>
                                        <h5>{{ $IbuHamil->nama_ibu }}</h5>
                                    </div>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <img src="{{ asset('template') }}/assets/img/icons/buliding-icon.svg"
                                            alt="">
                                    </div>
                                    <div class="views-personal">
                                        <h4>Pekerjaan </h4>
                                        <h5>{{ $IbuHamil->pekerjaan }}</h5>
                                    </div>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-phone-call"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Nomer Telepon</h4>
                                        <h5>{{ $IbuHamil->no_hp }}</h5>
                                    </div>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-user"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Jenis Kelamin</h4>
                                        <h5>Perempuan</h5>
                                    </div>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-calendar"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Tanggal Lahir</h4>
                                        <h5>
                                            @php
                                                $date = date_create($IbuHamil->tanggal_lahir);
                                                echo date_format($date, 'd-m-Y');
                                            @endphp

                                        </h5>
                                    </div>
                                </div>
                                <div class="personal-activity">
                                    <div class="personal-icons">
                                        <i class="feather-italic"></i>
                                    </div>
                                    <div class="views-personal">
                                        <h4>Pendidikan</h4>
                                        <h5>{{ $IbuHamil->pendidikan }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="student-personals-grp">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="heading-detail">
                                    <h4>Tentang Ibu Hamil</h4>
                                </div>
                                <div class="hello-park">
                                    <h5>Alamat</h5>
                                    <p>{{ $IbuHamil->alamat }}</p><br>
                                    <h6>Hamil Ke-<span style="color: red">{{ $IbuHamil->hamil_ke }}</span> dan Untuk Haid
                                        Terakhirnya Pada Tanggal
                                        @php
                                            $date = date_create($IbuHamil->haid_terakhir);
                                            echo '<span style="color: red">' . date_format($date, 'd-m-Y') . '</span>';
                                        @endphp</h6>
                                    <h6>Tekanan Darah : <span style="color: red">{{ $IbuHamil->tekanan_darah }} </span>
                                        mmhg</h6>
                                    <h6>Apakah Ibu Hamil Bersedia Mengikuti Responden? <br>
                                        Jawaban : @if ($IbuHamil->responden == 'ya')
                                            <span style="color: green">Bersedia</span>
                                        @else
                                            <span style="color: red">Tidak Bersedia</span>
                                        @endif
                                    </h6>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <center>
                                        <h4>Tanda Tangan</h4>
                                        <img src="/upload/{{ $IbuHamil->tanda_tangan }}" alt="" width="80%"
                                            class="img-fluid img-thumbnail">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
