@extends('layout.master')
@section('title')
    Jadwal
@endsection

@section('jadwal', 'active')

@section('isi')


<div class="container center col-6 col-sm-4">
    <div class="card mt-5">
        <div class="card-header">
              <h2 class="float-start"> DAFTAR JADWAL </h2>
              <span class="float-end btn btn-outline-secondary text-end btn-sm" type="button" id="button-addon2">
                <a class="nav-link" href="/tambah"> <i class="fa-solid fa-user-plus"> </i> + Add </a>
                </span>
        </div>
        <div class="card-body">
            <div class="row g-3 ">
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 1" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link"  href="/edit"> Edit </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 2" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/edit"> Edit </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 3" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link" href="/edit"> Edit </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 4" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link" href="/edit"> Edit </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 5" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link" href="/edit"> Edit </a> </button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 6" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link" href="/edit"> Edit </a></button>
                </div>
                <div class="input-group mb-3 g-3 ">
                    <input class="form-control" type="text" placeholder="User 7" aria-label="Disabled input example" disabled aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link" href="/edit"> Edit </a></button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
