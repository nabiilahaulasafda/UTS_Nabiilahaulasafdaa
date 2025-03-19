<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
    <title>Edit</title>
</head>
<body>
    <div class="container center col-6 col-sm-4">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> USER X </h2>
            </div>
            <div class="card-body">
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIM Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Tempat/Tanggal Lahir</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">No HP Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Alamat Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Asal Universitas</label>
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/pengajuan">  Tutup  </a> </button>
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><a class="nav-link" href="/pengajuan">  Submit </a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
