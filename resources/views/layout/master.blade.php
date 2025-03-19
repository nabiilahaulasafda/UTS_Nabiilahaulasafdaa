<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
    <title>@yield('title', 'Offcanvas Example')</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @yield('beranda')" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('pengajuan')" href="/pengajuan">Pengajuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('jadwal')" href="/jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('sertifikat')" href="/sertifikat">Sertifikat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('profil')" href="/profil" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasExampleLabel">User Profile</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="text-center mb-3">
                <div class="rounded-circle" style="background-color: #007bff; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                    C
                </div>
                <h6>cut putri</h6>
                <p>Sync and personalize Chrome across your devices</p>
                <button class="btn btn-success">Turn on sync...</button>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Passwords and autofill</li>
                <li class="list-group-item">Manage your Google Account</li>
                <li class="list-group-item">Customize profile</li>
                <li class="list-group-item">Google services settings</li>
                <li class="list-group-item">Sign out of Chrome</li>
            </ul>
            <h6 class="mt-4">Other Chrome profiles</h6>
            <ul class="list-group">
                <li class="list-group-item">CPutri</li>
                <li class="list-group-item">Putri</li>
                <li class="list-group-item">Add Chrome profile</li>
                <li class="list-group-item">Open Guest profile</li>
                <li class="list-group-item">Manage Chrome profiles</li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        @yield('isi')
    </div>

    <!-- Footer -->
    <footer class="fixed-bottom bg-dark-subtle text-dark py-2 mt-4 text-center">
        <div class="text-end">
            Copyright &copy; Nabiilah Aula Safda - 2025
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
