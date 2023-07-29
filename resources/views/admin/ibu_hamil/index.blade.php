@extends('admin.appMain')

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Data Data Ibu Hamil</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Ibu Hamil</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Data Ibu Hamil</h3>
                            </div>
                        </div>
                    </div>

                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        <thead class="student-thread datatable ">
                            <tr>
                                <th>No</th>
                                <th>Nama Ibu</th>
                                <th>Nomer HP</th>
                                <th>Alamat</th>
                                <th>Bersedia/Tidak</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($IbuHamils as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama_ibu }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ Str::limit($item->alamat, 30) }}</td>
                                    <td>{{ $item->responden }}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{ route('ibu-hamil.show', $item['id']) }}"
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="{{ route('ibu-hamil.edit', $item['id']) }}"
                                                class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('template') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template') }}/assets/plugins/datatables/datatables.min.js"></script>
@endsection
