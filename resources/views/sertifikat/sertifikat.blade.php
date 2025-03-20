@extends('layout.master')
@section('title')
    Sertifikat
@endsection

@section('sertifikat', 'active')

@section('isi')

<div class="container center col-6 col-sm-6">
    <div class="card" style="border: none">
        <div class="card-header gradient-nav">
              <h2 class="float-start"> DATA SERTIFIKAT </h2>
              <span class="float-end btn btn-primary text-end btn-sm" type="button" id="button-addon2">
                <a class="nav-link" href="/upload"> <i class="fa-solid fa-user-plus"> </i> Add </a>
            </span>
        </div>
        <div class="card-body">
            <div class="row g-3 ">
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 1" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/edits"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 2" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"> <a class="nav-link" href="/edits"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 3" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/edits"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 4" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/edits"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 5" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/edits"> <i class="fa-solid fa-pen"></i> </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 6" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/edits"> <i class="fa-solid fa-pen"></i> </a></button>
                </div>
                <div class="input-group mb-3 g-3">
                    <input class="form-control text-dark border border-dark" type="text" placeholder="User 7" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/opens"> <i class="fa-solid fa-eye"></i> </a> </button>
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link" href="/edits"> <i class="fa-solid fa-pen"></i> </a></button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
