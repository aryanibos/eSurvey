@extends('admin.appMain')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
        .kbw-signature {
            width: 100%;
            height: 180px;
        }

        #signaturePad canvas {
            width: 100% !important;
            height: auto;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">EDIT DATA KUISIONER FAKTOR RESIKO TINGGI IBU HAMIL RSUD KRIOPANTING PAYUNG</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <form class="needs-validation" action="{{ route('ibu-hamil.update', $IbuHamil['id']) }}"
                                method="POST" novalidate>
                                @method('PUT')
                                @csrf
                                <h5 class="mb-4">Identitas Ibu</h5>
                                <div class="row">
                                    <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"
                                        readonly>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Nama Ibu</label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            value="{{ $IbuHamil->nama_ibu }}" name="nama_ibu" required>
                                        <div class="valid-feedback">
                                            Nama Ibu Sudah di Isi!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Tanggal Lahir Ibu</label>
                                        <input type="date" value="{{ $IbuHamil->tgl_lahir }}" class="form-control"
                                            id="validationCustom02" name="tgl_lahir" required>
                                        <div class="valid-feedback">
                                            Tanggal Lahir Sudah di Isi!
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Alamat Rumah</label>
                                        <textarea rows="5" cols="5" name="alamat" class="form-control">{{ $IbuHamil->alamat }}</textarea>
                                        <div class="invalid-feedback">
                                            Alamat Rumah Sudah di Isi!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Pendidikan Terakhir Ibu</label>
                                        <select class="form-select" name="pendidikan" required>
                                            <option value="SD" {{ $IbuHamil->pendidikan == 'SD' ? 'selected' : '' }}>SD
                                            </option>
                                            <option value="SMP" {{ $IbuHamil->pendidikan == 'SMP' ? 'selected' : '' }}>
                                                SMP</option>
                                            <option value="SMK/SMU/MU"
                                                {{ $IbuHamil->pendidikan == 'SMK/SMU/MU' ? 'selected' : '' }}>SMK/SMU/MU
                                            </option>
                                            <option value="D1" {{ $IbuHamil->pendidikan == 'D1' ? 'selected' : '' }}>D1
                                            </option>
                                            <option value="D2" {{ $IbuHamil->pendidikan == 'D2' ? 'selected' : '' }}>D2
                                            </option>
                                            <option value="D3" {{ $IbuHamil->pendidikan == 'D3' ? 'selected' : '' }}>D3
                                            </option>
                                            <option value="D4/S1"
                                                {{ $IbuHamil->pendidikan == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
                                            <option value="S2" {{ $IbuHamil->pendidikan == 'S2' ? 'selected' : '' }}>S2
                                            </option>
                                            <option value="S3" {{ $IbuHamil->pendidikan == 'S3' ? 'selected' : '' }}>S3
                                            </option>
                                            <option value="Tidak Ada"
                                                {{ $IbuHamil->pendidikan == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada
                                            </option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Pendidikan Terakhir Ibu Sudah di Isi!
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom05">Pekerjaan</label>
                                        <input type="text" class="form-control" id="validationCustom05"
                                            value="{{ $IbuHamil->pekerjaan }}" name="pekerjaan" required>
                                        <div class="valid-feedback">
                                            Pekerjaan Sudah di Isi!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom06">Nomer Hp Ibu</label>
                                        <input type="text" class="form-control" value="{{ $IbuHamil->no_hp }}"
                                            id="validationCustom06" name="no_hp" required>
                                        <div class="valid-feedback">
                                            Nomer Hp Sudah di Isi!
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom07">Hamil Ke</label>
                                        <input type="text" class="form-control" id="validationCustom07"
                                            value="{{ $IbuHamil->hamil_ke }}" name="hamil_ke" required>
                                        <div class="valid-feedback">
                                            Hamil Ke Sudah di Isi!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom08">Haid Terakhir Tanggal</label>
                                        <input type="date" class="form-control" value="{{ $IbuHamil->haid_terakhir }}"
                                            id="validationCustom08" name="haid_terakhir" required>
                                        <div class="valid-feedback">
                                            Haid Terakhir Tanggal Sudah di Isi!
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-3">
                                        <label for="validationCustom07">Tekanan Darah</label>
                                        <input type="text" class="form-control" id="validationCustom07"
                                            value="{{ $IbuHamil->tekanan_darah }}" name="tekanan_darah" required>
                                        <div class="valid-feedback">
                                            Tekanan Darah Sudah di Isi!
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 mb-3">
                                        <h5 class="mt-5">mmhg</h5>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom08">Apakah Ibu Bersedia Menjadi Responden?</label>
                                        <div class="form-check form-radio">
                                            <input type="radio" class="form-check-input" id="customControlValidation2"
                                                name="responden" value="ya" required
                                                {{ $IbuHamil->responden == 'ya' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="customControlValidation2">Ya</label>
                                        </div>
                                        <div class="form-check form-radio mb-3">
                                            <input type="radio" class="form-check-input" id="customControlValidation3"
                                                name="responden" value="tidak" required
                                                {{ $IbuHamil->responden == 'ya' ? 'tidak' : '' }}>
                                            <label class="form-check-label" for="customControlValidation3">Tidak</label>
                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div id="signaturePad"></div>
                                        <br />
                                        <button id="clear" class="btn btn-danger btn-sm">Hapus Tanda Tangan</button>
                                        <textarea id="signature64" name="tanda_tangan" style="display: none"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Next</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <script type="text/javascript">
        var signaturePad = $('#signaturePad').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            signaturePad.signature('clear');
            $("#signature64").val('');
        });
    </script>
@endsection
