<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Owner Tensai Edutor</title>
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        /* Custom styling for the logout button */
        .logout-button {
            color: white; /* Putih */
            border: none;
            width: 100%;
            padding: 10px;
            text-align: left; /* Align text and icon to the left */
        }

        .logout-button i {
            margin-right: 8px; /* Add space between icon and text */
        }

        /* Styling for logout container */
        .logout-container {
            margin-top: 0px; /* Adds some space above the logout button */
            padding-left: 10px; /* Align to the content in sidebar */
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard/owner">
                    <i class="fas fa-home"></i> <!-- Add icon for home/dashboard -->
                    <span>Tensai Edutor</span>
                </a>
            </li>
            @if(auth()->user()->role === 'Owner')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengajar.index') }}">
                        <i class="fas fa-chalkboard-teacher"></i> <!-- Ikon untuk Pengajar -->
                        <span>Data Pengajar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa.index') }}">
                        <i class="fas fa-user-graduate"></i> <!-- Ikon untuk Siswa -->
                        <span>Data Siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transaksi.index') }}">
                        <i class="fas fa-money-check-alt"></i> <!-- Ikon untuk Transaksi -->
                        <span>Data Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <i class="fas fa-user-alt"></i> <!-- Ikon untuk User -->
                        <span>Data User</span>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengajar.index') }}">
                        <i class="fas fa-chalkboard-teacher"></i> <!-- Ikon untuk Pengajar -->
                        <span>Data Pengajar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa.index') }}">
                        <i class="fas fa-user-graduate"></i> <!-- Ikon untuk Siswa -->
                        <span>Data Siswa</span>
                    </a>
                </li>
            @endif

            <!-- Logout Button -->
            <li class="nav-item logout-container">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn logout-button">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div class="row">
                <div class="col-lg-12">
                    @yield('section')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
