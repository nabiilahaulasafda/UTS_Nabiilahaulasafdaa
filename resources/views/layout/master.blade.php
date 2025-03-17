<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @yield('beranda')" aria-current="page" href="/beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @yield('pengajuan')" href="/pengajuan">Pengajuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @yield('jadwal')" href="/jadwal">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @yield('sertifikat')" href="/sertifikat">Sertifikat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @yield('profil')" href="/profil">Profil</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      @yield('isi')

      <footer class="fixed-bottom bg-dark-subtle text-dark py-2 mt-4 text-center">
        <div class="text-end">
            Copyright &copy; Nabiilah Aula Safda - 2025
        </div>
      </footer>

      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
