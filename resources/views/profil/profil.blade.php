@extends('layout.master')
@section('title')
    Profil
@endsection

@section('profil', 'active')

@section('isi')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container mt-5">
    <div class="card mx-auto shadow-sm" style="max-width: 500px; border-radius: 15px;">
        <div class="card-body text-center">
            <!-- Foto Profil -->
            <div class="bg-light rounded-circle p-3 d-inline-block">
                <i class="bi bi-person-circle" style="font-size: 60px;"></i>
            </div>
            <h4 class="mt-3">Person 1</h4>
            <p class="text-muted">Software Developer</p>

            <!-- Informasi Profil -->
            <ul class="list-group list-group-flush text-start">
                <li class="list-group-item"><i class="bi bi-envelope me-2"></i> person1@example.com</li>
                <li class="list-group-item"><i class="bi bi-phone me-2"></i> +62 812 3456 7890</li>
                <li class="list-group-item"><i class="bi bi-geo-alt me-2"></i> Jakarta, Indonesia</li>
                <li class="list-group-item"><i class="bi bi-calendar me-2"></i> Bergabung sejak 2022</li>
            </ul>

            <!-- Tombol Edit Profil -->
            <button class="btn btn-primary mt-3"><i class="bi bi-pencil-square me-1"></i> Edit Profil</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-sm p-3" style="width: 300px; border-radius: 15px;">
            <div class="text-center">
                <div class="bg-light rounded-circle p-3 d-inline-block">
                    <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                </div>
                <h5 class="mt-2">Person 1</h5>
                <p class="text-muted" style="font-size: 14px;">Sign in to get your passwords and more on all your devices</p>
                <button class="btn btn-primary w-100">Sign in to Chrome</button>
            </div>
            <hr>
            <ul class="list-unstyled ps-2">
                <li class="mb-2"><i class="bi bi-key me-2"></i> Passwords and autofill</li>
                <li class="mb-2"><i class="bi bi-pencil me-2"></i> Customize profile</li>
                <li class="mb-2"><i class="bi bi-person-plus me-2"></i> Add Chrome profile</li>
                <li class="mb-2"><i class="bi bi-person-lines-fill me-2"></i> Open Guest Profile</li>
                <li class="mb-2"><i class="bi bi-people me-2"></i> Manage Chrome profiles</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> --}}
    {{-- <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-sm p-3" style="width: 300px; border-radius: 15px;">
            <div class="text-center">
                <div class="bg-light rounded-circle p-3 d-inline-block">
                    <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                </div>
                <h5 class="mt-2">Person 1</h5>
                <p class="text-muted" style="font-size: 14px;">Sign in to get your passwords and more on all your devices</p>
                <button class="btn btn-primary w-100">Sign in to Chrome</button>
            </div>
            <hr>
            <ul class="list-unstyled ps-2">
                <li class="mb-2"><i class="bi bi-key me-2"></i> Passwords and autofill</li>
                <li class="mb-2"><i class="bi bi-pencil me-2"></i> Customize profile</li>
                <li class="mb-2"><i class="bi bi-person-plus me-2"></i> Add Chrome profile</li>
                <li class="mb-2"><i class="bi bi-person-lines-fill me-2"></i> Open Guest Profile</li>
                <li class="mb-2"><i class="bi bi-people me-2"></i> Manage Chrome profiles</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> --}}
</body>
</html>

{{-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center">PROFIL</h3>
                <div class="row align-items-center mt-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">NIP Petugas</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Petugas</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat/Tanggal Lahir</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No HP Petugas</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <img src="https://images.unsplash.com/photo-1733503711059-acde98cd7fdf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxfHx8ZW58MHx8fHx8" class="img-fluid rounded" style="width: 200px" style="height: 200px" alt="Foto Profil">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


{{--
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
                    <div class="card mx-2 mt-3" style="width: 14rem;">
                        <img src="https://plus.unsplash.com/premium_photo-1675129522693-bd62ffe5e015?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHByb2ZpbHxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" style="height: 220px" style="width: 150px" alt="...">
                      </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
