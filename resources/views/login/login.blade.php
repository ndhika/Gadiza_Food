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

    <style>
        body {
            background-image: url("{{ asset('assets/img/background.jpg') }}");
            background-size: cover;
        }
    </style>
</head>
<body>
    <main>
        <div class="main z-2 w-50 bg-white position-absolute top-50 start-50 translate-middle rounded h-auto ms-2 p-3 text-black">
            <center><img src="assets/img/logo.png" class="img-fluid " alt="logo" style="width: 90px;"></center>
            <CEnter><h4 class="mt-2">Buat Akun</h4></CEnter>
            <form>
            <div class="mb-3 mt-2 mx-5">
                <label for="nama_user" class="form-label ">Nama Lengkap</label>
                <input type="text" class="form-control mx-auto" id="nama_user" placeholder="nama">
            </div>
            <div class="mb-3 mt-2 mx-5">
                <label for="nama_user" class="form-label ">Username</label>
                <input type="text" class="form-control mx-auto" id="nama_user" placeholder="Username">
            </div>
            <div class="mb-3 mt-2 mx-5">
                <label for="nama_user" class="form-label ">No. Telepon</label>
                <input type="number" class="form-control mx-auto" id="nama_user" placeholder="No. Telepon">
            </div>
            <div class="mb-3 mt-2 mx-5">
                <label for="nama_user" class="form-label ">Email</label>
                <input type="text" class="form-control mx-auto" id="nama_user" placeholder="Email">
            </div>
            <div class="mb-3 mt-2 mx-5">
                <label for="nama_user" class="form-label ">Buat Password</label>
                <input type="password" class="form-control mx-auto" id="nama_user" placeholder="password">
            </div>
            <div class="mb-3 mt-2 mx-5">
                <label for="nama_user" class="form-label ">Alamat Lengkap</label>
                <input type="text" class="form-control mx-auto " id="nama_user" placeholder="Alamat Lengkap">
            </div>
            <center><button type="submit" class="btn btn-primary w-100">Kirim</button></center>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>