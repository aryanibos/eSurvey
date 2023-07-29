@extends('admin.appMain')

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">List Data Quisioner</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">List Data Quisioner</li>
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
                                <h3 class="page-title">List Data Quisioner</h3>
                            </div>
                        </div>
                    </div>

                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        <thead class="student-thread datatable ">
                            <tr>
                                <th>No</th>
                                <th>Nama Ibu</th>
                                <th>Pertanyaan</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ Str::limit($item->pertanyaan, 30) }}</td>
                                    <td>{{ Str::limit($item->status, 20, '...') }}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{ route('list-quisioner.show', $item['id']) }}"
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
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
