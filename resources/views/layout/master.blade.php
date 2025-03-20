<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
    <title>Profil Pop-up Kecil</title>

    <style>
         /* Styling untuk background dengan gambar */
         .gradient-nav {
            background: linear-gradient(to right, #5B0000, #C06D6D); /* Warna gradasi */
            color: white;
            border: black;
        }

         .hero {
            position: relative;
            background: url('{{asset('/image/y.jpg')}}') no-repeat center center/cover;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 1, 0.5); /* Overlay untuk meningkatkan kontras */
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        /* Styling pop-up */
        .profile-popup {
            position: absolute;
            top: 50px;
            right: 20px;
            width: 250px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 15px;
            display: none;
            z-index: 1000;
        }

        .profile-popup.show {
            display: block;
        }

        /* Styling avatar */
        .profile-avatar {
            background-color: #007bff;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 22px;
            border-radius: 50%;
            margin: 0 auto;
        }

        /* Responsif: di layar kecil muncul di bawah navbar */
        @media (max-width: 768px) {
            .profile-popup {
                right: auto;
                left: 50%;
                transform: translateX(-50%);
                top: 60px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg gradient-nav">
    <div class="container-fluid">
      <a class="navbar-brand text-white navbar-collapse justify-content-start" href="#">
        <img src="/image/lgoo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
        Dewan Perwakilan Rakyat Aceh
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @yield('beranda') text-white" aria-current="page" href="/beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('pengajuan') text-white" href="/pengajuan">Pengajuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('jadwal') text-white" href="/jadwal">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('sertifikat') text-white" href="/sertifikat">Sertifikat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('profil') text-white" href="#" id="profileBtn">Profil</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="hero">
    <div class="hero-content">
  @yield('isi')
    </div>
</div>

  <footer class="fixed-bottom bg-dark-subtle text-dark py-2 mt-4 text-center">
    <div class="text-end">
        Copyright &copy; Nabiilah Aula Safda - 2025
    </div>
  </footer>

<!-- Pop-up Profil -->
@section('profil', 'active')
<div class="profile-popup" id="profilePopup">
    <div class="text-center">
        <div class="profile-avatar bg-dark">A</div>
        <h6 class="mt-2">ADMIN</h6>
        <p class="small text-muted">Sync and personalize Chrome across your devices</p>
        <button class="btn btn-success btn-sm">Turn on sync...</button>
        <hr>
        <ul class="list-unstyled text-start small mx-3">
            <li class="py-1"><i class="fa-solid fa-key"></i> Passwords </li>
            <li class="py-1"><i class="fa-solid fa-gear"></i> Manage your Profile</li>
            <li class="py-1"><i class="fa-solid fa-user-plus"> </i>  Add New Profile</li>
            <li class="py-1"><i class="fa-solid fa-right-from-bracket"></i> Sign out </li>
        </ul>
    </div>
</div>

<!-- Hero Section -->
{{-- <div class="hero">
    <div class="hero-content">
        <h1>Selamat Datang di Website Resmi</h1>
        <p>Dewan Perwakilan Rakyat Aceh</p>
    </div>
</div> --}}

<!-- Footer -->
<footer class="fixed-bottom bg-dark-subtle text-dark py-2 text-center gradient-nav">
    <div class="text-start text-white">
        Copyright &copy; Nabiilah Aula Safda - 2025
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const profileBtn = document.getElementById("profileBtn");
        const profilePopup = document.getElementById("profilePopup");

        profileBtn.addEventListener("click", function(event) {
            event.preventDefault();
            profilePopup.classList.toggle("show");
        });

        // Tutup popup jika klik di luar
        document.addEventListener("click", function(event) {
            if (!profileBtn.contains(event.target) && !profilePopup.contains(event.target)) {
                profilePopup.classList.remove("show");
            }
        });
    });

</script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
