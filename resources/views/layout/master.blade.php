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
            <a class="nav-link" href="#" id="profileBtn">Profil</a>
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

<!-- Pop-up Profil -->
<div class="profile-popup" id="profilePopup">
    <div class="text-center">
        <div class="profile-avatar bg-dark">A</div>
        <h6 class="mt-2">ADMIN</h6>
        <p class="small text-muted">Sync and personalize Chrome across your devices</p>
        <button class="btn btn-success btn-sm">Turn on sync...</button>
        <hr>
        <ul class="list-unstyled text-start small">
            <li class="py-1"><i class="fa-solid fa-key"></i> Passwords and autofill</li>
            <li class="py-1"><i class="fa-solid fa-gear"></i> Manage your Google Account</li>
            <li class="py-1"><i class="fa-solid fa-user-plus"> </i>  Add New Profile</li>
            <li class="py-1"><i class="fa-solid fa-right-from-bracket"></i> Sign out of Chrome</li>
        </ul>
    </div>
</div>

<!-- Footer -->
<footer class="fixed-bottom bg-dark-subtle text-dark py-2 text-center">
    <div class="text-end">
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
