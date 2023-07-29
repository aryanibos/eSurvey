@extends('admin.appMain')
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
                    <h4 class="card-title">KUISIONER FAKTOR RESIKO TINGGI IBU HAMIL RSUD KRIOPANTING PAYUNG</h4>
                    <p class="card-text">
                        Isilah Data Kuisioner dengan benar!...
                    </p>
                </div>
                <div style="margin-left: 10px; margin-right: 10px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <form class="needs-validation" action="{{ route('form-quisioner.step2.store') }}"
                                    method="POST" novalidate>
                                    @csrf
                                    <h6 class="mb-4">Berilah tanda silang pada pilihan jawaban berikut ini:</h6>
                                    <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"
                                        readonly>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">1. Saat hamil anak pertama apakah usia ibu
                                                kurang
                                                dari atau sama dengan 20 tahun?</label>
                                            <input type="hidden" class="form-check-input" name="pertanyaan[0]"
                                                value="1. Saat hamil anak pertama apakah usia ibu kurang dari atau sama dengan 20 tahun?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input" name="status[0]"
                                                                value="ya" required>
                                                            <label class="form-check-label">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[0]"
                                                                value="tidak" required>
                                                            <label class="form-check-label">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom09">2. Saat hamil anak pertama apakah usia ibu lebih
                                                dari atau sama dengan 35 tahun?</label>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="hidden" class="form-check-input"
                                                                name="pertanyaan[1]"
                                                                value="2. Saat hamil anak pertama apakah usia ibu lebih dari atau sama dengan 35 tahun?"
                                                                readonly>

                                                            <input type="radio" class="form-check-input" name="status[1]"
                                                                value="ya" required>
                                                            <label class="form-check-label">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation5" name="status[1]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation5">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">3. Apakah ibu baru hamil anak pertama setelah
                                                menikah lebih dari atau sama dengan 4 tahun?</label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[2]"
                                                value="3. Apakah ibu baru hamil anak pertama setelah menikah lebih dari atau sama dengan 4 tahun?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[2]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[2]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">4. Apakahkehamilan sekarang berjarak lebih dari
                                                atau
                                                sama dengan 10 tahun setelah hamil
                                                sebelumnya?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[3]"
                                                value="4.	Apakahkehamilan sekarang berjarak lebih dari atau sama dengan 10 tahun setelah hamil sebelumnya?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[3]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[3]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">5. Apakah kehamilan sekarang berjarak kurang
                                                dari 2
                                                tahun setelah kehamilan sebelumnya?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[4]"
                                                value="5.	Apakah kehamilan sekarang berjarak lebih dari atau sama dengan 10 tahun setelah hamil sebelumnya?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[4]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[4]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">6. Apakah Ibu mempunyai 4 anak atau lebih?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[5]" value="6. Apakah Ibu mempunyai 4 anak atau lebih?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[5]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[5]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">7. Apakah saat hamil sekarang ibu berusia lebih
                                                dari atau sama dengan 35 tahun?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[6]"
                                                value="7. Apakah saat hamil sekarang ibu berusia lebih dari atau sama dengan 35 tahun?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[6]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[6]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">8. Apakah tinggi bdan Ibu kurang dari 145 cm?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[7]" value="8. Apakah tinggi bdan Ibu kurang dari 145 cm?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[7]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[7]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">9. Apakah Ibu pernah mengalami gagal hamil?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[8]" value="9. Apakah Ibu pernah mengalami gagal hamil?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[8]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[8]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">10. Apakah Ibu pernah melahirkan dengan:
                                            </label>
                                            <ul>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;A. vakum?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[9]"
                                                                    value="10. Apakah Ibu pernah melahirkan dengan:
                                                                    A. Vakum?"
                                                                    readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[9]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[9]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;B. Manual Plasenta?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[10]"
                                                                    value="B. Manual Plasenta?" readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[10]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[10]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;C. Diberi transfusi darah?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[11]"
                                                                    value="C. Diberi transfusi darah?" readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[11]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[11]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">11. Apakah Ibu pernah melahirkan dengan cara
                                                operasi sesar?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[12]"
                                                value="11. Apakah Ibu pernah melahirkan dengan cara operasi sesar?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[12]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[12]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">12. Apakah ibu pernah mempunyai riwayat
                                                penyakit:

                                            </label>
                                            <ul>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;A. Kurang darah?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[13]"
                                                                    value="12.	Apakah ibu pernah mempunyai riwayat penyakit:
                                                                    A. Kurang darah?"
                                                                    readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[13]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[13]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;B. Malaria?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[14]"
                                                                    value="B. Malaria?" readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[14]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[14]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;C. TBC Paru?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[15]"
                                                                    value="C. TBC Paru?" readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[15]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[15]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;D. Payah Jantung?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[16]"
                                                                    value="12.	Apakah ibu pernah mempunyai riwayat penyakit:
                                                                    D. Payah Jantung?"
                                                                    readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[16]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[16]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;E. Kencing manis?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[17]"
                                                                    value="E. Kencing manis?" readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[17]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[17]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    <label for="validationCustom08">
                                                        &nbsp;F. Kencing manis?
                                                    </label>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <input type="hidden" class="form-check-input"
                                                                    id="customControlValidation2" name="pertanyaan[18]"
                                                                    value="F. Kencing manis?" readonly>
                                                                <div class="form-check form-radio">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation2" name="status[18]"
                                                                        value="ya" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation2">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-radio"
                                                                    style="margin-left: 10px">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="customControlValidation3" name="status[18]"
                                                                        value="tidak" required>
                                                                    <label class="form-check-label"
                                                                        for="customControlValidation3">Tidak</label>
                                                                    <div class="invalid-feedback">Pilih salah Satu</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">13. Apakah Ibu sekarang mengalami bengkak pada
                                                muka, kaki dan tangan?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[19]"
                                                value="13.	Apakah Ibu sekarang mengalami bengkak pada muka, kaki dan tangan?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[19]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[19]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">14. Apakah tekanan darah ibu tinggi?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[20]" value="14.	Apakah tekanan darah ibu tinggi?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[20]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[20]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">15. Apakah ibu pernah mengalami hamil kembar
                                                atau lebih?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[21]"
                                                value="15.	Apakah ibu pernah mengalami hamil kembar atau lebih?" readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[21]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[21]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">16. Apakah ibu pernah hamil kembar air?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[22]" value="16.	Apakah ibu pernah hamil kembar air?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[22]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[22]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">17. Apakah janin yang Ibu kandung mati dalam
                                                kandungan?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[23]"
                                                value="17.	Apakah janin yang Ibu kandung mati dalam kandungan?" readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[23]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[23]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">18. Apakah ibu pernah hamil lebih bulan?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[24]" value="18.	Apakah ibu pernah hamil lebih bulan?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[24]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[24]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">19. Apakah sekarang kehamilan Ibu letak
                                                sungsang?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[25]"
                                                value="19.	Apakah sekarang kehamilan Ibu letak sungsang?" readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[25]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[25]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">120. Apakah kehamilan Ibu sekarang letak
                                                lintang?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[26]"
                                                value="20.	Apakah kehamilan Ibu sekarang letak lintang?" readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[26]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[26]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">21. Apakah pada kehamilan ini Ibu pernah
                                                mengalami perdarahan?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[27]"
                                                value="21.	Apakah pada kehamilan ini Ibu pernah mengalami perdarahan?"
                                                readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[27]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[27]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom08">Apakah Ibu pernah mengalami kejang selama
                                                hamil?
                                            </label>
                                            <input type="hidden" class="form-check-input" id="customControlValidation2"
                                                name="pertanyaan[28]"
                                                value="Apakah Ibu pernah mengalami kejang selama hamil?" readonly>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-radio">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation2" name="status[28]"
                                                                value="ya" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation2">Ya</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-radio " style="margin-left: 10px">
                                                            <input type="radio" class="form-check-input"
                                                                id="customControlValidation3" name="status[28]"
                                                                value="tidak" required>
                                                            <label class="form-check-label"
                                                                for="customControlValidation3">Tidak</label>
                                                            <div class="invalid-feedback">Pilih salah Satu</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <center>
                                        <button class="btn btn-primary" type="submit">Kirim</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
