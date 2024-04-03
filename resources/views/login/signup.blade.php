<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gadiza Food</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="main w-50 bg-white position-absolute top-50 start-50 translate-middle rounded h-auto my-auto p-2 px-3 text-black">
            <center><img src="assets/img/logo.png" class="img-fluid " alt="logo" style="width: 90px;"></center>
            <p class="text-center mt-2 fs-4">Buat Akun</p>
            <form>
            <div class="mb-2 mt-2 mx-3">
                <label for="nama_lengkap" class="form-label fs-6 mb-1">Nama Lengkap</label>
                <input type="text" class="form-control border border-black mx-auto" id="nama_lengkap" placeholder="nama">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="username" class="form-label fs-6 mb-1">Username</label>
                <input type="text" class="form-control mx-auto border border-black" id="username" placeholder="Username">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="no_telepon" class="form-label fs-6 mb-1">No. Telepon</label>
                <input type="text" class="form-control mx-auto border border-black" id="no_telepon" placeholder="No. Telepon" inputmode="numeric">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="email" class="form-label fs-6 mb-1">Email</label>
                <input type="text" class="form-control mx-auto border border-black" id="email" placeholder="Email">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="buat_password" class="form-label fs-6 mb-1">Buat Password</label>
                <div class="input-group">
                    <input type="password" class="form-control border border-black border-end-0" id="buat_password" placeholder="Buat Password (min. 8 huruf)">
                    <button class="btn border-top border border-black border-bottom border-end border-start-0" type="button" id="togglePassword">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3 mt-2 mx-3">
                <label for="alamat_lengkap" class="form-label fs-6 mb-1">Alamat Lengkap</label>
                <input type="text" class="form-control mx-auto border border-black" id="alamat_lengkap" placeholder="Alamat Lengkap">
            </div>
            <div class="tombol d-grid col-11 mx-auto">
                <button type="submit" class="btn mt-2">Daftar</button>
            </div>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="#">Login</a></p>
            </div>

        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>