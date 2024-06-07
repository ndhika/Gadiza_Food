<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@400;600&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="assets/img/logo.png" type="image/png">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- datatables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
</head>

<body>
    <div class="sidebar">
        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="bi bi-layout-wtf"></i>
                    </button>
                    <div class="sidebar-logo">
                        <p class="mt-3">Gadiza Food</p>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="/berandaAdmin" class="sidebar-link">
                            <i class="bi bi-layout-text-window-reverse"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/userAdmin" class="sidebar-link">
                            <i class="bi bi-file-person"></i>
                            <span>User</span>
                        </a>
                    </li>
                    {{-- <li class="sidebar-item">
                        <a href="/profileAdmin" class="sidebar-link">
                            <i class="bi bi-file-person-fill"></i>
                            <span>Profile User</span>
                        </a>
                    </li> --}}
                    <li class="sidebar-item">
                        <a href="/MenuAdmin" class="sidebar-link">
                            <i class="bi bi-shop"></i>
                            <span>Menu</span>
                        </a>
                    <li class="sidebar-item">
                        <a href="{{ route('orderAdmin.index') }}" class="sidebar-link">
                            <i class="bi bi-card-checklist"></i>
                            <span>Order</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/aboutAdmin" class="sidebar-link">
                            <i class="bi bi-card-checklist"></i>
                            <span>about admin</span>
                        </a>
                    </li>                     
                </ul>
                <div class="sidebar-footer">
                    <li class="sidebar-item ms-1">
                        <a class="sidebar-link">
                        <i class="bi bi-person"></i>
                            <span>{{ auth()->user()->nama }}</span>
                        </a>
                    </li>
                    <a class="sidebar-link mb-3">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item p-2"><i class="bi bi-box-arrow-in-left"></i> Log out</button>
                    </form>
                    </a>
                </div>
            </aside>
            <div class="main p-3">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/register.js') }}"></script> 
</body>

</html>