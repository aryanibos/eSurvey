@extends('admin.appMain')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title"></h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-quisioner') }}">List Kuisioner</a></li>
                        <li class="breadcrumb-item active">List Detail Data Kuisioner</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="student-personals-grp">
                        <div class="heading-detail">
                            <h4>List Detail Data Kuisioner</h4>
                        </div>
                        <div class="card mb-0">
                            <div class="card-body">

                                <div class="hello-park">
                                    <table>
                                        <tr>
                                            <td>
                                                <h5>Pertanyaan Dari Ibu <span
                                                        style="color: red">{{ $show->user->name }}</span>
                                                </h5>
                                            </td>
                                            <td>
                                                <h5>Jawaban</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>1. Saat hamil anak pertama apakah usia ibu kurang dari atau sama dengan
                                                    20 tahun?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[0] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>2. Saat hamil anak pertama apakah usia ibu lebih dari atau sama dengan
                                                    35 tahun?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[1] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>3. Apakah ibu baru hamil anak pertama setelah menikah lebih dari atau
                                                    sama dengan 4 tahun?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[2] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>4. Apakahkehamilan sekarang berjarak lebih dari atau sama dengan 10
                                                    tahun setelah hamil sebelumnya?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[3] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>5. Apakah kehamilan sekarang berjarak kurang dari 2 tahun setelah
                                                    kehamilan sebelumnya?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[4] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>6. Apakah Ibu mempunyai 4 anak atau lebih?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[5] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>7. Apakah saat hamil sekarang ibu berusia lebih dari atau sama dengan 35
                                                    tahun?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[6] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>8. Apakah tinggi bdan Ibu kurang dari 145 cm?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[7] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>9. Apakah Ibu pernah mengalami gagal hamil?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[8] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>10. Apakah Ibu pernah melahirkan dengan:</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A. Vakum?</h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[9] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B. Manual Plasenta?</h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[10] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C. Diberi transfusi darah?
                                                </h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[11] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>11. Apakah Ibu pernah melahirkan dengan cara operasi sesar?</h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[12] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>12. Apakah ibu pernah mempunyai riwayat penyakit:</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A. Kurang darah?</h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[13] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B. Malaria?</h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[14] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C. TBC Paru?
                                                </h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[15] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D. Payah Jantung?
                                                </h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[16] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E. Kencing manis?
                                                </h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[17] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F. Penyakit menular seksual?
                                                </h6>
                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[18] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>13. Apakah Ibu sekarang mengalami bengkak pada muka, kaki dan tangan?
                                                </h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[19] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>14. Apakah tekanan darah ibu tinggi?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[20] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>15. Apakah ibu pernah mengalami hamil kembar atau lebih?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[21] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>16. Apakah ibu pernah hamil kembar air?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[22] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>17. Apakah janin yang Ibu kandung mati dalam kandungan?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[23] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>18. Apakah ibu pernah hamil lebih bulan?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[24] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>19. Apakah sekarang kehamilan Ibu letak sungsang?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[25] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>20. Apakah kehamilan Ibu sekarang letak lintang?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[26] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>21. Apakah pada kehamilan ini Ibu pernah mengalami perdarahan?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[27] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Apakah Ibu pernah mengalami kejang selama hamil?</h6>

                                            </td>
                                            <td>
                                                <center>
                                                    @if ($ubah_status_menjadi_array[28] == 'ya')
                                                        <h6 style="color: green; margin-left: 3px">Ya</h6>
                                                    @else
                                                        <h6 style="color: red">Tidak</h6>
                                                    @endif
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    <p>{{ $show->alamat }}</p><br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
