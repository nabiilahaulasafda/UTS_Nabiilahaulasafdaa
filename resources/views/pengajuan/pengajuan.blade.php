@extends('layout.master')
@section('title')
    Pengajuan
@endsection

@section('pengajuan', 'active')

@section('isi')


<div class="container center col-8 col-sm-12 mt-5">
    <div class="card" style="border: none">
        <div class="card-header gradient-nav">
              <h2 class=" float-start"> DAFTAR PENGAJUAN </h2>
              <span class="float-end btn btn-primary text-end btn-sm" type="button" id="button-addon2">
                <a class="nav-link" href="/add"> <i class="fa-solid fa-user-plus"></i> Add </a>

                </span>
        </div>
        <div class="card-body">
            <div class="row g-3 ">
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 1" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 2" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"> <a class="nav-link" href="/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 3" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 4" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 5" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 6" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/open"> <i class="fa-solid fa-folder-open"></i> </a></button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark" type="text" placeholder="User 7" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/open"> <i class="fa-solid fa-folder-open"></i> </a></button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/editp"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



{{-- <div class="col-md-6">
    <input class="form-control" type="text" placeholder="User 2" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Open</button>
</div>
<div class="col-md-6 ">
    <input class="form-control" type="text" placeholder="User 3" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Open</button>
</div>
<div class="col-md-6 ">
    <input class="form-control" type="text" placeholder="User 4" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Open</button>
</div>
<div class="col-md-6 ">
    <input class="form-control" type="text" placeholder="User 5" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Open</button>
</div>
<div class="col-md-6 ">
    <input class="form-control" type="text" placeholder="User 6" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Open</button>
</div> --}}
