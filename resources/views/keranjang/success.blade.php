<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pesanan</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@0;1&display=swap" rel="stylesheet">
    <style>
        h2{
            font-family: Rubik, sans-serif;
            text-align: center;
            font-size: 20px;
        }
        .centered{
            margin-top: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img{
            width: 380px;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="centered">
        <img src="{{ asset ('assets/img/sukses.gif') }}" alt="">
    </div>
    <h2>Pesanan sudah sampai. Selamat menikmati !
        <br>
        Terimakasih sudah memesan di Gadiza Food !
    </h2>
    <center><a href="/" class="btn btn-outline-success">Kembali</a></center>
</body>
</html>