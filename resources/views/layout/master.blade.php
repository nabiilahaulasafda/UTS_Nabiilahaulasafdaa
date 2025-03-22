<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DPR Aceh')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <style>
        /* body dan html memenuhi layar penuh */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: rgb(196, 195, 195);
        }

        /* Wrapper agar konten utama memenuhi layar */
        .wrapper {
            display: flex;
            flex: 1;
            flex-direction: row;
            min-height: 100vh;
        }
        .hero {
            position: relative;
            background: url('{{asset('/image/y.jpg')}}') no-repeat center center/cover;
            height: 90vh;
            display: flex;
            align-items: top;
            justify-content: left;
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

        /* Sidebar Styling */
        .sidebar {
            background: linear-gradient(to bottom, #5B0000, #C06D6D);
            color: white;
            min-height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 10px;
            display: block;
            text-decoration: none;
            padding-left: 20pt;
        }
        .sidebar a:hover {
            background: rgba(163, 163, 163, 0.2);
        }
        .card-transparent {
            background: rgba(255, 255, 255, 0);
            border: 2px solid rgba(194, 194, 194, 0.5);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 400px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            margin-bottom: 20px;
        }

        /* Cuaca & Tanggal Langsung di Background */
        .weather-box {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Profil Pop-up */
        .profile-popup {
            position: absolute;
            top: 50px;
            right: 20px;
            width: 250px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
            display: none;
            z-index: 1000;
        }
        .profile-popup.show {
            display: block;
        }
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
        .gradient-nav {
            background: linear-gradient(to right, #5B0000, #C06D6D); /* Warna gradasi */
            color: white;
            border: black;
        }
         /* Footer */
         .footer {
            background: #5B0000;
            color: white;
            text-align: end;
            padding: 10px;
            margin-top: auto;

        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    @include('layout.sidebar')

    <!-- Main Content -->
    <div class="content" style="margin-left: 250px; padding: 20px;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light" style="border-radius: 10px">
            <div class="container-fluid">
                <h5 class="m-0">ADMINISTRATOR</h5>
                <div>
                    <a href="#" class="text-secondary" id="profileBtn">
                        <i class="fas fa-user-circle fa-2x"></i>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Profil Pop-up -->
        <div class="profile-popup" id="profilePopup">
            <div class="text-center">
                <div class="profile-avatar bg-dark">A</div>
                <h6 class="mt-2">ADMIN</h6>
                <p class="small text-muted">Kelola akun admin Anda</p>
                <button class="btn btn-success btn-sm">Edit Profil</button>
                <hr>
                <ul class="list-unstyled text-start small mx-3">
                    <li class="py-1"><i class="fa-solid fa-key"></i> Ganti Password</li>
                    <li class="py-1"><i class="fa-solid fa-gear"></i> Pengaturan</li>
                    <li class="py-1"><i class="fa-solid fa-right-from-bracket"></i> Logout</li>
                </ul>
            </div>
        </div>

        <!-- Konten Halaman -->
        <div class="container mt-4">
            @yield('isi')
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div>
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
