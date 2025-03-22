

@extends('layout.master')
@section('title')
    Beranda
@endsection

@section('beranda', 'active')

@section('isi')

    <div class="container">
        <h4 class="mb-3">Laporan Magang</h4>

        <!-- Form Filter -->
        <form class="row g-3">
            <div class="col-md-4">
                <select class="form-select">
                    <option selected>Pilih Bulan</option>
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select">
                    <option selected>Pilih Tahun</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <!-- Tabel Data -->
        <h5 class="mt-4">Laporan Bulan April Tahun 2021</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nim Mahasiswa</th>
                        <th>Nama Mahasiswa</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Universitas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>1617712533</td>
                        <td>user user</td>
                        <td>08314248468</td>
                        <td>abfouqef@gmail.com</td>
                        <td>16/maret/2014</td>
                        <td>17/mei/2014</td>
                        <td>Unsyiah</td>
                    </tr>
                </tbody>
                <tfoot class="table-secondary">
                </tfoot>
            </table>
        </div>

        <!-- Tombol Kembali -->
        <a href="#" class="btn btn-secondary mt-3">Kembali</a>
    </div>

@endsection
