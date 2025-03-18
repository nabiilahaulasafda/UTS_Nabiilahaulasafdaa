@extends('layout.master')
@section('title')
    Jadwal
@endsection

@section('jadwal', 'active')

@section('isi')


    <div class="container rounded mt-5" style="width: 500px">
        <div class="card">
            {{-- <div class="card-header">
                <h2> </h2>
            </div> --}}
                <div class="card-body bg-dark rounded">
                    <div class="row text-white text-left">
                        <div class="col mt-3 mx-3">
                            <form class="p-3">
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Kode Jadwal</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">NIP Petugas</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nim Mahasiswa</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Mulai Magang</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Selesai Magang</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="col mt-3 mx-3">
                            <form class="p-3">
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Senin</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Selasa</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Rabu</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Kamis</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Jumat</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
