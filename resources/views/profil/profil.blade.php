@extends('layout.master')
@section('title')
    Profil
@endsection

@section('profil', 'active')

@section('isi')

<div class="container center col-6 col-sm-6">
    <div class="card mt-5 m-auto">
        <div class="card-header text-center">
              <h2> PROFIL </h2>
        </div>
        <div class="card-body">
            <div class="row g-2 mt-1 ">
                <div class="col">
                    <div class="input-group mb-4 g-3 mt-3 ">
                        <input class="form-control" type="text" placeholder="Nip Petugas" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="input-group mb-4 g-3 ">
                        <input class="form-control" type="text" placeholder="Nama Petugas" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="input-group mb-4 g-3 ">
                        <input class="form-control" type="text" placeholder="Tempat/Tanggal Lahir" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="input-group mb-4 g-3 ">
                        <input class="form-control" type="text" placeholder="No HP Petugas" aria-label="Disabled input example" disabled>
                    </div>
                </div>
                <div class="col img-right">
                    <div class="card mx-2 mt-3 rounded" style="width: 14rem;">
                        <img src="https://plus.unsplash.com/premium_photo-1675129522693-bd62ffe5e015?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHByb2ZpbHxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" style="height: 220px" style="width: 150px" alt="...">
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
