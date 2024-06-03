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

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="bi bi-database-check"></i>
                    </button>
                    <div class="sidebar-logo">
                        <p class="mt-3">Gadiza Food</p>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="/userAdmin" class="sidebar-link">
                            <i class="bi bi-file-person"></i>
                            <span>User</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-file-person-fill"></i>
                            <span>Profile User</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-shop"></i>
                            <span>Menu</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/order" class="sidebar-link">
                            <i class="bi bi-card-checklist"></i>
                            <span>Orderan</span>
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
</body>

</html>